@extends('layout.index')
@section('page_title')
Aboutme
@endsection
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About Me</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>About me</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row position-relative">

          <div class="col-lg-5 about-img" style="background-image: url(assets/img/sulle.jpeg);">
            <h4>Emmanuel Sulle, PhD</h4>
            <h5>University of Aga Khan</h5>
            <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>

        </div>
          <div class="col-lg-7">
            {{-- <h2>Consequatur eius et magnam</h2>
            <div class="our-story">
              <h4>Est 1988</h4>
              <h3>Our Story</h3> --}}
              <p>A blog is a website that features entries (often called posts)
                containing information, commentary, or personal experiences.
                These entries are typically displayed in reverse chronological order,
                with the most recent posts appearing first. Blogs can be created by individuals
                or groups and cover a wide range of topics</p>

              <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet
                 consequuntur minima quia maxime autem. Quidem id sed ratione.
                 Tenetur provident autem in reiciendis rerum at dolor.
                 Aliquam consectetur laudantium temporibus dicta minus dolor.</p>

              <p>Inventore aliquam beatae at et id alias.
                 Ipsa dolores amet consequuntur minima quia maxime autem.
                 Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor.
                 Aliquam consectetur laudantium temporibus dicta minus dolor.</p>

              <p>Inventore aliquam beatae at et id alias. Ipsa dolores amet consequuntur minima quia maxime autem.
                 Quidem id sed ratione. Tenetur provident autem in reiciendis rerum at dolor.
                 Aliquam consectetur laudantium temporibus dicta minus dolor.</p>

              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commo</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Duis aute irure dolor in reprehenderit in</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
              </ul>
              <p>Vitae autem velit excepturi fugit. Animi ad non. Eligendi et non nesciunt suscipit repellendus porro in quo eveniet. Molestias in maxime doloremque.</p>

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

  </main><!-- End #main -->
<br><br>


@endsection
