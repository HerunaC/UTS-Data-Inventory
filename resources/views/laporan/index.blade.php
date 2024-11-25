@extends('welcome')

@section('title', 'Data Laporan')

@section('content')
<main class="table">
    <div class="table__header">
        <h1>Data Laporan</h1>
        <div class="input-group">
            <img src="{{ asset('images/search.png') }}" alt="Search Icon">
            <input type="text" placeholder="Search laporan penerimaan..." class="input-group">
        </div>
    </div>
    <div class="table__body">
        <table id="laporan_table">
            <thead>
                <tr>
                    <th>No<span class="icon-arrow">&UpArrow;</span></th> <!-- Added No column -->
                    <th>Kode Barang<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Nama Barang<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Kategori<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Tanggal<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Jumlah<span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($laporan as $index => $report)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- This will display the serial numbers (1, 2, 3, etc.) -->
                        <td>{{ $report['kode_barang'] }}</td>
                        <td>{{ $report['nama_barang'] }}</td>
                        <td>{{ $report['kategori'] }}</td>
                        <td>{{ $report['tanggal'] }}</td>
                        <td>{{ $report['jumlah'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
<script src="{{ asset('js/table.js') }}"></script>
@endsection
