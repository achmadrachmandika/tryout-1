@extends('layouts.app2')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tryout
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

                    <form method="post" action="{{ route('tryout.store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="id">Id</label>
                            <input type="text" name="id" class="form-control" id="id" aria-describedby="id" >
                        </div>
                        <div class="form-group">
                            <label for="namaTryout">Nama Tryout</label>
                            <input type="text" name="namaTryout" class="form-control" id="namaTryout" aria-describedby="namaTryout" >
                        </div>
                        <div class="form-group">
                            <label for="namaTryout">Detail Tryout</label>
                            <input type="text" name="namaTryout" class="form-control" id="namaTryout" aria-describedby="namaTryout" >
                        </div>
                        <div class="form-group">
                            <label for="namaTryout">Mata Pelajaran</label>
                            @foreach($mapel as $m)
                            <select name="mapel" class="form-control">
                                <option value="{{ $m->id }}">{{ $m->mata_pelajaran_id }}</option>
                            </select>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
