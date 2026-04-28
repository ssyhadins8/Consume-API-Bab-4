<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>

    <style>
        body {
            font-family: Arial;
            background: #1e3a5f;
            margin: 0;
            padding: 20px;
        }

        .card {
            max-width: 600px;
            margin: auto;
            background: #f0f8ff;
            padding: 25px;
            border-radius: 12px;
            border: 2px solid #1e3a5f;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e3a5f;
        }

        input, select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 2px solid #1e3a5f;
            border-radius: 6px;
            background: #daeeff;
            color: #1e3a5f;
            box-sizing: border-box;
        }

        input::placeholder {
            color: #5b8ab5;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #1e3a5f;
            color: #cce8ff;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 700;
            font-size: 14px;
        }

        button:hover {
            background: #16304f;
        }

        .back {
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            color: #cce8ff;
            font-weight: bold;
        }
    </style>

</head>

<body>

<a class="back" href="/mahasiswa">← Kembali</a>

<div class="card">

<h2>Edit Mahasiswa</h2>

<form method="POST" action="/mahasiswa/{{ $data['nim'] }}">
    @csrf
    @method('PUT')

    <input type="text" name="nim" value="{{ $data['nim'] }}" readonly>
    <input type="text" name="nama" value="{{ $data['nama'] }}" placeholder="Nama">

    <select name="jenis_kelamin">
        <option value="L" {{ $data['jenis_kelamin']=='L'?'selected':'' }}>Laki-laki</option>
        <option value="P" {{ $data['jenis_kelamin']=='P'?'selected':'' }}>Perempuan</option>
    </select>

    <input type="text" name="alamat" value="{{ $data['alamat'] }}">
    <input type="date" name="tanggal_lahir" value="{{ $data['tanggal_lahir'] }}">
    <input type="text" name="program_studi" value="{{ $data['program_studi'] }}">
    <input type="text" name="angkatan" value="{{ $data['angkatan'] }}">
    <input type="email" name="email" value="{{ $data['email'] }}">

    <select name="status">
        <option value="Aktif" {{ $data['status']=='Aktif'?'selected':'' }}>Aktif</option>
        <option value="Tidak Aktif" {{ $data['status']=='Tidak Aktif'?'selected':'' }}>Tidak Aktif</option>
    </select>

    <select name="agama">
        <option value="Islam" {{ $data['agama']=='Islam'?'selected':'' }}>Islam</option>
        <option value="Kristen Protestan" {{ $data['agama']=='Kristen Protestan'?'selected':'' }}>Kristen Protestan</option>
        <option value="Katolik" {{ $data['agama']=='Katolik'?'selected':'' }}>Katolik</option>
        <option value="Hindu" {{ $data['agama']=='Hindu'?'selected':'' }}>Hindu</option>
        <option value="Buddha" {{ $data['agama']=='Buddha'?'selected':'' }}>Buddha</option>
        <option value="Konghucu" {{ $data['agama']=='Konghucu'?'selected':'' }}>Konghucu</option>
    </select>

    <input type="text" name="hobi" value="{{ $data['hobi'] }}">

    <button type="submit">Update Data</button>

</form>

</div>

</body>
</html>