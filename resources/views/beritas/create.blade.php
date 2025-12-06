    @extends('layouts.frontend')


    @section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>
                                Create Berita
                                <a href="{{ url('beritas') }}" class="btn btn-danger float-end">back</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('beritas.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="">Judul Berita</label>
                                    <input type="text" name="judul_berita" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">Deskripsi</label>
                                    <textarea name="deskripsi_singkat" rows="3" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Isi Berita</label>
                                    <textarea name="isi_berita" rows="3" class="form-control"></textarea>

                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
