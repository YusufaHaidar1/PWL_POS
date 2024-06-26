@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    <div class="card-tools"></div>
    </div>
    <div class="card-body">
    @empty($penjualan)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Kesalahan!</h5> Data yang Anda cari tidak ditemukan.
        </div>
        @else
    <table class="table table-bordered table-striped table-hover tablesm">
        <tr>
            <th>ID</th>
            <td>{{ $penjualan->penjualan_id }}</td>
        </tr>
        <tr>
            <th>Kode Penjualan</th>
            <td>{{ $penjualan->penjualan_kode}}</td>
        </tr>
        <tr>
            <th>Nama Pembeli</th>
            <td>{{ $penjualan->pembeli}}</td>
        </tr>
        <tr>
            <th>Staff yang menangani</th>
            <td>{{ $penjualan->user->nama }}</td>
        </tr>
        <tr>
            <th>Tanggal Penjualan (Transaksi)</th>
            <td>{{ $penjualan->penjualan_tanggal }}</td>
        </tr>
        </table>
    @endempty
    </div>
</div>

<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
    <div class="card-tools"></div>
    </div>
    <div class="card-body">
    @empty($penjualan)
        <div class="alert alert-danger alert-dismissible">
            <h5><i class="icon fas fa-ban"></i> Not Found!</h5> Tidak ada Detail Penjualan untuk data ini!.
        </div>
    @else
    @foreach ($penjualan->detail as $detail) 
    <table class="table table-bordered table-striped table-hover tablesm" style="margin-bottom: 20px;">
        <tr>
            <th>ID</th>
            <td>{{ $detail->detail_id }}</td>
        </tr>
        <tr>
            <th>Nama Barang</th>
            <td>{{ $detail->barang->barang_nama}}</td>
        </tr>
        <tr>
            <th>Harga per pcs</th>
            <td>{{ $detail->harga}}</td>
        </tr>
        <tr>
            <th>Qty</th>
            <td>{{ $detail->jumlah}}</td>
        </tr>
    </table>      
    @endforeach
    @endempty
    <a href="{{ url('penjualan') }}" class="btn btn-sm btn-default mt-2">Kembali</a>
    </div>
</div>
@endsection

@push('css')
@endpush

@push('js')
@endpush