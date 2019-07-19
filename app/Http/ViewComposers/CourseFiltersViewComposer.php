<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Filters\Course\CourseFilters;

class CourseFiltersViewComposer
{
    protected $mappings;
    
    public function compose(View $view)
    {
        if (!$this->mappings) {
            $this->mappings = CourseFilters::mappings();
        }

        $view->with('mappings', $this->mappings);
    }
}
