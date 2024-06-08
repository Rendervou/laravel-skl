@extends('layouts.template')

@section('page-title')
Details {{$user->name}}

@endsection

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


@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="table-responsive">
            <div class="card-header">
                Tentang User (pemilik toko)
                <div class="card-body">
                    <table class="table-table-borderless">
                        <tr>
                            <th>Nama Pemilik Toko</th>
                            <td>:</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td > : </td>
                            <td>{{$user->email}}</td>
                        </tr>
                        
                    </table>
                </div>
            </div>
            
            
        </div>
    </div>
    {{-- card-edit --}}
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Data</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{route('user.update', $user->id)}}" method="post">
                    @csrf
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
                        <input type="password" name="password" placeholder="minimal 8 karakter" >
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
                    
                  </div>
                </div>
</div>
@endsection