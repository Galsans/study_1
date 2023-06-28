@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Table Kelas
                            <a href="{{ route('kelas.create') }}" class="btn btn-success float-end">ADD</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kelas</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($kelas as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->dkr }}</td>
                                            <td>
                                                <form action="{{ route('kelas.destroy', $item->id) }}" method="POST"
                                                    onsubmit="return confirm('Apakah Anda Yakin Ingin Menghapus Data Kelas?')"
                                                    class="d-flex gap-3">
                                                    @csrf
                                                    <a href="{{ route('kelas.edit', $item->id) }}" class="btn btn-info"><i
                                                            class="fa fa-pencil-alt"></i></a>
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"><i
                                                            class="fa fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Data Kelas Belum Ada</td>
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
