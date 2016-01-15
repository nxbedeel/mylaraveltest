@extends('adminapp')
@section('pagetitle')
    Its All  About Admin 
@stop
@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> List  {{ $type }} Images
<!--                        <a href="/albumtype/create/" class="btn btn-primary">Add New</a>-->
                    </h1>
                     
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Title</th>
                <th>Album</th>
                <th>Author</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>title</th>
                <th>Album</th>
                <th>Author</th>
                <th>Actions</th>
                
            </tr>
        </tfoot>
        <tbody>
    @foreach ($albumtype as $types)
    <tr>
    <td>{{ $types->id }}</td>
    <td>{{ $types->name }}</td>
    <td>{{ $types->title }}</td>
    <td>{{ $types->albumname }}</td>
    <td>{{ $types->username }}</td>
      <td><a href="\images\destroy\{{ $types->id }}\{{$type}}" title="Delete Image" ><i class="glyphicon glyphicon-trash"></i> Delete</a> </td>

</tr>
     
    @endforeach
        </tbody>
        </table>
</div>
 
@stop
@section('content')
@stop