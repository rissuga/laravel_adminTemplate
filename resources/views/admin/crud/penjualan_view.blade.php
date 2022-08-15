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
          <a href="{{route('penjualan.add')}}" style="float: right;" class="btn btn-rounded btn-success mb-4">Add Data</a>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nama Barang</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                </tr>
              </thead>

              @foreach($Penjualan as $key => $AllPenjualan)
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$AllPenjualan->nama_barang}}</td>
                <td>{{$AllPenjualan->jumlah}}</td>
                <td>{{$AllPenjualan->harga}}</td>

                <td>
                  <a href="{{route('penjualan.edit', $AllPenjualan->id)}}" class="btn btn-info">edit</a>
                  <a href="{{route('penjualan.delete', $AllPenjualan->id)}}" class="btn btn-danger">delete</a>
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