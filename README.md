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

KESIMPULAN

  Pada praktikum Bab 4 ini, dapat disimpulkan bahwa Consume REST API adalah proses di mana aplikasi Laravel bertindak sebagai klien yang mengambil dan mengelola data dari layanan eksternal melalui Application Programming Interface (API) dengan format response berupa JSON atau XML. Dalam pengembangan aplikasi web menggunakan Laravel, terdapat dua pendekatan utama dalam mengonsumsi API. Pendekatan pertama adalah melalui Controller (backend), di mana API dipanggil di sisi server menggunakan GuzzleHttp Client, kemudian data dikirim ke tampilan (view) untuk ditampilkan kepada pengguna. Pendekatan ini memiliki keunggulan dari sisi keamanan karena kredensial seperti API key dan token tetap tersembunyi di backend, serta terhindar dari masalah CORS. 
  Pendekatan kedua adalah melalui View (frontend) menggunakan JavaScript Fetch API atau Axios, di mana data diambil langsung dari sisi client tanpa melalui proses backend, sehingga tampilan menjadi lebih dinamis dan interaktif tanpa perlu reload halaman. Blade Template Engine yang merupakan templating engine bawaan Laravel sangat membantu dalam mengelola tampilan secara efisien melalui fitur looping, conditional statement, templating inheritance, serta integrasi data dari controller menggunakan sintaks {{ }}. Selain itu, Route dalam Laravel berperan penting dalam mendefinisikan endpoint yang dapat diakses pengguna sekaligus menghubungkan setiap request ke controller yang sesuai berdasarkan metode HTTP yang digunakan seperti GET, POST, PUT, dan DELETE. Dengan menerapkan seluruh konsep tersebut, aplikasi consumer yang dibangun mampu melakukan operasi CRUD secara lengkap, yaitu menampilkan seluruh data mahasiswa, mencari data berdasarkan nama, menambah data baru, mengubah data berdasarkan NIM, menampilkan detail data, serta menghapus data mahasiswa sepenuhnya melalui komunikasi dengan REST API server tanpa memerlukan database tersendiri pada sisi consumer.
