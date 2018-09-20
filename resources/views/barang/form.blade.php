@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <div class="box-title">
                        Form Barang
                    </div>
                </div>
                <div class="box-body">
                    <form action="{{route('barang.store.post')}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="txtNama" value="{{old('txtNama')}}" class="form-control" placeholder="Masukan Nama Barang">
                            </div>    
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" class="form-control" name="txtJumlah" value="{{old('txtJumlah')}}" placeholder="Masukan Jumlah">
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-success">    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection