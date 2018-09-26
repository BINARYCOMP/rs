@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <div class="box-title">
                        Form User
                    </div>
                </div>
                <div class="box-body">
                    <form action="{{route('user.store.post')}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" required name="txtEmail" value="{{old('txtEmail')}}" class="form-control" placeholder="Masukan Email User">
                            </div> 
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" required name="txtPassword" value="{{old('txtPassword')}}" class="form-control" placeholder="Masukan Password User">
                            </div>    
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" required name="txtNama" value="{{old('txtNama')}}" class="form-control" placeholder="Masukan Nama User">
                            </div> 
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="number" required class="form-control" name="txtPhone" value="{{old('txtPhone')}}" placeholder="Masukan Jumlah">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea required name="txtAlamat" class="form-control">{{old('txtAlamat')}}</textarea>
                            </div>    
                        </div>
                        <div class="box-footer">
                            <input type="submit" class="btn btn-success" value="Simpan">    
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection