<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>

    <style>
        body {
            font-family: Arial;
            background: #1e3a5f;
            margin: 0;
            padding: 20px;
        }

        .back {
            text-decoration: none;
            color: #cce8ff;
            font-weight: bold;
            margin-bottom: 15px;
            display: inline-block;
        }

        .card {
            max-width: 800px;
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

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .item {
            background: #daeeff;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #b3d9f7;
        }

        .label {
            font-size: 12px;
            color: #5b8ab5;
        }

        .value {
            font-size: 15px;
            font-weight: bold;
            color: #1e3a5f;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            color: white;
            display: inline-block;
        }

        .aktif { background: #1e3a5f; }
        .nonaktif { background: #b91c1c; }
    </style>
</head>

<body>

<a class="back" href="/mahasiswa">← Kembali</a>

<div class="card">

    <h2>📄 Detail Mahasiswa</h2>

    @if(!empty($data))

    <div class="grid">

        <div class="item">
            <div class="label">NIM</div>
            <div class="value">{{ $data['nim'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Nama</div>
            <div class="value">{{ $data['nama'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Jenis Kelamin</div>
            <div class="value">{{ $data['jenis_kelamin'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Agama</div>
            <div class="value">{{ $data['agama'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Alamat</div>
            <div class="value">{{ $data['alamat'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Tanggal Lahir</div>
            <div class="value">{{ $data['tanggal_lahir'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Program Studi</div>
            <div class="value">{{ $data['program_studi'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Angkatan</div>
            <div class="value">{{ $data['angkatan'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Email</div>
            <div class="value">{{ $data['email'] ?? '-' }}</div>
        </div>

        <div class="item">
            <div class="label">Status</div>
            <div class="value">
                <span class="badge {{ strtolower($data['status'] ?? '') == 'aktif' ? 'aktif' : 'nonaktif' }}">
                    {{ $data['status'] ?? '-' }}
                </span>
            </div>
        </div>

        <div class="item">
            <div class="label">Hobi</div>
            <div class="value">{{ $data['hobi'] ?? '-' }}</div>
        </div>

    </div>

    @else
        <p style="color:#b91c1c; text-align:center;">Data tidak ditemukan</p>
    @endif

</div>

</body>
</html>