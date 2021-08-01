<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCoursesRequest;
use App\Http\Requests\UpdateCoursesRequest;
use App\Repositories\CoursesRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ExploreController extends AppBaseController
{
    /** @var  CoursesRepository */
    private $coursesRepository;

    public function __construct(CoursesRepository $coursesRepo)
    {
        $this->coursesRepository = $coursesRepo;
    }

    /**
     * Display a listing of the Courses.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $courses = $this->coursesRepository->all();

        return view('explore')
            ->with('courses', $courses);
    }
}
