<?php

namespace App\Observers;

use App\Models\Course;
use Illuminate\Support\Str;

class CourseObserver
{
    /**
     * Handle the course "creating" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function creating(Course $course)
    {
        $course->slug = Str::slug($course->name);
    }
}
