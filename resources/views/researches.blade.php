@extends('layout.index')

@section('page_title')
    Researches
@endsection

@section('content')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

                <h2>Researches</h2>
                {{-- <ol>
          <li>About</li>
        </ol> --}}

            </div>
        </div><!-- End Breadcrumbs -->

<<<<<<< HEAD
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="col-lg-7" align-center>
              <p>
                In the pursuit of advancing knowledge and contributing to my field, I have authored and
                edited a range of research works spanning various topics. Below, you'll find a compilation of my scholarly contributions,
                including books and journal special issues. Each work represents a culmination of rigorous investigation, analysis,
                and insights aimed at addressing pertinent issues and pushing the boundaries of understanding.
              </p>
          </div>
        </div>
      </div>

          @foreach ($researches as $research )
          <section id="research" class="research">
              <div class="container" data-aos="fade-up">
              <div class="row position-relative">

                      <div class="row position-relative">
                          <div class="col-lg-5">
                          <img src="{{asset('storage/researches/' .$research->research_image)}}" class="col-lg-7">
                          </div>
                          <div class="col-lg-7">
                          <h4>
                              <a style="font-weight: bold; color: #e7a801; text-decoration: underline;" href="#">{{$research->title}}</a>
                          </h4>

                          <p>{{$research->research_desc}}.</p>

                          </div>
              </div>
              </div>
          </section>
          @endforeach
=======
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row position-relative">

                    {{-- <div class="col-lg-7 about-img" style="background-image: url(assets/img/about.jpg);"></div> --}}

                    <div class="col-lg-12">
                        <h2>Consequatur eius et magnam</h2>
                        <div class="our-story">
                            <h4>Est 1988</h4>
                            <h3>Our Story</h3>
                            <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime
                                autem. Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor. Aliquam
                                consectetur laudantium temporibus dicta minus dolor.</p>
                            <ul>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea
                                        commo</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit
                                        in</span></li>
                                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span>
                                </li>
                            </ul>
                            <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit
                                repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

                            {{-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div> --}}
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End About Section -->
>>>>>>> origin/bashiri


    </main>
@endsection
