<?php

namespace App\Models;

use App\Filters\Course\CourseFilters;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Course extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'free' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'started',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'users',
    ];

    /**
     * Get the formattedAccess attribute.
     *
     * @return string
     */
    public function getFormattedAccessAttribute()
    {
        return $this->free ? 'free' : 'premium';
    }

    /**
     * Get the formattedStarted attribute.
     *
     * @return string
     */
    public function getFormattedStartedAttribute()
    {
        return $this->started ? 'Started' : 'Not started';
    }

    /**
     * Scope courses by filters from the query.
     *
     * @param Builder $builder
     * @param Request $request
     * @param array $filters
     * @return void
     */
    public function scopeFilter(Builder $builder, Request $request, array $filters = [])
    {
        return (new CourseFilters($request))->add($filters)->filter($builder);
    }

    /**
     * Checks whether or not the authenticated
     * user has started this course.
     *
     * @return void
     */
    public function getStartedAttribute()
    {
        if (!auth()->check()) {
            return false;
        }

        return $this->users->contains(auth()->user());
    }

    /**
     * Subjects relationship.
     *
     * @return void
     */
    public function subjects()
    {
        return $this->morphToMany(Subject::class, 'subjectable');
    }

    /**
     * Users relationship.
     *
     * @return void
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
