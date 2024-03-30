<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<div style="height: 100px; background-color: aqua">this is header</div>
	{{-- app.blade.php là master page --}}
	{{-- about.blade.php là child page --}}
	{{-- index.blade.php là child page --}}
	@yield('content') 
	{{-- content chung --}}

	<div style="height: 100px; background-color: orange">this is footer</div>
</body>
</html>