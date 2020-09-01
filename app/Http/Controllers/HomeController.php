<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobseeker;
use App\Employer;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function jobseeker_info()
    {
        $jobseekers = Jobseeker::all();
        return view('jobseeker.jobseeker_info',compact('jobseekers'));
    }
    public function employer_info()
    {
        $employers = Employer::all();
        return view('employer.employers_info',compact('employers'));
    }
}
