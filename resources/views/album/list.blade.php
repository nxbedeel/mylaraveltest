@extends('adminapp')
@section('pagetitle')
    Its All  About Admin 
@stop
@section('content')
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> List  Album <a href="/album/create/" class="btn btn-primary">Add New</a></h1>
                     
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
                <th>Description</th>
                <th>Type</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Type</th>
                <th>Actions</th>
                
            </tr>
        </tfoot>
        <tbody>
    @foreach ($albums as $album)
    <tr>
    <td>{{ $album->id }}</td>
    <td>{{ $album->name }}</td>
    <td>{{ $album->description }}</td>
     <td>{{ $album->typename }}</td>

    <td>
       <a href="\album\destroy\{{ $album->id }}" title="Delete Type" ><i class="glyphicon glyphicon-trash"></i> Delete</a> |
<!--        <a href="\albumtype\edit\{{ $album->id }}" title="Edit Type" ><i class="glyphicon glyphicon-edit"></i> Edit</a> -->
    </td>
</tr>
     
    @endforeach
        </tbody>
        </table>
</div>
 
@stop
@section('content')
@stop