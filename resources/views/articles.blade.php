@extends('layout.index')

@section('page_title')
    Articles
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/article1.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Articles</h2>
                {{-- <ol>
          <li>About</li>
        </ol> --}}

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    {{-- <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div> --}}

                    <div class="row gy-6 justify-content-center">
                        <div class="col-lg-8" style="left: 5cm;">
                            <h4>List of my articles </h4>
                            <div>
                                <p>Below are listed all publications in date order. Links are provided to most. Some
                                    publications have copyright restrictions, but where possible alternates are provided if
                                    you do not have access. If you cannot get access to particular articles, please be in
                                    touch at ians(at)ids.ac.uk,
                                    and I will try and send you a copy (not possible for books I am afraid).</p>

                                @forelse ($articles as $article)
                                    <p>
                                        {{ $article->author }} ({{ $article->publication_year }}), <a
                                            href="{{ $article->article_link }}" style="text-decoration: underline;"
                                            target="-blanck">{{ $article->title }}</a>.
                                        <span></span>
                                    </p>
                                @empty
                                @endforelse

                                {{-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div> --}}
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->


    </main>
@endsection
