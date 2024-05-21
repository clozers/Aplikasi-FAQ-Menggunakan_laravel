@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body text-center">
                    <div class="card text-center">
                        <div class="card-header" style="background-color: #EB3B3B;">
                            Data Pertanyaan
                            <div class="container-fluid">
                                <form action="{{ route('cari_user') }}" class="d-flex" role="search" method="GET">
                                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="cari">
                                    <button class="btn btn-light active" type="submit">Search</button>  
                                    <a href="{{ url('/') }}" style="margin-left: 5px;">
                                        <button type="submit" class="btn btn-light active">Kembali</button>
                                    </a>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr style="background-color: #EB3B3B;">
                                        <th>No</th>
                                        <th>Pertanyaan</th>
                                        <th>jawaban</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no=1; @endphp
                                    @foreach ($pertanyaan as $p)
                                    <tr style="background-color: #FEE4DF;">
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $p->pertanyaan }}</td>
                                        <td>{{ $p->jawaban }}</td>
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
        </div>
    </div>
</div>
@endsection