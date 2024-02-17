@extends('layouts.main')

@section('content')

<!-- START FORM -->
<form action='/ekstra/{{ $item->id }}' method='post'> 
    @csrf
    @method('put')
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="pb-3">
            <a href='{{ url('ekstra') }}' class="btn btn-danger"> Kembali </a> 
        </div>
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Ekstra</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='nama' value="{{ $item->nama }}" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="pembina" class="col-sm-2 col-form-label">Pembina Ekstra</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='pembina' value="{{ $item->pembina }}" id="pembina"> <!-- Perbaikan $data menjadi $item -->
            </div>
        </div>
        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi Ekstra</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='deskripsi' value="{{ $item->deskripsi }}" id="deskripsi"> <!-- Perbaikan $data menjadi $item -->
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jurusan" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10"><button type="submit" class="btn btn-dark" name="submit">SIMPAN</button></div>
        </div>
    </div>
</form>
<!-- AKHIR FORM -->
@endsection
