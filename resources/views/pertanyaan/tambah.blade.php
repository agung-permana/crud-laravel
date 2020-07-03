@extends('template.master')

@section('title', 'Pertanyaan')

@section('content')
    <div class="container-fluid">
        <h3 class="pb-3 pt-3">Tambah Pertanyaan</h3>
        <div class="col col-6">
            <form method="post" action="{{ url('pertanyaan') }}">
                @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" name="judul" class="form-control" autofocus required>
                </div>

                <div class="form-group">
                    <label>Isi</label>
                    <input type="text" name="isi" class="form-control">
                </div>

                <div class="form-group">
                    <label>Created At</label>
                    <input type="date" name="created" class="form-control">
                </div>

                <div class="form-group">
                    <label>Updat At</label>
                    <input type="date" name="update" class="form-control">
                </div>


                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url('/') }}" class="btn btn-danger ml-2">Kembali</a>
            </form>
        </div>
        
    </div>
@endsection