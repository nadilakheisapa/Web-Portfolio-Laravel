@extends('admin')

@section('content')
<main>
    <div class="container py-5">
        {{-- <h3 class="text-dark mb-4">Tambah Education</h3> --}}
        <div class="pb-3">
            <a href="{{ route('education.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <!-- Mulai Card -->
        <div class="card">
            <div class="card-header" style="background-color: #838dfc;">
                <h4 class="mb-0 text-white">Form Tambah Education</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('education.store') }}" method="POST">
                    @csrf

                    <!-- Row untuk Nama Sekolah -->
                    <div class="row mb-3">
                        <label for="nama" class="col-md-3 col-form-label">Nama Sekolah</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sekolah" value="{{ Session::get('nama') }}">
                        </div>
                    </div>

                    <!-- Row untuk Jurusan -->
                    <div class="row mb-3">
                        <label for="jurusan" class="col-md-3 col-form-label">Jurusan (Field Study)</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan yang ditempu" value="{{ Session::get('jurusan') }}">
                        </div>
                    </div>

                    <!-- Row untuk Tanggal Mulai dan Akhir -->
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

                    <!-- Row untuk Deskripsi -->
                    <div class="row mb-3">
                        <label for="desc" class="col-md-3 col-form-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea name="desc" id="desc" class="form-control summernote" rows="5">{{ Session::get('desc') }}</textarea>
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
