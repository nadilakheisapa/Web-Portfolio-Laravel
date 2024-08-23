@extends('admin')

@section('content')
<main>
    <div class="container py-5">
        {{-- <h3 class="text-dark mb-4">Edit Project</h3> --}}
        <div class="pb-3">
            <a href="{{route('project.index')}}" class="btn btn-secondary">Kembali</a>
        </div>
        <!-- Mulai Card -->
        <div class="card">
            <div class="card-header" style="background-color: #838dfc;">
                <h4 class="mb-0 text-white">Form Edit Project</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('project.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')

                    <!-- Row untuk Nama Project -->
                    <div class="row mb-3">
                        <label for="judul" class="col-md-3 col-form-label">Nama Project</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Nama project" value="{{ $data->judul }}">
                        </div>
                    </div>

                    <!-- Row untuk Gambar Project -->
                    <div class="row mb-3">
                        <label for="gambar" class="col-md-3 col-form-label">Preview Project (Gambar)</label>
                        <div class="col-md-9">
                            <img src="{{ asset('images/' . $data->gambar) }}" class="mb-3" style="width: 200px" alt="gambar">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                    </div>

                    <!-- Row untuk Link Project -->
                    <div class="row mb-3">
                        <label for="link" class="col-md-3 col-form-label">Link Project</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="link" id="link" placeholder="Link dari project" value="{{ $data->link }}">
                        </div>
                    </div>

                    <!-- Row untuk Deskripsi -->
                    <div class="row mb-3">
                        <label for="desc" class="col-md-3 col-form-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea name="desc" id="desc" class="form-control summernote" rows="5">{{ $data->desc }}</textarea>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-md-3 col-form-label">Tanggal Mulai</label>
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="start_date" value="{{ $data->start_date }}">
                        </div>
                        <label class="col-md-3 col-form-label">Tanggal Akhir</label>
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="end_date" value="{{ $data->end_date }}">
                        </div>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="row">
                        <div class="col-md-9 offset-md-3">
                            <button class="btn btn-primary" name="simpan" type="submit">Simpan</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- Akhir Card -->
    </div>
</main>
@endsection
