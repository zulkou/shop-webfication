@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Tambah Barang') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="barang" class="col-md-4 col-form-label text-md-right">{{ __('Nama Barang') }}</label>

                            <div class="col-md-6">
                                <input id="barang" type="text" class="form-control @error('barang') is-invalid @enderror" name="barang" value="{{ old('barang') }}" required autocomplete="barang" autofocus>

                                @error('barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="fotoBarang" class="col-md-4 col-form-label text-md-right">{{ __('Upload Foto') }}</label>

                            <div class="col-md-6">
                                <input id="fotoBarang" type="file" class="form-control @error('fotoBarang') is-invalid @enderror" name="fotoBarang" value="{{ old('fotoBarang') }}" required autocomplete="fotoBarang">

                                @error('fotoBarang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="harga" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>

                            <div class="col-md-6">
                                <input id="harga" type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" required autocomplete="harga">

                                @error('harga')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="stok" class="col-md-4 col-form-label text-md-right">{{ __('Ketersediaan') }}</label>

                            <div class="col-md-6">
                                <select name="stok" id="stok">
                                    <option value="A">Tersedia</option>
                                    <option value="O">Habis</option>
                                </select>

                                @error('stok')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tamnbahkan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
