<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Psikotes 2021</title>
  <meta content="" name="description">

  <meta content="" name="keywords">
  <link rel="icon" href="{{ asset(company_get('logo')) }}">
  @include('layouts.guest.styles')
  @yield('css')
</head>

<body>


  @include('layouts.guest.header')
    
    @yield('content')



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('layouts.guest.scripts')

  @yield('js')

</body>

</html>