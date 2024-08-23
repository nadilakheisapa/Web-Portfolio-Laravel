@extends('admin')
@section('content')
<main>
    <div class="container py-5">
        {{-- <h2 class="card-title text-dark mb-4">Project Page</h2> --}}

        <!-- Mulai Card -->
        <div class="card mt-5">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #838dfc;">
                <h4 class="mb-0 text-white">Daftar Project</h4>
                <a href="{{ route('project.create') }}" class="btn btn-primary" disabled="disabled">+ Tambah Project</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="col-1">No</th>
                                <th>Nama Project</th>
                                <th>Deskripsi</th>
                                <th>Tanggal</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('images/' . $item->gambar) }}" alt="gambar" style="width: 85px; height: 85px">
                                        <h5 class="d-inline m-2">{{ $item->judul }}</h5>
                                    </td>
                                    <td>{{ strip_tags($item->desc) }}</td>
                                    <td>{{ $item->start_date }} - {{ $item->end_date }}</td>
                                    <td>
                                        <a href="{{ $item->link }}" class="btn btn-sm btn-info">
                                            <i class="fas fa-link"></i>
                                        </a>
                                        <a href="{{ route('project.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form onsubmit="return confirm('Yakin mau hapus data ini ?')" action="{{ route('project.destroy', $item->id) }}" class="d-inline" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger" type="submit">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Akhir Card -->

    </div>
</main>

<style>
    .table th, .table td {
        vertical-align: middle;
    }

    .table td {
        padding: 0.75rem;
    }

    .table thead th {
        background-color: #f8f9fa;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f2f2f2;
    }

    .table-bordered {
        border: 1px solid #dee2e6;
    }

    .table-bordered th, .table-bordered td {
        border: 1px solid #cacacb;
    }

    .table-light {
        background-color: #f8f9fa;
    }
</style>
@endsection
