@extends('main')

@section('content')
<main>
    <div class="container py-5">
        <div class="row pt-5 mt-4">
            <div class="col-lg-8">
                <!-- Blog Details Section -->
                <div id="blog-details" class="blog-details section">
                    <div class="container">
                        <article class="article">
                            <div class="post-img" style="height: 450px;">
                                <img src="{{ asset('images/' . $project->gambar) }}" alt="{{ $project->judul }}" class="img-fluid">
                            </div>
                            <h2 class="title">{{ $project->judul }}</h2>
                            <p>{{ $project->start_date }} - {{ $project->end_date }}</p>
                            <!-- Date Range Display -->
                            {{-- <div class="date-range">
                                <p><strong>Tanggal:</strong> Awal: {{ \Carbon\Carbon::parse($project->start_date)->format('d M Y') }} - Akhir: {{ \Carbon\Carbon::parse($project->end_date)->format('d M Y') }}</p>
                            </div> --}}
                            <!-- End Date Range Display -->
                            <div class="content">
                                <p>{{ $project->desc }}</p>
                                <a href="{{ $project->link }}" class="btn text-light" style="background-color: #6a75f3">Link Project</a>
                                {{-- <p><strong>Link Project:</strong> <a href="{{ $project->linkproject }}" target="_blank">{{ $project->linkproject }}</a></p> --}}
                            </div>
                            {{-- <div class="meta-bottom">
                                <i class="bi bi-folder"></i>
                                <ul class="cats">
                                    <li><a href="#">IT</a></li>
                                </ul>
                                <i class="bi bi-tags"></i>
                                <ul class="tags">
                                    <li><a href="#">Application</a></li>
                                    <li><a href="#">Desain</a></li>
                                    <li><a href="#">Marketing</a></li>
                                </ul>
                            </div> --}}
                        </article>
                    </div>
                </div>
                <!-- /Blog Details Section -->

            </div>
            <div class="col-lg-4 sidebar">
                <div class="">
                    <!-- Search Widget -->
                    {{-- <div class="search-widget widget-item">
                        <h3 class="widget-title">Search</h3>
                        <form action="">
                            <input type="text">
                            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
                        </form>
                    </div> --}}
                    <!-- /Search Widget -->

                    <!-- Recent Projects Widget -->
                    <div class="recent-projects-widget widget-item">
                        <h3 class="widget-title">Proyek Lainnya</h3>
                        @foreach ($recent_projects as $recent)
                            <div class="recent-project-item mb-3">
                                <img src="{{ asset('images/' . $recent->gambar) }}" alt="{{ $recent->judul }}" class="img-fluid" style="width: 100px; height: 60px; object-fit: cover;">
                                <div class="recent-project-content">
                                    {{-- <h5><a href="{{ route('project.show', $recent->judul) }}" class="recent-project-link">{{ $recent->judul }}</a></h5> --}}
                                    <h5>
                                        <a href="{{ route('project.show', str_replace(' ', '-', $recent->judul)) }}" class="recent-project-link">
                                            {{ $recent->judul }}
                                        </a>
                                        {{-- <a href="{{ route('project.show', strtolower(str_replace(' ', '-', $recent->judul))) }}" class="recent-project-link">
                                            {{ $recent->judul }}
                                        </a> --}}
                                    </h5>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- /Recent Projects Widget -->

                    <!-- Tags Widget -->
                    <div class="tags-widget widget-item">
                        <h3 class="widget-title">Label</h3>
                        <ul>
                            <li><a href="#">Aplikasi</a></li>
                            <li><a href="#">IT</a></li>
                            <li><a href="#">Desain</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Technology</a></li>
                        </ul>
                    </div>
                    <!-- /Tags Widget --> 
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .recent-project-item {
        display: flex;
        align-items: center;
    }

    .recent-project-item img {
        margin-right: 10px;
    }

    .recent-project-content h5 {
        margin: 0;
        font-size: 14px;
    }

    .recent-project-link {
        text-decoration: none;
        color: #333; /* Initial color (black) */
        font-weight: normal; /* Regular font weight */
    }

    .recent-project-link:hover {
        color: #007bff; /* Change color to blue on hover */
        text-decoration: underline; /* Underline on hover to indicate it's clickable */
    }
    .post-img img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

</style>
@endsection
