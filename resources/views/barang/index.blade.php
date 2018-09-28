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
                            <?php
                                $no = 0 ;
                            ?>
                            @foreach($model as $row)
                            <?php 
                                $no++;
                                $sisa = $modeling->getSisa($row->bara_id, $row->bara_jumlah);
                            ?>
                            <tr>
                                <td>{{ $no }}</td>
                                <td>{{ $row->bara_name }}</td>
                                <td class="right">{{ $row->bara_jumlah }}</td>
                                <td class="right">{{ $sisa }}</td>
                                <td class="center">
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$no}}" >Detail</a>
                                    <a href="{{route('barang.edit', ['id' => $row->bara_id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('barang.hapus', ['id' => $row->bara_id])}}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <!-- Modal -->
                              <div class="modal fade" id="myModal{{$no}}" role="dialog">
                                <div class="modal-dialog">

                                  <!-- Modal content-->
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Detail {{$row->bara_name}}</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-4">Nama</div>
                                            <div class="col-md-8">: {{$row->bara_name}}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Jumlah</div>
                                            <div class="col-md-8">: {{$row->bara_jumlah}}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Terpakai</div>
                                            <?php $terpakai = $row->bara_jumlah - $sisa ?>
                                            <div class="col-md-8">: {{$terpakai}}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Nama</div>
                                            <div class="col-md-8">: {{$sisa}}</div>
                                        </div>
                                        
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>

                                </div>
                              </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection