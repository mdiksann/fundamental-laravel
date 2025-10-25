@extends('layouts.app')
@section('content')
<h4>Provinsi Baru</h4>
<form action="{{ route('provinsi.store') }}" method="post">
    {{ csrf_field() }}
    <div class="form-group {{ $errors->has('nama_provinsi') ? 'has-error' : '' }}">
        <label for="provinsi" class="control-label">Provinsi</label>
        <input type="text" class="form-control" name="nama_provinsi"
            placeholder="Provinsi" value="{{ old('nama_provinsi') }}">
        @if ($errors->has('nama_provinsi'))
        <span class="help-block">{{ $errors->first('nama_provinsi') }} </span>
        @endif
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('provinsi.index') }}" class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection