<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function index()
    {
        $data = Project::orderBy('id', 'asc')->get();
        return view('project.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    $request->validate([
        'judul' => 'required',
        'link' => 'required',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
        'gambar' => 'mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    if ($request->hasFile('gambar')) {
        $gambar_file = $request->file('gambar');
        $gambar_ekstensi = $gambar_file->getClientOriginalExtension();
        $gambar_baru = date('ymdhis') . ".$gambar_ekstensi";
        $gambar_file->move(public_path('images'), $gambar_baru);
    } else {
        $gambar_baru = null;
    }

    $project = new Project;
    $project->judul = $request->input('judul');
    $project->desc = $request->input('desc');
    $project->link = $request->input('link');
    $project->start_date = $request->input('start_date');
    $project->end_date = $request->input('end_date');
    $project->gambar = $gambar_baru;
    $project->save();

    \Log::info('Project saved:', $project->toArray());

    return redirect()->route('project.index')->with('success', 'Berhasil menambahkan data');
}


    /**
     * Display the specified resource.
     */
    public function show($judul)
    {
        // Mengubah judul di URL menjadi format yang bisa dicocokkan dengan judul di database
        $projectTitle = str_replace('-', ' ', $judul);
        // $projectTitle = str_replace('-', ' ', strtolower($judul));

        // Mencari proyek berdasarkan judul
        $project = Project::where('judul', $projectTitle)->firstOrFail();

        $recent_projects = Project::orderBy('created_at', 'desc')
            ->where('judul', '!=', $project->judul) // Exclude the current project
            ->limit(5)
            ->get();

        return view('haldetails', compact('project', 'recent_projects'));
    } 


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Project::where('id', $id)->first();
        return view('project.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validatedData = $request->validate([
            'judul' => 'required',
            'link' => 'required',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'gambar' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'desc' => 'nullable'
        ]);

        if ($request->hasFile('gambar')) {
            $gambar_file = $request->file('gambar');
            $gambar_ekstensi = $gambar_file->extension();
            $gambar_baru = date('ymdhis') . ".$gambar_ekstensi";
            $gambar_file->move(public_path('images'), $gambar_baru);

            $project->gambar = $gambar_baru;
        }

        $project->judul = $validatedData['judul'];
        $project->desc = $request->input('desc');
        $project->link = $validatedData['link'];
        $project->start_date = $request->input('start_date');
        $project->end_date = $request->input('end_date');
        $project->save();

        return redirect()->route('project.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);

        if ($project->gambar != null) {
            File::delete(public_path('images/' . $project->gambar));
        }

        $project->delete();

        return redirect()->route('project.index')->with('success', 'Berhasil menghapus data');
    }
}
