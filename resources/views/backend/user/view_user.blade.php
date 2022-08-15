@extends('admin.body.index')
@section ('content')

<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data User</h4>
          <a href="{{route('user.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add User</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Group</th>
                  <th> Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>

              @foreach($MyUser as $key => $User)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$User->UserType}}</td>
                <td>{{$User->name}}</td>
                <td>{{$User->email}}</td>

                <td>
                  <a href="{{route('user.edit', $User->id)}}" class="btn btn-info">edit</a>
                  <a href="{{route('user.delete', $User->id)}}" id="deleted"  class="btn btn-danger">delete</a>
                </td>
              </tr>
              @endforeach

            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
</div>



<!-- /.content-wrapper -->



@endsection