@extends('welcome')

@section('title', 'Data Barang')

@section('content')
<main class="table">
    <div class="table__header">
        <h1>Data Barang</h1>
        <div class="input-group">
            <img src="{{ asset('images/search.png') }}" alt="Search Icon">
            <input type="text" placeholder="Search barang..." class="input-group">
        </div>
    </div>
    <div class="table__body">
        <table id="barang_table">
            <thead>
                <tr>
                    <th>No<span class="icon-arrow">&UpArrow;</span></th> <!-- Added No column -->
                    <th>Kode<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Nama<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Kategori<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Harga<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Stok<span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- This will display the serial numbers (1, 2, 3, etc.) -->
                        <td>{{ $item['kode'] }}</td>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['kategori'] }}</td>
                        <td>{{ $item['harga'] }}</td>
                        <td>{{ $item['stok'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
<script src="{{ asset('js/table.js') }}"></script>
@endsection
