  <!-- Vendor JS Files -->
  <script src="{{ asset('assets-front/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('assets-front/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets-front/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets-front/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('assets-front/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets-front/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{asset('assets-admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  
  <!-- Template Main JS File -->
  <script src="{{ asset('assets-front/js/main.js') }}"></script>

<script>
  $('.datepicker').datepicker({
      format: 'yyyy/mm/dd',
      startView : 2,
      autoclose : true
  });
</script>