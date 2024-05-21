@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container">
    <div class="container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="card">
                                <div class="card-header text-center">
                                    Data Pertanyaan
                                </div>
                                <div class="card-body">
                                    <form method="post" action="{{ route('pertanyaan.update', $pertanyaan->id) }}">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group">
                                            <label for="">Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" value="{{ $pertanyaan->tanggal }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Waktu</label>
                                            <input type="time" name="waktu" class="form-control" value="{{$pertanyaan->waktu}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Pertanyaan</label>
                                            <input type="text" name="pertanyaan" class="form-control" placeholder="Pertanyaan Saat ini" value="{{$pertanyaan->pertanyaan}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Jawaban</label>
                                            <input type="text" name="jawaban" class="form-control" placeholder="Jawaban Anda Saat ini" value="{{$pertanyaan->jawaban}}" required>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" value="Simpan">
                                            <a href="/home" class="btn btn-danger">Kembali</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center">
                                    Pertanyaan Saat ini
                                </div>
                            </div>
                        </div>
                    </div>
                    @endsection