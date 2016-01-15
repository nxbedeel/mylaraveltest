@extends('adminapp')
@section('pagetitle')
    Its All  About Admin 
@stop
@section('content')
    </script>
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> List  Users</h1>
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
                <th>Email</th>
                <th>Member Since</th>
                <th>Status</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Member Since</th>
                <th>Status</th>
                <th>Actions</th>
                
            </tr>
        </tfoot>
        <tbody>
    @foreach ($users as $user)
    
    <tr>
    <td>{{ $user->id }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>@if ($user->status === 1)
            Active
        @else
            Inactive
        @endif
    </td>
    <td>{{ $user->created_at }}</td>
    <td>
        <a href="\user\delete\{{ $user->id }}" title="Delete User" ><i class="glyphicon glyphicon-trash"></i> Delete</a> |
        <a href="\user\edit\{{ $user->id }}" title="Edit User" ><i class="glyphicon glyphicon-edit"></i> Edit</a> |  
<!--        <a href="\user\edit\{{ $user->id }}" title="Edit User" ><i class="glyphicon glyphicon-eye-open"></i> View</a> |  -->
        @if ($user->status === 1)
            <a href="\user\changestatus\Inactive\{{ $user->id }}" title="Inactive User" ><i class="glyphicon glyphicon-remove"></i> Inactive </a> |
        @else
            <a href="\user\changestatus\Active\{{ $user->id }}" title="Active User" ><i class="glyphicon glyphicon-ok"></i> Active </a> |            
        @endif
    
    </td>
</tr>
     
    @endforeach
        </tbody>
        </table>
</div>
 
@stop
@section('content')
@stop