@extends('layouts.app2')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Jenis Soal
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Jenis Soal: </b>{{$jenis->jenis}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('jenis.index') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection