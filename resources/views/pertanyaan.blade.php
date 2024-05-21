@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card text-center">
                        <div class="card-header">
                            Data Pertanyaan
                            <div class="container-fluid">
                                <form action="{{ route('cari') }}" class="d-flex" role="search" method="GET">
                                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="cari">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Waktu</th>
                                        <th>Pertanyaan</th>
                                        <th>Jawaban</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($pertanyaan as $p)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->tanggal }}</td>
                                        <td>{{ $p->waktu }}</td>
                                        <td>{{ $p->pertanyaan }}</td>
                                        <td>{{ $p->jawaban }}</td>
                                        <td>
                                            <form action="{{ route('pertanyaan.delete', ['id' => $p->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" oneclick="return confirm('Are you sure you want to delete this item?')" class="btn btn-outline-danger">Delete</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('edit', $p->id) }}">
                                                <button type="submit" onclick="" class="btn btn-outline-warning">Update</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-body-secondary">
                    Halaman : {{ $pertanyaan->currentPage() }} <br />
                    Jumlah Data : {{ $pertanyaan->total() }} <br />
                    Data Per Halaman : {{ $pertanyaan->perPage() }}
                    <br />
                    {{ $pertanyaan->links() }}
                </div>
            </div>
            @endsection