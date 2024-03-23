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
                    <li><a href="{{ route('aboutme') }}">Home</a></li>
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
            @foreach ($books as $book)
                <section id="books" class="books">
                    <div class="container" data-aos="fade-up">
                        <div class="row position-relative">

                            <div class="row position-relative">
                                <div class="col-lg-5">
                                    <img src="{{ asset('storage/books/' . $book->book_cover) }}" class="col-lg-7">
                                </div>
                                <div class="col-lg-7">
                                    <h4>
                                        <a style="font-weight: bold; color: #e7a801; text-decoration: underline;"
                                            href="#">{{ $book->title }}</a>
                                    </h4>
                                    <p>{{ $book->book_desc }}.</p>
                                    <p>Authors: {{ $book->author }}</p>
                                    <p>({{ $book->publisher }}, {{ $book->location }}, {{ $book->publication_year }})</p>
                                </div>
                            </div>
                        </div>
                </section>
            @endforeach

    </main><!-- End #main -->
@endsection
