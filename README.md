DESKRIPSI

Project ini adalah aplikasi web berbasis Laravel yang dibuat untuk mengonsumsi REST API Mahasiswa yang telah dibuat sebelumnya (Bab 3). Aplikasi ini menerapkan konsep Consume API melalui Frontend (View) menggunakan JavaScript Fetch API, serta menampilkan data secara dinamis menggunakan Blade Template Engine.
Project terdiri dari dua bagian:

pemrograman_Api → REST API Server (backend Laravel yang menyediakan data mahasiswa)

consume-mahasiswa → Aplikasi Consumer (frontend Laravel yang mengonsumsi API tersebut)

CONSUME API

Consume API dalam Laravel adalah proses di mana aplikasi Laravel mengambil data atau berkomunikasi dengan layanan eksternal menggunakan API. Laravel bertindak sebagai klien yang mengirimkan request ke API eksternal dan menerima response dalam format JSON atau XML.

Ada dua pendekatan utama dalam mengonsumsi API di Laravel:

1. Melalui Controller (Backend)
API dipanggil di backend (Laravel Controller), lalu datanya dikirim ke frontend untuk ditampilkan.

2.  Melalui View (Frontend)
API dipanggil langsung dari JavaScript di frontend menggunakan fetch() atau Axios.

VIEW

View adalah bagian aplikasi yang bertanggung jawab menampilkan antarmuka pengguna (UI). Laravel menggunakan Blade sebagai templating engine default. File Blade berekstensi .blade.php dan disimpan di folder resources/views.

ROUTE

Route digunakan untuk menentukan endpoint API yang dapat diakses pengguna, menghubungkan request ke controller yang sesuai, serta mengelola metode HTTP (GET, POST, PUT, DELETE).Route didefinisikan di: 

routes/web.php → untuk permintaan berbasis web

routes/api.php → untuk API

FITUR - FITUR 

1. Tampil Semua Data : Menampilkan seluruh data mahasiswa dalam bentuk tabel.
2. Pencarian         : Fitur pencarian berdasarkan nama menggunakan query parameter.
3. Tambah Data       : Form untuk menambahkan data mahasiswa baru melalui API.
4. Update Data       : Form untuk mengupdate data mahasiswa berdasarkan NIM.
5. Detail Data       : Menampilkan detail data mahasiswa berdasarkan NIM.
6. Hapus Data        : Fitur untuk menghapus data mahasiswa berdasarkan NIM.

