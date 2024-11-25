@extends('welcome')

@section('title', 'Data Kategori Barang')

@section('content')
<main class="table">
    <div class="table__header">
        <h1>Data Kategori Barang</h1>
        <div class="input-group">
            <img src="{{ asset('images/search.png') }}" alt="Search Icon">
            <input type="text" placeholder="Search kategori barang..." class="input-group">
        </div>
    </div>
    <div class="table__body">
        <table id="kategori_barang_table">
            <thead>
                <tr>
                    <th>No<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Nama<span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($kategoriBarang as $index => $category)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- This will display the serial numbers (1, 2, 3, etc.) -->
                        <td>{{ $category['nama'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
<script src="{{ asset('js/table.js') }}"></script>
@endsection
