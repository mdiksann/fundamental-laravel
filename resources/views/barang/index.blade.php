@extends('layouts.app')
@section('content')
<h4>Daftar Barang</h4>
<a href="{{ route('barang.create') }}" class="btn btn-info btn-sm">Barang Baru</a>

@if ($message = Session::get('message'))
<div class="alert alert-success martop-sm">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-striped martop-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Satuan</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($barangs as $b)
        <tr>
            <td>{{ $b->id }}</td>
            <td>{{ $b->nama_barang }}</td>
            <td>{{ $b->satuan }}</td>
            <td>{{ number_format($b->harga,2,',','.') }}</td>
            <td>{{ $b->stok }}</td>
            <td>
                <a href="{{ route('barang.show', $b->id) }}" class="btn btn-sm btn-primary">Lihat</a>
                <a href="{{ route('barang.edit', $b->id) }}" class="btn btn-sm btn-warning">Ubah</a>
                <form action="{{ route('barang.destroy', $b->id) }}" method="post" style="display:inline-block">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus barang ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6">Belum ada data barang.</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{ $barangs->links() }}

@endsection