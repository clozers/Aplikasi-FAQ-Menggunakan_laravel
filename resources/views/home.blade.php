@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card text-center">
                    <div class="card text-center">
                        <div class="card-header">
                            Halaman Home
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                Selamat Datang Di Aplikasi Catatan Pertanyaan</h5>
                            <p class="card-text">
                                Menjawab Semua Pertanyaan yang di tanyakan</p>
                            <a href="/pertanyaan" class="btn btn-primary">
                                Lihat Catatan Pertanyaan Anda</a>
                        </div>
                        <div class="card-footer text-body-secondary">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection