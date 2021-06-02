  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('logo.png') }}" alt="">
        <span  >{{ company_get('name') }}   </span>  <span class="d-none d-lg-block d-xl-block" style="margin-left: 10px"> </span > 
        <!-- <span class=" .d-block .d-sm-none" >SMANSA  TOBADAK</span> -->
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ url('information') }}">Hasil Ujian</a></li>


          <li><a class="getstarted scrollto" href="{{ url('login') }}">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  