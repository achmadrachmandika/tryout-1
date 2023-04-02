@extends('layout.app2')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Detail Mata Pelajaran
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>Mata Pelajaran: </b>{{$mapel->namaPelajaran}}</li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="{{ route('admin.mapel') }}">Kembali</a>
            </div>
        </div>
    </div>
@endsection
