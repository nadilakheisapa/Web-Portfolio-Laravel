@extends('admin')

@section('content')
<main>
    <div class="container py-5">
        {{-- <h2 class="card-title text-dark mb-4">Education Page</h2> --}}

        <!-- Mulai Card -->
        <div class="card mt-5">
            <div class="card-header d-flex justify-content-between align-items-center" style="background-color: #838dfc;">
                <h4 class="mb-0 text-white">Daftar Education</h4>
                <a href="{{ route('education.create') }}" class="btn btn-primary">+ Tambah Education</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th class="col-1">No</th>
                                <th>Nama Sekolah</th>
                                <th>Jurusan</th>
                                <th>Start Date</th>
                                <th>End Date</th>
                                <th class="col-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jurusan }}</td>
                                    <td>{{ $item->start_date_ind }}</td>
                                    <td>{{ $item->end_date_ind }}</td>
                                    <td>
                                        <a href="{{ route('education.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form onsubmit="return confirm('Yakin mau hapus data ini ?')" action="{{ route('education.destroy', $item->id) }}" class="d-inline" method="POST">
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
