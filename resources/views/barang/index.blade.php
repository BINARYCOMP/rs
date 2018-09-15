@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Table Barang
                    </div>
                </div>
                <div class="box-body">
                    <table class="table table-bordered table-hovered" id="default">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jumlah</th>
                                <th>Sisa</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $no = 0 ;
                                $sisa = 1;
                            ?>
                            @foreach($model as $row)
                            <?php $no++ ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $row->bara_name }}</td>
                                <td class="right">{{ $row->bara_jumlah }}</td>
                                <td class="right">{{ $sisa }}</td>
                                <td class="center">
                                    <a href="" class="btn btn-warning">Detail</a>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Hapus</a>
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