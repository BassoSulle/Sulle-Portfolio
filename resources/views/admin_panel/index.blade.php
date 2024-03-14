@extends('layout.admin')


@section( 'page_title' )

@endsection

@section( 'content' )


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item active" ><a href="{{route('dashboard')}}">Dashboard</a></li>
          {{-- <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Blank</li> --}}
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">

                <center>
                <img src="{{asset('admin_assets/img/comming soon.png')}}" class="mt-5 mb-4" style="width: 400px;" alt="Profile" >
                </center>


            </div>
          </div>

        </div>

        {{-- <div class="col-lg-6">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Example Card</h5>
              <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
            </div>
          </div>

        </div> --}}
      </div>
    </section>

  </main><!-- End #main -->

@endsection
