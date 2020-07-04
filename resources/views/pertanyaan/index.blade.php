@extends('template.master')

@section('title', 'Pertanyaan')

@section('content')
    <div class="container-fluid">
        <h3 class="pb-3 pt-3">Pertanyaan</h3>
        <a href="{{ url('pertanyaan/tambah') }}" class="btn btn-primary mb-3">Tambah Pertanyaan</a>
        <div class="card">
            <div class="card-header">
                <h4>Pertanhyaan</h4>
            </div>

            <div class="card-body">
                <table id="example1" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Isi Pertanyaan</th>
                            <th>Jawaban</th>
                            <th>Lihat Jawaban</th>
                            <th>Detail Pertanyaan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($questions as $p)
                        <tr>
                        <td>{{ $p->id }}</td>
                            <td>{{ $p->isi_pertanyaan }}</td>
                            <td>
                                <form class="form-inline">
                                    <input type="text" class="form-control mb-2 mr-sm-2">
                                
                                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                                  </form>
                            </td>
                            <td>
                                <button class="btn btn-success">Jawaban</button>
                            </td>
                            <td>
                                <button class="btn btn-primary">Detail</button>
                            </td>
                            <td>
                                <button class="btn btn-danger mr-2">Hapus</button>
                                <button class="btn btn-warning">Edit</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection