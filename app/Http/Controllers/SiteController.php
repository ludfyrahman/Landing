<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SchoolProfile;
use App\Models\Majors;
use App\Models\Agenda;
use App\Models\Teachers;
use App\Models\JobFair;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profiles = SchoolProfile::first();
        $majors = Majors::all();
        $agenda = Agenda::limit(4)->get();
        $teachers = Teachers::all();
        $title = 'HomePage | SMK';
        return view('pages.frontend.index', compact('profiles', 'agenda', 'teachers', 'majors', 'title'));
    }

    public function profile()
    {
        $profiles = SchoolProfile::first();
        $title = 'Profil | SMK';
        return view('pages.frontend.profile.index', compact('profiles', 'title'));
    }

    public function teachers(){
        $teachers = Teachers::all();
        return view('pages.frontend.teachers.index', compact('teachers'));
    }

    public function programs(){
        $majors = Majors::all();
        return view('pages.frontend.programs.index', compact('majors'));
    }

    public function works(){
        $jobfair = JobFair::all();
        return view('pages.frontend.works.index', compact('jobfair'));
    }
}
