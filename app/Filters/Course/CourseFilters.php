<?php

namespace App\Filters\Course;

use App\Models\Subject;
use App\Filters\FiltersAbstract;
use App\Filters\Course\Ordering\ViewsOrder;

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'views' => ViewsOrder::class,
    ];

    /**
     * Filter mappings.
     *
     * @return array
     */
    public static function mappings()
    {
        $map = [

            /**
             * Access filter
             */
            'access' => [
                'title' => 'Access',
                'options' => [
                    'free' => 'Free',
                    'premium' => 'Premium',
                ]
            ],

            /**
             * Difficulty filter
             */
            'difficulty' => [
                'title' => 'Difficulty',
                'options' => [
                    'beginner' => 'Beginner',
                    'intermediate' => 'Intermediate',
                    'advanced' => 'Advanced',
                ]
            ],

            /**
             * Type filter
             */
            'type' => [
                'title' => 'Type',
                'options' => [
                    'theory' => 'Theory',
                    'project' => 'Project',
                    'snippet' => 'Snippet',
                ]
            ],

            /**
             * Subject filter
             */
            'subject' => [
                'title' => 'Subject',
                'options' => Subject::get()->pluck('name', 'slug')->toArray()
            ],
        ];

        /**
         * Filters to map only when the user is authenticated.
         */
        $mapWhenAuthenticated = [
            
            /**
             * Started filter
             */
            'started' => [
                'title' => 'Progress',
                'options' => [
                    'true' => 'Started',
                    'false' => 'Not started',
                ]
            ],
        ];

        if (auth()->check()) {
            $map = array_merge($map, $mapWhenAuthenticated);
        }

        return $map;
    }
}