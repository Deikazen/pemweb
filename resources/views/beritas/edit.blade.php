@extends('layouts.frontend')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit Berita
                            <a href="{{ url('beritas') }}" class="btn btn-danger float-end">back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('beritas.update', $berita->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="">Judul Berita</label>
                                <input type="text" name="judul_berita" class="form-control"
                                    value="{{ $berita->judul_berita }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Deskripsi</label>
                                <textarea name="deskripsi_singkat" rows="3" class="form-control">{!! $berita->deskripsi_singkat !!}</textarea>
                            </div>
                            <div class="mb-3">
                                <label>Isi Berita</label>
                                <textarea name="isi_berita" rows="3" class="form-control">{!! $berita->isi_berita !!}</textarea>

                            </div>
                            <div class="mb-3">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
