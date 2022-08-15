@extends('admin.body.index')
@section ('content')

<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Data</h4>
          <a href="{{route('uts.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add Data</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nomor Plat</th>
                  <th>Pemilik</th>
                  <th>Harga</th>
                 
                </tr>
              </thead>

              @foreach($stnk as $key => $Allstnk)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$Allstnk->no_plat}}</td>
                <td>{{$Allstnk->pemilik}}</td>
                <td>{{$Allstnk->Harga}}</td>
          
                <td>
                  <a href="{{route('uts.edit', $Allstnk->id)}}" class="btn btn-info">edit</a>
                  <a href="" class="btn btn-danger">delete</a>
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