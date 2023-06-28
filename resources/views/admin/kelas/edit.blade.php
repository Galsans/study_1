@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Table Kelas
                            <a href="{{ route('kelas.index') }}" class="btn btn-info float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelas.update', $kelas->id) }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="kelas" class="form-control" value="{{ $kelas->kelas }}">
                            </div>
                            <div class="form-group">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="dkr">{{ $kelas->dkr }}
                                </textarea>
                            </div>
                            <div class="btn-group mt-4">
                                <button type="submit" class="btn btn-secondary">SAVE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
