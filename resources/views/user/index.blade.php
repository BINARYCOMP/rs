@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Table User
                    </div>
                </div>
                <div class="box-body">
                    <a href="{{route('user.store')}}">
                        <button class="btn btn-default">Tambah Data</button>
                    </a> 
                    <hr>
                    <table class="table table-bordered table-hovered" id="default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Nomor HP</th>
                                <th>Alamat</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($model as $row)
                            <tr>
                                <td>{{ $row->user_nip }}</td>
                                <td>{{ $row->user_username }}</td>
                                <td>{{ $row->user_name }}</td>
                                <td>{{ $row->user_phone }}</td>
                                <td>{{ $row->user_address }}</td>
                                <td>{{ $row->user_role }}</td>
                                <td class="center">
                                    <a href="{{route('user.edit', ['id' => $row->id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('user.hapus', ['id' => $row->id])}}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection