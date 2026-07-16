# lab5web-Svy
## Nama : Sovy Aprianti
## NIM : 312410344
## Kelas : I241D
## Praktikum 5 - Pagination dan Pencarian
### Tujuan Praktikum
Praktikum ini bertujuan untuk mengimplementasikan fitur pagination dan pencarian data pada halaman admin artikel menggunakan Framework CodeIgniter 4. Dengan adanya pagination, data artikel dapat ditampilkan secara bertahap sehingga lebih mudah dibaca. Sedangkan fitur pencarian digunakan untuk mempermudah pengguna dalam menemukan artikel berdasarkan judulnya.
### Langkah-langkah Praktikum
### 1. Menambahkan Fitur Pagination
Melakukan perubahan pada method admin_index() di Artikel.php dengan menggunakan fungsi paginate(10) untuk membatasi jumlah data yang ditampilkan sebanyak 10 artikel pada setiap halaman.Selain itu ditambahkan pager untuk menampilkan navigasi perpindahan halaman.
<img width="1901" height="992" alt="10" src="https://github.com/user-attachments/assets/2f17cf8c-9ea9-471a-8706-c4468f0918b7" />
### 2. Menambahkan Fitur Pencarian
Menambahkan form pencarian pada halaman admin_index.php sehingga pengguna dapat mencari artikel berdasarkan judul artikel yang diinginkan.Proses pencarian menggunakan parameter q yang diambil dari URL dan diproses menggunakan method like() pada model artikel.
<img width="1892" height="991" alt="11" src="https://github.com/user-attachments/assets/3ec5443a-af73-4a90-913a-2bf36f2909ac" />
