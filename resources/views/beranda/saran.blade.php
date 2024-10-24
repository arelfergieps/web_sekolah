@extends('beranda.master')
@section('master')
<main id="main">

  <!-- ======= Breadcrumbs ======= -->
  <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Saran SMKS TARUNA MANDIRI SRONO </h2>
        <ol>
          <li><a href="{{ url('/beranda') }}">Home</a></li>
          <li><a href="{{url ('/logout')}}">Logout</a></li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->

  <!-- ======= Portfolio Details Section ======= -->
  <section id="portfolio-details" class="portfolio-details">
    <div class="container">

      <div class="row gy-4">
      @foreach ($data as $item => $row)
      <div class="col-lg-12">
          <div class="portfolio-info">
              <div class="d-flex justify-content-between">
                  <div class=""> <h3> {{ $row->nama }} </h3></div>
                  <div class="">
                    <a href="{{route('saran_delete', $row->id)}}" id="delete"><button type="button"
                      class="btn btn-danger delete">Hapus</button></a>
          <a href="{{url('/update_saran/'. $row->id)}}" type="button" class="btn btn-info">Edit</a>

                  </div>
             
              </div>
           
            <p>  {{ $row->pesan }}</p>
          </div>
       
        </div>
      </div>
      @endforeach
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
@endsection
