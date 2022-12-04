<?php

namespace App\View\Components;

use Illuminate\View\Component;

class UserNavbar extends Component
{

    public $teachingCourses;
    public $enrolledCourses;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($teachingCourses, $enrolledCourses)
    {
        $this->teachingCourses = $teachingCourses;
        $this->enrolledCourses = $enrolledCourses;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.user-navbar');
    }
}
