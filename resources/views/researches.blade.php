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

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
<div class="row justify-content-center">
 <div class="col-lg-10" align-center>
              <p>
                In the pursuit of advancing knowledge and contributing to my field, I have authored and
                edited a range of research works spanning various topics. Below, you'll find a compilation of my scholarly contributions,
                including books and journal special issues. Each work represents a culmination of rigorous investigation, analysis,
                and insights aimed at addressing pertinent issues and pushing the boundaries of understanding.
              </p>
          </div>
</div>

        </div>
      </div>

          @foreach ($researches as $research )
          <section id="research" class="research">
              <div class="container" data-aos="fade-up">
              <div class="row position-relative">

                      <div class="row justify-content-center">
                          <div class="col-lg-5">
                          <img src="{{asset('storage/researches/' .$research->research_image)}}" class="col-lg-7">
                          </div>
                          <div class="col-lg-5">
                          <h4>
                              <a style="font-weight: bold; color: #e7a801; text-decoration: underline;" href="#">{{$research->title}}</a>
                          </h4>

                          <p>{{$research->research_desc}}.</p>

                          </div>
              </div>
              </div>
          </section>
          @endforeach


    </main>
@endsection
