@extends('layouts.frontend')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Show Berita
                            <a href="{{ url('beritas') }}" class="btn btn-danger float-end">back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="">Judul Berita</label>
                            <p>{{ $berita->judul_berita }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="">Deskripsi</label>
                            <p>{!! $berita->deskripsi_singkat !!}</p>
                        </div>
                        <div class="mb-3">
                            <label>Isi Berita</label>
                            <p>{!! $berita->isi_berita !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
