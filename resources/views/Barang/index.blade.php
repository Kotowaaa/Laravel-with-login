@extends('layouts.home')

@section('content')
    <div class="container">
            <div class="card-body mt-3">
                <div class="row">
                    @if($message = Session::get('berhasil'))
                    <div class="alert alert-success" role="alert">
                        {{ $message }}
                    </div>
                    @endif
                </div>
                <a href="/Barang/Create" class="b1">Tambah Barang</a>
                    <table class="table mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Deskripsi Barang</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($barangs as $barang => $b)
                            <tr>
                                <td>{{ ++$barang }}</td>
                                <td>{{ $b->namaBarang }}</td>
                                <td>{{ Str::limit($b->deskripsiBarang, 100) }}</td>
                                <td>{{ $b->harga }}</td>
                                <td>
                                    <a href="Barang/{{ $b->id }}/Edit" class="btn btn-warning mb-3">Edit</a>
                                    <a href="Barang/{{ $b->id }}/Destroy" onclick="return confirm('Apakah Kamu Yakin!!!')" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
@endsection