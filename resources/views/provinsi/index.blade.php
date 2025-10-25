@extends('layouts.app')
@section('content')
<h4>Manajemen Tabel Provinsi</h4>
<a href="{{ route('provinsi.create') }}"
    class="btn btn-info btn-sm">Provinsi Baru</a>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif
<table class="table table-responsive martop-sm">
    <thead>
        <th>ID</th>
        <th>Propinsi</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($provinsi as $p)
        <tr>
            <td>{{ $p->id }}</td>
            <td><a href="{{ route('provinsi.show', $p->id) }}">
                    {{ $p->nama_provinsi }}</a></td>
            <td>
                <form action="{{ route('provinsi.destroy', $p->id) }}"
                    method="post">
                    {{csrf_field()}}
                    {{ method_field('DELETE') }}
                    <a href="{{ route('provinsi.edit', $p->id) }}"
                        class="btn btn-warning btn-sm">Ubah</a>
                    <button type="submit"
                        class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection