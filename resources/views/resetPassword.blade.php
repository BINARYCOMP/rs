@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header">
                    <div class="box-title">
                        Form Ganti Password
                    </div>
                </div>
                <div class="box-body">
                    <form action="{{route('login.reset.post')}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Passsword Lama</label>
                                <input type="password" required name="txtLama" value="{{old('txtLama')}}" class="form-control" placeholder="Masukan Nama Barang">
                            </div>    
                            <div class="form-group">
                                <label>Password Baru</label>
                                <input type="password" required class="form-control" name="txtBaru" value="{{old('txtBaru')}}" placeholder="Masukan Jumlah">
                            </div>
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Ganti">    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection