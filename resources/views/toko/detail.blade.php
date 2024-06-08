@extends('layouts.template')

@section('page-title')
Detail {{$data->nama_toko}}
@endsection

@section('content')

@if($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-ban"></i> Sorry, Error</h5>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

{{-- Area Detai Pemilik Toko --}}
<div class="row">
    <div class="col-md-12 col-sm-12">
        {{-- show data card --}}
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h5>Detail Toko</h5>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-borderless">
                        <tr>
                            <th>Nama Toko</th>
                            <td width="5%"> : </td>
                            <td width="50%">{{$data->nama_toko}}</td>
                            <td rowspan="7">
                                <img src="{{asset('storage/image/toko/', $data->icon_toko)}}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <th>Nama Pemilik</th>
                            <td width="5%"> : </td>
                            <td width="50%">{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Status Toko</th>
                            <td width="5%"> : </td>
                            <td width="50%">
                                @if ($data->status_aktif == TRUE)
                                    <span class="badge badge-success">Toko Aktif</span>
                                @else
                                    <span class="badge badge-danger">Toko Non-Aktif</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td width="5%"> : </td>
                            <td width="50%">{{$data->kategori_toko}}</td>
                        </tr>
                        <tr>
                            <th>hari Buka</th>
                            <td width="5%"> : </td>
                            <td width="50%">{{$data->hari_buka}}</td>
                        </tr>
                        <tr>
                            <th>Jam Operasi</th>
                            <td width="5%"> : </td>
                            <td width="50%">{{$data->jam_buka}} - {{$data->jam_libur}}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi Toko</th>
                            <td width="5%"> : </td>
                            <td width="50%">{!! $data->desc_toko !!}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        {{-- card-edit --}}
        </div>
    </div>
</div>
@endsection