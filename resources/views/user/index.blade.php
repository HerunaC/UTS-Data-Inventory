@extends('welcome')

@section('title', 'Data User')

@section('content')
<main class="table">
    <div class="table__header">
        <h1>Data User</h1>
        <div class="input-group">
            <img src="{{ asset('images/search.png') }}" alt="Search Icon">
            <input type="text" placeholder="Search user..." class="input-group">
        </div>
    </div>
    <div class="table__body">
        <table id="customers_table">
            <thead>
                <tr>
                    <th>No<span class="icon-arrow">&UpArrow;</span></th> <!-- Added No column -->
                    <th>Username<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Nama<span class="icon-arrow">&UpArrow;</span></th>
                    <th>Email<span class="icon-arrow">&UpArrow;</span></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- This will display the serial numbers (1, 2, 3, etc.) -->
                        <td>{{ $user['username'] }}</td>
                        <td>{{ $user['nama'] }}</td>
                        <td>{{ $user['email'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
<script src="{{ asset('js/table.js') }}"></script>
@endsection
