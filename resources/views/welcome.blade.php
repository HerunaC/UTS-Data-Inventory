<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Inventory</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="sidebar">
        <ul>
            <li>
                <a href="#" class="logo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo">
                    <span class="nav-item">Data Inventory</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/user') }}" class="{{ request()->is('user') ? 'active' : '' }}">
        <i class="fas fa-user"></i>
        <span class="nav-item">User</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/kategori-barang') }}" class="{{ request()->is('kategori-barang') ? 'active' : '' }}">
                    <i class="fas fa-list"></i>
                    <span class="nav-item">Kategori Barang</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/barang') }}" class="{{ request()->is('barang') ? 'active' : '' }}">
                    <i class="fas fa-box"></i>
                    <span class="nav-item">Barang</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/laporan') }}" class="{{ request()->is('laporan') ? 'active' : '' }}">
                    <i class="fas fa-chart-bar"></i>
                    <span class="nav-item">Laporan</span>
                </a>
            </li>            
            <li>
                <a href="#" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span class="nav-item">Log Out</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="content">
        @yield('content', 'Welcome to the Inventory Management System!')
    </div>
</body>
</html>
