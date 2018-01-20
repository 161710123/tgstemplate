<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tugas Layout</title>

    <!-- Bootstrap -->
    <link href="/boss/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/boss/dist/css/bootstrap.css" rel="stylesheet">
       <link href="/boss/dist/css/bootstrap-theme.css" rel="stylesheet">
          <link href="/boss/dist/css/bootstrap-theme.min.css" rel="stylesheet">



</head>
<body>
        @include('layout.header')
            @yield('konten')<br>
        @include('layout.footer')
</body>
</html>