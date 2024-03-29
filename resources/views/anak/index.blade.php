@extends('layouts.app')
@include('layouts.sidebar')
@section('content')
<html>

<head>
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
{{-- pemberitahuan jika data tidak ditemukan --}}
            
                @if ($data_anak->count() > 0)
                @else
                    <center>
                    <div class="alert alert-warning" role="alert">
                            <h5>Tidak ditemukan data yang sesuai dengan kata kunci!!</h5>
                        
                    </center>
                @endif
            </div>
    <div class="container mt-3">
        @if (session('Sukses'))
        <div class="alert alert-success" role="alert">
            {{ session('Sukses') }}
        </div>
        @endif
        <div class="row">
            <div class="col-4 my-3">
                <h1>Data Anak</h1>
            </div>
            {{-- form search data --}}
            <div class="col-5 my-4">
                @csrf
                <form class="d-flex" action="/anak/cari" method="GET">
                    <input class="form-control me-2" type="text" name="cari" placeholder="Cari data anak" value="{{ old('cari') }}">
                        <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
            

            
            
            <div class="table-responsive">
                <table class="table table table-hover">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>NIK</th>
                            <th>Alamat</th>
                            <th>Tinggi (cm)</th>
                            <th>Berat Badan (kg)</th>
                            <th>Lingkar Kepala (cm)</th>
                            <th>Tgl Pemeriksaan</th>
                        </tr>
                    </thead>
                    @foreach ($data_anak as $anak)
                    <tbody>
                        <tr>
                            <td>{{ $anak->nama }}</td>
                            <td>{{ $anak->jenis_kelamin }}</td>
                            <td>{{ $anak->nik }}</td>
                            <td>{{ $anak->alamat }}</td>
                            <td>{{ $anak->tinggi }}</td>
                            <td>{{ $anak->berat }}</td>
                            <td>{{ $anak->lingkar_kepala }}</td>
                            <td>{{ $anak->tanggal }}</td>
                            </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            <div class="col-3 my-4" allign="right">
            Current Page: {{ $data_anak->currentPage() }}<br>
            Jumlah Data: {{ $data_anak->total() }}<br>
            Data perhalaman: {{ $data_anak->perPage() }}<br>
            <br>
            {{ $data_anak->links() }}</div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>