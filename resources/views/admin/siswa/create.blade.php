@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Form Data Siswa
                            <a href="{{ route('siswa.index') }}" class="btn btn-info float-end">GO BACK</a>
                        </h3>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('siswa.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="Masukkan Nama Siswa..." required>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control"
                                    placeholder="Masukkan Email Siswa..." required>
                            </div>
                            <div class="form-group">
                                <label for="">No Telp</label>
                                <input type="number" min="0" minlength="12" name="no_telp" class="form-control"
                                    placeholder="Masukkan No Telepon Siswa..." required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select class="form-select" aria-label="Default select example" name="id_kelas">
                                    @php
                                        $kelas = App\Models\kelas::all();
                                    @endphp
                                    @foreach ($kelas as $item)
                                        <option value="{{ $item->kelas }}">{{ $item->kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <button class="btn btn-primary" type="submit">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
