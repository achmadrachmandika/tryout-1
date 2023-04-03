@extends('layouts.app2')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>Jenis Soal</h2>
        </div>
    </div>
</div>

<form class="row mb-3 mt-5" action="{{ route('cariJenis') }}" method="POST">
    @csrf
    <div class="col-md-6">
        <div class="d-flex flex-row">
            <input type="text" value="{{ (request()->cari) ? request()->cari : '' }}" name="cari" class="form-control"
                placeholder="cari jenis soal">
            <button type="submit" class="btn btn-primary ml-4">Cari</button>
        </div>
    </div>
    <div class="col-md-6 d-flex flex-row justify-content-end">
        <a class="btn btn-success" href="{{ route('jenis.create') }}"> Input Jenis Soal</a>
    </div>
</form>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Id</th>
        <th>Jenis Soal</th>
    </tr>
    @foreach ($jenis as $j)

    <tr>
        <td>{{ $j->id }}</td>
        <td>{{ $j->jenis }}</td>

        <td>
            <form action="{{ route('jenis.destroy',$j->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('jenis.show',$j->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('jenis.edit',$j->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection