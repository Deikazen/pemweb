@extends('layouts.frontend')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                @session('success')
                    <div class="alert alert-success ">
                        {{ session('success') }}
                    </div>
                @endsession

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Berita
                            <a href="{{ url('beritas/create') }}" class="btn btn-primary float-end">Tambah berita</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table tabled-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Judul Berita</th>
                                    <th>Deskripsi</th>
                                    <th>Isi Berita</th>
                                    <th>Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($beritas as $berita)
                                    <tr>
                                        <td> {{ $berita->id }} </td>
                                        <td> {{ $berita->judul_berita }} </td>
                                        <td> {{ $berita->deskripsi_singkat }} </td>
                                        <td> {{ $berita->isi_berita }} </td>
                                        <td> {{ $berita->foto }} </td>
                                        <td>
                                            <a href="{{ route('beritas.edit', $berita->id) }}"
                                                class="btn btn-success">Edit</a>
                                            <a href="{{ route('beritas.show', $berita->id) }}" class="btn btn-info">Show</a>

                                            <form action="{{ route('beritas.destroy', $berita->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
