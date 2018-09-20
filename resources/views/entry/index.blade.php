@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Table Entry
                    </div>
                </div>
                <div class="box-body">
                    <a href="{{route('entry.store')}}">
                        <button class="btn btn-default">Tambah Data</button>
                    </a> 
                    <hr>
                    <table class="table table-bordered table-hovered" id="default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 0 ;
                            ?>
                            @foreach($model as $row)
                            <?php
                                $no++;
                            ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $row->entr_date }}</td>
                                <td>{{ $row->bara_name }}</td>
                                <td class="right">{{ $row->entr_jumlah }}</td>
                                <td class="center">
                                    <a href="" class="btn btn-warning">Detail</a>
                                    <a href="{{route('entry.edit', ['id' => $row->entr_id])}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('entry.hapus', ['id' => $row->entr_id])}}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
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