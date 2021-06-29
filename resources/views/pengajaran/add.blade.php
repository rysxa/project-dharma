@extends('admin.layouts.app')
@section('title', 'Tambah Data Pengajaran Baru')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">@yield('title')</h1>

        <form class="user" method="POST" action="{{ route('pengajaran.create') }}">
            @csrf

            {{-- Kode MK --}}
            <div class="form-group row">
                <label for="kode_mk" class="col-sm-2 col-form-label">Kode MK</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control @error('kode_mk') is-invalid @enderror" id="kode_mk"
                        name="kode_mk" value="{{ old('kode_mk') }}" required autocomplete="kode_mk" autofocus
                        placeholder="Masukan Kode Mata Kuliah">
                </div>

                @error('kode_mk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Nama MK --}}
            <div class="form-group row">
                <label for="nama_mk" class="col-sm-2 col-form-label">Nama MK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control @error('nama_mk') is-invalid @enderror" id="nama_mk"
                        name="nama_mk" value="{{ old('nama_mk') }}" required autocomplete="nama_mk" autofocus
                        placeholder="Masukan Nama Mata Kuliah">
                </div>

                @error('nama_mk')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Periode --}}
            <div class="form-group row">
                <label for="periode_id" class="col-sm-2 col-form-label">Periode</label>
                <div class="col-sm-10">
                    <input type="periode_id" class="form-control @error('periode_id') is-invalid @enderror" id="periode_id"
                        name="periode_id" value="{{ old('periode_id') }}" required autocomplete="periode_id"
                        placeholder="Masukan periode_id">
                </div>

                @error('periode_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- Kelas --}}
            <div class="form-group row">
                <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                <div class="col-sm-10">
                    <input type="kelas" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas"
                        value="{{ old('kelas') }}" required autocomplete="kelas" placeholder="Masukan kelas">
                </div>

                @error('kelas')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            {{-- SKS --}}
            <div class="form-group row">
                <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                <div class="col-sm-10">
                    <input type="sks" class="form-control @error('sks') is-invalid @enderror" id="sks" name="sks"
                        value="{{ old('sks') }}" required autocomplete="sks" placeholder="Masukan SKS">
                </div>


                @error('sks')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-user">
                    Tambah
                </button>
            </div>
        </form>

    </div>
    <!-- /.container-fluid -->
@endsection