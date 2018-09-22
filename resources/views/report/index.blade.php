@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <div class="box-title">
                        Cari berdasarkan bulan dan tahun
                    </div>
                </div>
                <form action="{{route('report.post')}}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <div class="col-md-6">
                                <select name="cmbBulan" class="form-control">
                                    <option value="1">==== Pilih Bulan ====</option>
                                    <option value="1">Januari</option>
                                    <option value="2">Februari</option>
                                    <option value="3">Maret</option>
                                    <option value="4">April</option>
                                    <option value="5">Mei</option>
                                    <option value="6">Juni</option>
                                    <option value="7">Juli</option>
                                    <option value="8">Agustus</option>
                                    <option value="9">September</option>
                                    <option value="10">Oktober</option>
                                    <option value="11">November</option>
                                    <option value="12">Desember</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <select name="cmbTahun" class="form-control">
                                    <option value="{{date('Y')}}">==== Pilih Tahun ====</option>
                                    @foreach($dataTahun as $row)
                                        <option value="{{$row->tahun}}">{{$row->tahun}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <input type="submit" value="Cari" class="btn btn-success">
                    </div>
                </form>
            </div>
            @if($act == 'searched')
                @include('report.table')
            @endif
        </div>
    </div>
</section>
@endsection