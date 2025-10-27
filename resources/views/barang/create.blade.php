@extends('layouts.app')
@section('content')
<h4>Tambah Barang</h4>

<form action="{{ route('barang.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
        @if ($errors->has('nama_barang')) <span class="text-danger">{{ $errors->first('nama_barang') }}</span> @endif
    </div>
    <div class="form-group">
        <label>Satuan</label>
        <input type="text" name="satuan" class="form-control" value="{{ old('satuan') }}">
        @if ($errors->has('satuan')) <span class="text-danger">{{ $errors->first('satuan') }}</span> @endif
    </div>
    <div class="form-group">
        <label>Harga</label>
        <input type="number" step="0.01" name="harga" class="form-control" value="{{ old('harga') }}">
        @if ($errors->has('harga')) <span class="text-danger">{{ $errors->first('harga') }}</span> @endif
    </div>
    <div class="form-group">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
        @if ($errors->has('stok')) <span class="text-danger">{{ $errors->first('stok') }}</span> @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Batal</a>
    </div>
</form>

@endsection
