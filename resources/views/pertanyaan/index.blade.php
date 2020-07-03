@extends('template.master')

@section('title', 'Pertanyaan')

@section('content')
    <div class="container-fluid">
        <h3 class="pb-3 pt-3">Pertanyaan</h3>
        <a href="{{ url('pertanyaan/tambah') }}" class="btn btn-primary mb-3">Tambah Pertanyaan</a>
        <div class="row">
        @foreach ($questions as $item)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                    <small>{{ $item->created_at }}, {{ $item->updated_at }}</small>
                        <h4 class="mt-3">{{ $item->judul }}</h4>
                        <p class="card-text">{{ $item->isi }}</p>
                        <a href="#" class="btn btn-primary">Lihat Jawaban</a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
@endsection