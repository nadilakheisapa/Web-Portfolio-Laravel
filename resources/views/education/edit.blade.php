@extends('admin')

@section('content')
<main>
    <div class="container py-5">
        {{-- <h3 class="text-dark mb-4">Edit Education</h3> --}}

        <!-- Mulai Card -->
        <div class="card">
            <div class="card-header" style="background-color: #838dfc;">
                <h4 class="mb-0 text-white">Form Edit Education</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('education.update', $data->id) }}" method="POST">
                    @csrf
                    @method('put')

                    <!-- Row untuk Nama Sekolah -->
                    <div class="row mb-3">
                        <label for="nama" class="col-md-3 col-form-label">Nama Sekolah</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Sekolah" value="{{ $data->nama }}">
                        </div>
                    </div>

                    <!-- Row untuk Jurusan -->
                    <div class="row mb-3">
                        <label for="jurusan" class="col-md-3 col-form-label">Jurusan (Field Study)</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan yang ditempuh" value="{{ $data->jurusan }}">
                        </div>
                    </div>

                    <!-- Row untuk Tanggal Mulai dan Tanggal Akhir -->
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

                    <!-- Row untuk Deskripsi -->
                    <div class="row mb-3">
                        <label for="desc" class="col-md-3 col-form-label">Deskripsi</label>
                        <div class="col-md-9">
                            <textarea name="desc" class="form-control summernote" rows="5">{{ $data->desc }}</textarea>
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
