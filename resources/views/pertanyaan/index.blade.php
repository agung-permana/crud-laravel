@extends('template.master')

@section('title', 'Pertanyaan')

@section('content')
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Pertanyaan</h3>
            </div>
            <div class="card-body">
                <table id="table" class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Judul</th>
                            <th>Isi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $item)
                        <tr>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->isi }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection