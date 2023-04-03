@extends('layouts.app2')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Tambah Jenis Soal
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" action="{{ route('jenis.store') }}" id="myForm">
                    @csrf
                    <div class="form-group">
                        <label for="id">Id</label>
                        <input type="text" name="id" class="form-control" id="id" aria-describedby="id">
                    </div>
                    <div class="form-group">
                        <label for="jenis">Jenis Soal</label>
                        <input type="text" name="jenis" class="form-control" id="jenis" aria-describedby="id">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection