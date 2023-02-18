@extends('layouts.home')

@section('content')
<div class="container">
    <div class="card-body">
        <form action="/Barang/{{ $b->id }}/Update" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                <input type="text" name="namaBarang" value="{{ $b->namaBarang }}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Deskripsi Barang</label>
                <input type="text" name="deskripsiBarang" value="{{ $b->deskripsiBarang }}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">harga</label>
                <input type="text" name="harga" value="{{ $b->harga }}" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
            </div>
            <button type="submit" class="b">Submit</button>
        </form>

    </div>
</div>
@endsection
