@extends('layouts.app')
@section('content')
<h4>Detail Barang</h4>

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $barang->nama_barang }}</h5>
        <p class="card-text"><strong>Satuan:</strong> {{ $barang->satuan }}</p>
        <p class="card-text"><strong>Harga:</strong> {{ number_format($barang->harga,2,',','.') }}</p>
        <p class="card-text"><strong>Stok:</strong> {{ $barang->stok }}</p>

        <a href="{{ route('barang.edit', $barang->id) }}" class="btn btn-warning">Ubah</a>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>

@endsection