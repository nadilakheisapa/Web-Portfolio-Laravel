@extends('admin')

@section('content')
<main>
    <div class="container py-5">
        {{-- <h3 class="text-dark mb-4">Tambah Project</h3> --}}
        <div class="pb-3">
            <a href="{{ route('project.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <!-- Mulai Card -->
        <div class="card">
            <div class="card-header" style="background-color: #838dfc;">
                <h4 class="mb-0 text-white">Form Tambah Project</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('project.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Row untuk Nama Project -->
                    <div class="row mb-3">
                        <label for="judul" class="col-md-3 col-form-label">Nama Project</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="judul" id="judul" placeholder="Nama Project">
                        </div>
                    </div>

                    <!-- Row untuk Preview Project (Gambar) -->
                    <div class="row mb-3">
                        <label for="gambar" class="col-md-3 col-form-label">Preview Project (Gambar)</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="gambar" id="gambar">
                        </div>
                    </div>

                    <!-- Row untuk Link Project -->
                    <div class="row mb-3">
                        <label for="link" class="col-md-3 col-form-label">Link Project</label>
                        <div class="col-md-9">
                            <input type="url" class="form-control" name="link" id="link" placeholder="Link dari Project">
                        </div>
                    </div>

                    <!-- Row untuk Deskripsi -->
                    <div class="row mb-3">
                        <label for="desc" class="col-md-3 col-form-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea name="desc" id="desc" class="form-control summernote" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3">Tanggal Mulai</div>
                        <div class="col-md-3">
                            <input type="date" class="form-control form-control-sm" name="start_date" value="{{ Session::get('start_date') }}">
                        </div>
                        <div class="col-md-3">Tanggal Akhir</div>
                        <div class="col-md-3">
                            <input type="date" class="form-control form-control-sm" name="end_date" value="{{ Session::get('end_date') }}">
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
