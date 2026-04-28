<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 20px;
            background: #1e3a5f;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            background: #f0f8ff;
            padding: 24px;
            border-radius: 12px;
            border: 2px solid #1e3a5f;
        }

        h2 {
            margin-bottom: 16px;
            font-size: 17px;
            color: #1e3a5f;
            font-weight: 700;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            margin-bottom: 16px;
            align-items: center;
        }

        .search-row {
            display: flex;
            gap: 6px;
        }

        input[type="text"] {
            padding: 7px 10px;
            width: 190px;
            border: 2px solid #1e3a5f;
            border-radius: 7px;
            font-size: 13px;
            color: #1e3a5f;           /* ← warna teks input biru tua */
            background: #daeeff;      /* ← background input biru muda */
            outline: none;
        }

        input[type="text"]::placeholder {
            color: #5b8ab5;           /* ← placeholder juga biru, bukan hitam */
        }

        button {
            cursor: pointer;
            font-family: Arial;
        }

        .search-btn {
            padding: 7px 16px;
            background: #1e3a5f;
            color: #cce8ff;
            border: none;
            border-radius: 7px;
            font-size: 13px;
            font-weight: 600;
        }

        .btn-add {
            background: #cce8ff;
            color: #1e3a5f;
            padding: 7px 14px;
            border-radius: 7px;
            font-size: 13px;
            border: 2px solid #1e3a5f;
            font-weight: 700;
            text-decoration: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 13px;
        }

        th {
            background: #1e3a5f;
            padding: 11px 14px;
            text-align: center;
            color: #cce8ff;
            font-weight: 700;
        }

        td {
            padding: 10px 14px;
            text-align: center;
            color: #1e3a5f;           /* ← teks tabel biru tua bukan hitam */
            border-bottom: 1px solid #b3d9f7;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #daeeff;
        }

        .btn-detail {
            color: #1e3a5f;
            margin: 0 3px;
            font-size: 13px;
            cursor: pointer;
            background: #cce8ff;
            border: 1px solid #1e3a5f;
            border-radius: 5px;
            padding: 3px 8px;
            font-weight: 600;
        }

        .btn-edit {
            color: #7c4f00;
            margin: 0 3px;
            font-size: 13px;
            cursor: pointer;
            background: #fde68a;
            border: 1px solid #b45309;
            border-radius: 5px;
            padding: 3px 8px;
            font-weight: 600;
        }

        .btn-delete {
            color: #7f1d1d;
            margin: 0 3px;
            font-size: 13px;
            cursor: pointer;
            background: #fecaca;
            border: 1px solid #b91c1c;
            border-radius: 5px;
            padding: 3px 8px;
            font-weight: 600;
        }

        .msg {
            margin-bottom: 12px;
            color: #1e3a5f;
            font-size: 13px;
            font-weight: 600;
        }
    </style>

</head>

<body>

<div class="container">

    <h2>Data Mahasiswa</h2>

    @if(session('success'))
        <p class="msg">✓ {{ session('success') }}</p>
    @endif

    <div class="top-bar">
        <form method="GET" action="/mahasiswa" class="search-row">
            <input type="text" name="search" placeholder="Cari nama..."
                   value="{{ $search ?? '' }}">
            <button type="submit" class="search-btn">Cari</button>
        </form>

        <a class="btn-add" href="/mahasiswa/create">+ Tambah Mahasiswa</a>
    </div>

    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        @forelse($data as $mhs)
        <tr>
            <td>{{ $mhs['nim'] ?? '-' }}</td>
            <td>{{ $mhs['nama'] ?? '-' }}</td>
            <td>
                <a class="btn-detail" href="/mahasiswa/{{ $mhs['nim'] }}">Detail</a>
                <a class="btn-edit" href="/mahasiswa/{{ $mhs['nim'] }}/edit">Edit</a>
                <form action="/mahasiswa/{{ $mhs['nim'] }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete" type="submit"
                            onclick="return confirm('Yakin mau hapus data ini?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="3" style="color:#5b8ab5; padding:16px;">
                Data tidak ditemukan
            </td>
        </tr>
        @endforelse

    </table>

</div>

</body>
</html>