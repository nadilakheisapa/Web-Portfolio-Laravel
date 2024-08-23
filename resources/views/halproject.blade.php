@extends('main')
@section('content')
    <main>
        <div class="container py-5">
            <div class="project-section" id="project">
                <h2 class="text-center mb-5">Projects</h2>
                <div class="row">
                    @foreach ($data_project as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="custom-card">
                                <img src="{{ asset('images/' . $item->gambar) }}" class="custom-card-img" alt="project1">
                                <div class="custom-card-body">
                                    <h5 class="custom-card-title">{{ $item->judul }}</h5>
                                    {{-- <p class="custom-card-text">{{ strip_tags($item->desc) }}</p> --}}
                                    {{-- <a href="{{ $item->link }}" class="btn text-light" style="background-color: #6a75f3">Link</a> --}}
                                    <a href="{{ route('project.show', $item->id) }}" class="btn text-light" style="background-color: #4251fc">Link</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

    <style>
        .custom-card {
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(17, 12, 12, 0.1);
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .custom-card-img {
            width: 100%;
            height: 140px;
            object-fit: cover;
        }

        .custom-card-body {
            padding: 1rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .custom-card-title {
            margin-bottom: 0.75rem;
        }

        .custom-card-text {
            flex: 1;
        }

        .btn-primary {
            margin-top: auto;
        }

        .custom-card .btn {
            background-color: #6a75f3;
            border-radius: 5px;
            padding: 8px 16px;
            font-size: 14px;
            display: inline-block;  /* Ukuran button akan menyesuaikan dengan ukuran teks */
            width: 90px;            /* Pastikan button tidak memiliki lebar tetap */
        }

        .custom-card .btn:hover {
            background-color: #5a65e0;
        }



    </style>
@endsection
