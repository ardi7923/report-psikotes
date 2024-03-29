@extends('layouts.front')

@section('css')
<style>
	@media (max-width: 575.98px) {
		#search-button {
			margin-top: 10px;
		}
	}
</style>
@endsection

@section('content')
<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
	<div class="container">

		<ol>
			<li><a href="{{ url('/') }}">Home</a></li>
			<li><a href="{{ url('result-public') }}">Hasil Ujian</a></li>

		</ol>

	</div>
</section><!-- End Breadcrumbs -->

<div id="main">
	<section id="contact" class="contact">

		<div class="container aos-init aos-animate" data-aos="fade-up">

			<header class="section-header">
				<!-- <h2>Contact</h2> -->
				<p>Hasil Ujian</p>
			</header>



			<div class="row justify-content-md-center">
				<div class="col-lg-6 ">
					<div class="card" style="background-color: #e1ecff">
						<div class="card-body">

							<div class="form-group row">
								<label class="col-sm-4 col-form-label">Masukkan Nomor Tes </label>
								<div class="col-sm-6">
									<input id="input-no-tes" type="text" class="form-control" required>
								</div>

								<div class="col-sm-2">

									<button id="search-button" class="btn btn-primary col-12">

										<div class="loading" style="display: none;">
											<div class="spinner-border text-danger" role="status" style="width: 20px; height: 20px;">
											</div>
										</div>
										<div class="btn-text">
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
												<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
											</svg> Cari
										</div>
									</button>
								</div>

							</div>
						</div>
					</div>


				</div>

			</div>

			<div id="error-msg" class="row justify-content-md-center" style="margin-top: 20px;">
				<div class="col-lg-6 ">
					<div class="card" style="background-color: #e1ecff">
						<div class="card-body">
							<center><b> Data Tidak Ditemukan </b></center>
						</div>
					</div>
				</div>
			</div>

			<div id="success-msg" class="row justify-content-md-center" style="margin-top: 20px;">
				<div class="col-lg-6 ">
					<div class="card" style="background-color: #e1ecff">
						<div class="card-body">

							<div id="child-success-msg"></div>

						</div>
					</div>
				</div>
			</div>

	</section>
</div>



@endsection


@section('js')
<script>
	$(document).ready(function() {
		$('#error-msg').hide();
		$('#success-msg').hide();

		$('#search-button').attr('disabled', true);
		$('#input-no-tes').keyup(function() {
			$('#error-msg').slideUp();
			$('#success-msg').slideUp();
			if ($(this).val().length != 0)
				$('#search-button').attr('disabled', false);
				
			else
				$('#search-button').attr('disabled', true);
				
		})
	});

	$('#search-button').click(function() {
		no_tes = $('#input-no-tes').val();


		$(this).attr('disabled', 'disabled');
		$('.loading').show();
		$('.btn-text').hide();
		$('#error-msg').slideUp();
		$('#success-msg').slideUp();

		$.ajax({
			method: "GET",
			url: "{{ url('result-public/check?no_tes=') }}" + no_tes,
			success: function(response) {
				$('#search-button').removeAttr('disabled');
				$('.loading').hide();
				$('.btn-text').show();
				$('#success-msg').slideDown();

				responseHtml = `
							<div class="row">
								<div class="col-5">
									<strong>NOMOR TES </strong>
								</div>
								<div class="col-7">
									<strong> ` + response['no_tes'] + ` </strong>
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-5">
									<strong>NAMA </strong>
								</div>
								<div class="col-7">
									 ` + response['nama'] + ` 
								</div>
							</div>

							<div class="row mt-2">
								<div class="col-5">
									<strong>SEKOLAH </strong>
								</div>
								<div class="col-7">
								` + response['sekolah'] + ` 
								</div>
							</div>
							<a href="{{ url('report-result?type=single&id=') }}`+ response['id'] +`" target="_blank">
							<button class="btn btn-danger mt-4 col-12"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
									<path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z" />
									<path d="M4.603 12.087a.81.81 0 0 1-.438-.42c-.195-.388-.13-.776.08-1.102.198-.307.526-.568.897-.787a7.68 7.68 0 0 1 1.482-.645 19.701 19.701 0 0 0 1.062-2.227 7.269 7.269 0 0 1-.43-1.295c-.086-.4-.119-.796-.046-1.136.075-.354.274-.672.65-.823.192-.077.4-.12.602-.077a.7.7 0 0 1 .477.365c.088.164.12.356.127.538.007.187-.012.395-.047.614-.084.51-.27 1.134-.52 1.794a10.954 10.954 0 0 0 .98 1.686 5.753 5.753 0 0 1 1.334.05c.364.065.734.195.96.465.12.144.193.32.2.518.007.192-.047.382-.138.563a1.04 1.04 0 0 1-.354.416.856.856 0 0 1-.51.138c-.331-.014-.654-.196-.933-.417a5.716 5.716 0 0 1-.911-.95 11.642 11.642 0 0 0-1.997.406 11.311 11.311 0 0 1-1.021 1.51c-.29.35-.608.655-.926.787a.793.793 0 0 1-.58.029zm1.379-1.901c-.166.076-.32.156-.459.238-.328.194-.541.383-.647.547-.094.145-.096.25-.04.361.01.022.02.036.026.044a.27.27 0 0 0 .035-.012c.137-.056.355-.235.635-.572a8.18 8.18 0 0 0 .45-.606zm1.64-1.33a12.647 12.647 0 0 1 1.01-.193 11.666 11.666 0 0 1-.51-.858 20.741 20.741 0 0 1-.5 1.05zm2.446.45c.15.162.296.3.435.41.24.19.407.253.498.256a.107.107 0 0 0 .07-.015.307.307 0 0 0 .094-.125.436.436 0 0 0 .059-.2.095.095 0 0 0-.026-.063c-.052-.062-.2-.152-.518-.209a3.881 3.881 0 0 0-.612-.053zM8.078 5.8a6.7 6.7 0 0 0 .2-.828c.031-.188.043-.343.038-.465a.613.613 0 0 0-.032-.198.517.517 0 0 0-.145.04c-.087.035-.158.106-.196.283-.04.192-.03.469.046.822.024.111.054.227.09.346z" />
								</svg>
								Download Hasil Ujian
							</button>
							</a>
								`;
				$('#child-success-msg').html(responseHtml);
			},
			error: function(xhr, ajaxOptions, thrownError) {
				$('#search-button').removeAttr('disabled');
				$('.loading').hide();
				$('.btn-text').show();
				$('#error-msg').slideDown();
			}

		});

	});
</script>
@endsection