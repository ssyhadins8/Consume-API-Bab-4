<!DOCTYPE html>
<html>
<head>
<title>Tambah Mahasiswa</title>

<style>
body{font-family:Arial;background:#1e3a5f;padding:20px}
.card{max-width:500px;margin:auto;background:#f0f8ff;padding:20px;border-radius:10px;border:2px solid #1e3a5f}
h2{text-align:center;color:#1e3a5f;margin-bottom:15px}
input,select{width:100%;padding:8px;margin:5px 0;border:2px solid #1e3a5f;border-radius:6px;background:#daeeff;color:#1e3a5f;box-sizing:border-box}
input::placeholder{color:#5b8ab5}
button{width:100%;padding:10px;background:#1e3a5f;color:#cce8ff;border:none;border-radius:6px;font-weight:700;font-size:14px;cursor:pointer}
</style>

</head>

<body>

<div class="card">
<h2>Tambah Mahasiswa</h2>

<form method="POST" action="/mahasiswa">
@csrf

<input name="nim" placeholder="NIM">
<input name="nama" placeholder="Nama">

<select name="jenis_kelamin">
<option value="L">Laki-laki</option>
<option value="P">Perempuan</option>
</select>

<input name="alamat" placeholder="Alamat">
<input type="date" name="tanggal_lahir">

<input name="program_studi" placeholder="Prodi">
<input name="angkatan" placeholder="Angkatan">
<input name="email" placeholder="Email">

<select name="status">
<option>Aktif</option>
<option>Tidak Aktif</option>
</select>

<select name="agama">
<option>Islam</option>
<option>Kristen Protestan</option>
<option>Katolik</option>
<option>Hindu</option>
<option>Buddha</option>
<option>Konghucu</option>
</select>

<input name="hobi" placeholder="Hobi">

<button>Simpan</button>

</form>

</div>

</body>
</html>