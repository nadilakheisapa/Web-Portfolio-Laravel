<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the homepage with education and project data.
     */
    public function index()
    {
        $data_education = Education::orderBy('id', 'asc')
        ->select('nama', 'jurusan', 'start_date', 'end_date', 'desc')
        ->get()
        ->map(function ($education) {
            $education->start_date = Carbon::parse($education->start_date);
            $education->end_date = Carbon::parse($education->end_date);
            return $education;
        });

        $data_project = project::orderBy('judul', 'asc')
        ->select('id','judul', 'gambar', 'desc', 'link', 'start_date', 'end_date')
        ->get();

        return view('index', [
            'data_education' => $data_education,
            'data_project' => $data_project
        ]);
    }


    /**
     * Display the project page.
     */
    public function halproject()
    {
        $data_project = project::orderBy('judul', 'asc')
            ->select('id','judul', 'gambar', 'desc', 'link')
            ->get();

        return view('halproject', [
            'data_project' => $data_project
        ]);
    }


    /**
     * Display the blog page.
     */
    // public function halblog()
    // {
    //     $data_project = project::orderBy('judul', 'asc')
    //         ->select('id','judul', 'gambar', 'desc', 'link')
    //         ->get();

    //     return view('halproject', [
    //         'data_project' => $data_project
    //     ]);
    // }
}
