
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
| 5. Use if ocndition to display data i.e if skills and books  have some count  only then it will display data
*/
?>
@extends('app')
@section('pagetitle')
    Its All  About user  {{ $fname }} {{ $lname }}
@stop
@section('content')
<h2>Welcome {{ $fname }} {{ $lname }}</h2>                
                <h3>Your User Id: {{ $id }} </h3>
               
                <u>
                    @foreach($data as $user)
                    <li> {{ $user }} </li>
                    @endforeach
                </u>
                @if(count($skills))
                 <h4>Skills</h4>
                <u>
                   
                    @foreach($skills as $sklill)
                    <li> {{ $sklill }} </li>
                    @endforeach
                </u> 
                 @endif
                   @if(count($bookforlanguage))
                <u>
                    <h4>Books</h4>
                   
                    @foreach($bookforlanguage as $language)
                    <li> {{ $language }} </li>
                    @endforeach
                </u> 
                    @endif
@stop
