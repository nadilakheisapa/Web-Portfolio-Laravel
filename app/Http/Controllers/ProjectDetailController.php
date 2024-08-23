<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectDetailController extends Controller
{
    public function haldetails($id)
    {
        // Mengambil data proyek berdasarkan ID
        $project = Project::findOrFail($id);

        // Mengembalikan view dengan data proyek
        return view('project.show', compact('project'));
    }
}
