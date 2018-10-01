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
                                <label>Username</label>
                                <input type="username" required name="txtUsername" value="{{old('txtUsername')}}" class="form-control" placeholder="Masukan Username User">
                            </div> 
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" required name="txtPassword" value="{{old('txtPassword')}}" class="form-control" placeholder="Masukan Password User">
                            </div> 
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="number" required name="txtNip" value="{{old('txtNip')}}" class="form-control" placeholder="Masukan NIP User">
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
                            <div class="form-group">
                                <label>Hak Akses (Role)</label>
                                <select name="cmbRole" class="form-control">
                                    <option value="ADMIN">ADMIN</option>
                                    <option value="USER">USER</option>
                                </select>
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