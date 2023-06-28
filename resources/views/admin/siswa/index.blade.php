@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Table Siswa</h3>
                        {{-- <a href="{{ route('dashboard') }}" class="btn btn-primary">Go Back</a> --}}
                        <a href="{{ route('siswa.create') }}" class="btn btn-success">ADD</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Siswa</th>
                                        <th>Email</th>
                                        <th>No.Telp</th>
                                        <th>Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($siswa as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->no_telp }}</td>
                                            <td>{{ $item->id_kelas }}</td>
                                            <td>
                                                <form action="{{ route('siswa.delete', $item->id) }}" method="POST"
                                                    onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data?')">
                                                    @csrf
                                                    <a href="{{ route('siswa.edit', $item->id) }}"
                                                        class="btn btn-primary">EDIT</a>
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">REMOVE</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">DATA SISWA BELUM ADA</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
