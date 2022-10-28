<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bug Reporting | {{ $title }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  	<!-- Nucleo Icons -->
	<link href="logincss/css/nucleo-icons.css" rel="stylesheet" />
	<link href="logincss/css/nucleo-svg.css" rel="stylesheet" />
	<!-- Font Awesome Icons -->
	<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
	<!-- Material Icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
	<!-- CSS Files -->
	<link id="pagestyle" href="logincss/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />

</head>
<body>
	
    @yield('container')
	
	<script src="logincss/js/core/popper.min.js"></script>
	<script src="logincss/js/core/bootstrap.min.js"></script>
	<script src="logincss/js/plugins/perfect-scrollbar.min.js"></script>
	<script src="logincss/js/plugins/smooth-scrollbar.min.js"></script>
	<script>
	  var win = navigator.platform.indexOf('Win') > -1;
	  if (win && document.querySelector('#sidenav-scrollbar')) {
		var options = {
		  damping: '0.5'
		}
		Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
	  }
	</script>
	<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="logincss/js/material-dashboard.min.js?v=3.0.4"></script>
  

</body>
</html>