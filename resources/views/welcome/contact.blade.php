<?php
/*
|--------------------------------------------------------------------------
| Display data in view 
|--------------------------------------------------------------------------
|
| 1. created app.blade
| 2. Enter data in title section of master template
| 3. Enter data in contact section of master template
| 4. Enter data in container section of master template
| 5. Use if ocndition to display data
*/
?>

@extends('app')      
@section('pagetitle')
<?php echo "Laravel - Bootstrap - Contact " ?>
@stop
@section('container')   
@if($name == '')
 <h1>Guest User !!!!!</h1>
 @else
 <h1>Welcome TO  {{ $name }}</h1>
 @endif
<h3>
      <?php
        // put your code here
            echo 'Welcome to NextBridge ';
        ?>
</h3>
    
@stop
@section('content')
<?php
        // put your code here
            echo 'Software Development is in our DNA. We have been doing it for over 19 years now and are competent enough to handle complex projects. ';
        ?>
@stop