<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title','Writers')</title>
	<!--favicon-->
	<link rel="icon" href="{{asset("/")}}assets/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset("/")}}assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset("/")}}assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset("/")}}assets/plugins/highcharts/css/highcharts.css" rel="stylesheet" />
	<link href="{{asset("/")}}assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="{{asset("/")}}assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="{{asset("/")}}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset("/")}}assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset("/")}}assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset("/")}}assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset("/")}}https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset("/")}}assets/css/app.css" rel="stylesheet">
	<link href="{{asset("/")}}assets/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset("/")}}assets/css/dark-theme.css" />
	<link rel="stylesheet" href="{{asset("/")}}assets/css/semi-dark.css" />
	<link rel="stylesheet" href="{{asset("/")}}assets/css/header-colors.css" />
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
	<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

	@yield('css')
	<head>
	

</head>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
    @include('data.top')
    @yield('main')


		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include('data.footer')

	</div>
	<!--end wrapper-->
	
	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset("/")}}assets/js/jquery.min.js"></script>
	<script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
	<script src="{{asset("/")}}assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset("/")}}assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset("/")}}assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset("/")}}assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="{{asset("/")}}assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="{{asset("/")}}assets/plugins/highcharts/js/highcharts.js"></script>
	<script src="{{asset("/")}}assets/plugins/highcharts/js/exporting.js"></script>
	<script src="{{asset("/")}}assets/plugins/highcharts/js/variable-pie.js"></script>
	<script src="{{asset("/")}}assets/plugins/highcharts/js/export-data.js"></script>
	<script src="{{asset("/")}}assets/plugins/highcharts/js/accessibility.js"></script>
	<script src="{{asset("/")}}assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
	<script src="{{asset("/")}}assets/js/index2.js"></script>
	<script src="{{asset("/")}}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset("/")}}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>


		<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<!--app JS-->
	<script src="{{asset("/")}}assets/js/app.js"></script>
    @yield('js')

</body>

</html>
