<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Monitoring Akses Kunci Pintu</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        body {
            background-image: url('{{ asset('images/background2.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Menetapkan gambar latar belakang tetap */
            background-color: #f4f4f4; /* Warna latar belakang cadangan */
            position: relative; /* Agar overlay dapat ditempatkan dengan benar */
            overflow: hidden; /* Menghindari scroll tambahan karena posisi fixed */
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: none; /* Menghilangkan warna latar belakang */
            backdrop-filter: blur(10px); /* Efek blur */
            z-index: 0; /* Di belakang konten */
        }
        .navbar {
            background-color: #F8F8FF;
            overflow: hidden;
            display: flex;
            align-items: center;
            padding: 10px 0;
            margin-bottom: 20px; /* Jarak antara navbar dan konten di bawahnya */
            position: relative; /* Agar navbar berada di atas overlay */
            z-index: 1; /* Di atas overlay */
        }
        .navbar .logo-container {
            display: flex;
            align-items: center;
            margin-right: auto;
        }
        .navbar .logo-container img {
            height: auto;
        }
        .navbar .logo-ti {
            max-width: 100px; /* Ukuran gambar disesuaikan */
            margin-left: 5px;
        }
        .navbar .tekom {
            max-width: 60px; /* Ukuran gambar lebih kecil */
            margin-left: 5px; /* Jarak antara logo jika diperlukan */
        }
        .navbar a, .navbar form {
            display: block;
            color: #000000;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }
        .navbar a:hover, .navbar form:hover {
            background-color: #ddd;
            color: black;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: relative; /* Agar konten dapat ditempatkan dengan benar dalam container */
            z-index: 1; /* Menempatkan konten di atas overlay */
        }
        h1 {
            margin-bottom: 20px;
            font-size: 2em;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            margin: 20px 0;
            font-size: 16px;
            color: #333;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #00BFFF;
            color: #fff;
            font-weight: bold;
        }
        td {
            background-color: #00BFFF;
        }
        tr:nth-child(even) td {
            background-color: #00BFFF;
        }
        tr:hover td {
            background-color: #e0f7fa;
        }
        table thead th {
            border-top: 2px solid ;
        }
    </style>
</head>
<body>
    <div class="overlay"></div> <!-- Elemen overlay dengan blur -->
    <div class="navbar">
        <div class="logo-container">
            <!-- Logo Teknik Komputer diambil dari folder public/images -->
            <img src="https://ti.pnp.ac.id/wp-content/uploads/2024/02/web-header02.png" alt="Logo Teknologi Informasi" class="logo-ti">
            <img src="{{ asset('images/tekom.png') }}" alt="Logo Teknik Komputer" class="tekom">
        </div>
        <form action="{{ route('logout') }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" style="background:none; border:none; cursor:pointer; padding:14px 20px; display: flex; align-items: center;">
                <i class="fas fa-sign-out-alt" style="margin-right: 8px;"></i> Log Out
            </button>
        </form>
    </div>

    <div class="container">
        <h1>Sistem Monitoring Akses Kunci Pintu</h1>

        <table>
            <thead>
                <tr>
                    <th>Nama Dosen</th>
                    <th>ID Kartu</th>
                    <th>Data Masuk</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rfidData as $data)
                    <tr>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->id_card }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
