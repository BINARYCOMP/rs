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
                    <form action="{{route('user.update.post' ,['id' => $model[0]->id] )}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" required name="txtEmail" value="{{$model[0]->user_email}}" class="form-control" placeholder="Masukan Email User">
                            </div> 
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="txtPassword" value="" class="form-control" placeholder="Masukan Password User">
                            </div>    
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" required name="txtNama" value="{{$model[0]->user_name}}" class="form-control" placeholder="Masukan Nama User">
                            </div> 
                            <div class="form-group">
                                <label>Nomor Telepon</label>
                                <input type="number" required class="form-control" name="txtPhone" value="{{$model[0]->user_phone}}" placeholder="Masukan Jumlah">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea required name="txtAlamat" class="form-control">{{$model[0]->user_address}}</textarea>
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