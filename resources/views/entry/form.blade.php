@extends('layouts.backend')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-success">
                <div class="box-header">
                    <div class="box-title">
                        Form Entry
                    </div>
                </div>
                <div class="box-body">
                    <form action="{{route('entry.store.post')}}" method="POST">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <select required class="form-control" name="cmbBarang">
                                    <option value="0">=== Pilih Barang ===</option>
                                    @foreach($barang as $row)
                                        <option value="{{$row->bara_id}}">{{ $row->bara_name }}</option>
                                    @endforeach
                                </select>
                            </div>    
                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="number" required class="form-control" name="txtJumlah" value="{{old('txtJumlah')}}" placeholder="Masukan Jumlah">
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