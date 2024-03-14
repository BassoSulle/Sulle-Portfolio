@extends('layout.index')

@section('page_title')
Books
@endsection

@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/books.jpeg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Books</h2>
        <ol>
          <li><a href="">Home</a></li>
          <li>Books</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

      <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="col-lg-7" align-center>
            <p>
                Below is a listing of all books and journal special issues that I have written or edited.
                Links to purchase or download are provided if available.
            </p>
        </div>
      </div>
    </div>

<section id="books" class="books">
<div class="container" data-aos="fade-up">
 <div class="row position-relative">

        <div class="row position-relative">
            <div class="col-lg-5">
            <img src="assets/img/book2.jpg" class="col-lg-7">
            </div>
            <div class="col-lg-7">
            <h4>
                <a style="font-weight: bold; color: #e7a801; text-decoration: underline;" href="#">The cover page of testing book</a>

            </h4>
            <p>This is the cover page of the testing book.</p>
            <p>(Sulle Elibariki Basso, Arusha Tanzania,2022).</p>
            </div>


</div>
</div>

</section>

<section id="books" class="books">
    <div class="container" data-aos="fade-up">
     <div class="row position-relative">

            <div class="row position-relative">
                <div class="col-lg-5">
                <img src="assets/img/book1.jpg" class="col-lg-7">
                </div>
                <div class="col-lg-7">
                <h4>
                    <a style="font-weight: bold; color: #e7a801; text-decoration: underline;" href="#">Lerge size book for testing</a>

                </h4>
                <p>This is the cover page of the large book in term of size to see what images are supporsed to have.</p>
                <p>(Sulle Emmanuel, Dodoma,2019).</p>
                </div>


    </div>
    </div>

    </section>




  </main><!-- End #main -->
@endsection
