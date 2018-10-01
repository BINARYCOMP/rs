@extends('layouts.backend')
@section('content')
    <section class="content-header">
        <h1>
            Halaman
            <small>Utama</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Halaman</a></li>
            <li class="active">Utama</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>@if(!empty($dataNewEntry)) {{ $dataNewEntry[0]->jumlah }} @else 0 @endif</h3>

                  <p>Entry Baru</p>
                </div>
                <div class="icon">
                  <i class="ion ion-archive"></i>
                </div>
                <a href="{{route('entry')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>@if(!empty($dataAllBarang)) {{ $dataAllBarang }} @else 0 @endif<sup style="font-size: 20px"></sup></h3>
                  <p>Total Barang</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
                <a href="{{route('barang')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>@if(!empty($dataUsers)) {{ $dataUsers }} @else 0 @endif</h3>

                  <p>Total User</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3>@if(!empty($dataAllStok)) {{ $dataAllStok }} @else 0 @endif</h3>

                  <p>Total Stok</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="{{route('barang')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
    </section>
@endsection