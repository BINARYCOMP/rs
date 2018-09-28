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
                                <th>Jumlah Terpakai</th>
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
                                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$no}}">Detail</a>
                                    <a href="{{route('entry.edit', ['id' => $row->entr_id])}}" class="btn btn-warning">Edit</a>
                                    <a href="{{route('entry.hapus', ['id' => $row->entr_id])}}" onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')" class="btn btn-danger">Hapus</a>
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
                                            <div class="col-md-4">Tanggal</div>
                                            <div class="col-md-8">: {{$row->entr_date}}</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">Jumlah</div>
                                            <div class="col-md-8">: {{$row->entr_jumlah}}</div>
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