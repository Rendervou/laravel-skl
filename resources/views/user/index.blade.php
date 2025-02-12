@extends('layouts.template')

@section('page-title')
halaman data User
@endsection

@section('content')
@if($errors->any())
<div class="card-body">
    <div class="alert alert-danger alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h5><i class="icon fas fa-ban"></i>Error</h5>

      </h5>
      <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach

    </ul>
</div>
@endif

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md-8">
                <h3 class="card-title">Data pemilik toko</h3>
            </div>    
            <div class="col-md-4 text right">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                    Tambah Data
                    </button>

            </div>        
        </div>

    </div>
      
    <!-- /.card-header -->
    <div class="card-body table-responsive">
      <table id="example2" class="table table-bordered">
        <thead>
        <tr>
          <th>Nama Customer</th>
          <th>Email</th>
          <th>Pilihan</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>                
                    <td>
                            <a href="#" class="btn btn-outline-success" data-toggle="dropdown">Pilihan </a>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" href="{{route('user.show', $item->id)}}">Detail</a>
                                    <form action="{{route('user.destroy', $item->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                     <button type="submit" class="dropdown-item" onclick="return confirm('Hapus data?')">Hapus</button>
                                    </form>
                                </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        
        <tfoot>
        <tr>
          <th>Nama Customer</th>
          <th>Email</th>
          <th>Pilihan</th>
        </tr>
        </tfoot>
        
      </table>
    </div>
    <!-- /.card-body -->
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="{{route('user.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>nama lengkap penjual</label>
                        <input type="text" name="name" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>alamat email</label>
                        <input type="email" name="email" required class="form-control">
                        <input type="text" name="level" hidden value="penjual">

                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" required class="form-control" placeholder="minimal 8 karakter" >
                    </div>
                    {{-- <div class="form-group">
                        <label>confirm password</label>
                        <input type="password" name="password_confirmation" required class="form-control" placeholder="minimal 8 karakter" > --}}
                    </div>
                  <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </div>

            </form>
            
  </div>
@endsection
 
