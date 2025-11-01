@extends('layouts.app')
@section('content')
<h4>Ubah Provinsi</h4>
<form action="{{ route('provinsi.update', $provinsi->id) }}"
    method="post">
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <div class="form-group {{ $errors->has('provinsi') ? 'has-error' : '' }}">
        <label for="provinsi" class="control-label">Provinsi</label>
        <input type="text" class="form-control" name="nama_provinsi"
            placeholder="Provinsi" value="{{ $provinsi->nama_provinsi }}">
        @if ($errors->has('provinsi'))
        <span class="help-block">{{ $errors->first('provinsi') }}
        </span>
        @endif
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-info">Simpan</button>
        <a href="{{ route('provinsi.index') }}"
            class="btn btn-default">Kembali</a>
    </div>
</form>
@endsection