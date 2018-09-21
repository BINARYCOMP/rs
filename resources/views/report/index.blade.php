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
                    <a href="{{route('barang.store')}}">
                        <button class="btn btn-default">Tambah Data</button>
                    </a> 
                    <hr>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection