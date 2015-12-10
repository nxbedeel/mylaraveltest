<!DOCTYPE html>
<html lang="en">
<head>
  <title> @yield('pagetitle')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <style>
 
            .title {
                font-size: 96px;
            }
        </style>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  @yield('container')
</div>
    <div class="content" >
        @yield('content')
    </div>
</body>
</html>