# UAS-PakAhmadRoihan-PPL
Aldiansyah Putra ibrahim (2211310006)

# Nomer 1

## SKEMA HARDWARE
-	Computer: Digunakan oleh admin untuk melakukan pendaftaran pelanggan, peminjaman, pengembalian, dan sebagainya.
-	Wifi: Digunakan supaya Computer dan perangkat lainya mampu mengakses internet
-	Laptop: Digunakan untuk merancang proyek ini.

## SKEMA SOFTWARE
- Prosesor Pentium 233-megahertz (MHz) untuk Windows XP
  Prosesor dengan kecepatan minimal 1 gigahertz (GHz) untuk Windows 10
  Kapasitas harddisk minimal 1.5 gigabyte untuk Windows XP
  Kapasitas minimum 32 GB untuk menginstal Windows Server 2022 atau yang lebih baru
- Framework yang digunakan adalah bootstrap untuk membuat tampilan web lebih menarik
- bahasa pemograman yang digunakan adalah PHP
  
## SKEMA DATABASE
berikut ini adalah ERD dari sistem sewa console


![Image](https://github.com/user-attachments/assets/18bdfa9f-cd3d-4c27-adb7-1ce177b685ca)


## SKEMA ACTOR
- USECASE DIAGRAM
  
  ![Image](https://github.com/user-attachments/assets/0579d3ee-3f44-4c85-b68d-f0f26a2d6efc)

- ACTIVITY DIAGRAM
  
  ![Image](https://github.com/user-attachments/assets/c6d9140d-510f-47da-b744-c66e077b22bf)

- SEQUNCE DIAGRAM
  (peminjaman)
  
  ![Image](https://github.com/user-attachments/assets/34bb025e-21a9-4188-855b-ab4d647738c2)

  (pengembalian)

  ![Image](https://github.com/user-attachments/assets/b4b88501-e98e-4e68-af19-bfb4c3d905b1)

# Nomer 2

Proses implementasi sistem dimulai dengan persiapan lingkungan kerja, yang mencakup perancangan dan analisis kebutuhan. Langkah pertama adalah mengidentifikasi kebutuhan sistem dengan menganalisis persyaratan dan pemangku kepentingan, serta menyusun perencanaan proyek yang mencakup jadwal, anggaran, dan sumber daya yang dibutuhkan. Selanjutnya, dalam tahap pengembangan sistem, dilakukan perancangan arsitektur yang mencakup perangkat keras, perangkat lunak, dan interaksi antar komponen, serta pembuatan prototipe jika diperlukan untuk mendapatkan umpan balik awal dari pengguna. Setelah perancangan selesai, sistem diuji melalui pengujian integrasi guna memastikan bahwa setiap komponen dapat berinteraksi secara harmonis, diikuti dengan pengujian menyeluruh untuk memastikan bahwa sistem memenuhi semua persyaratan fungsional dan non-fungsional. Pada tahap implementasi, perangkat keras dan perangkat lunak dipasang di lingkungan produksi, diikuti dengan pembuatan dan konfigurasi database. Setelah itu, dilakukan migrasi data dari sistem lama ke sistem baru secara hati-hati agar tidak terjadi kehilangan data. Integrasi hardware, software, database, dan antarmuka pengguna dilakukan secara bertahap untuk memastikan semua komponen bekerja sesuai dengan desain yang telah dirancang, sehingga sistem dapat berjalan dengan optimal dan siap digunakan oleh pengguna.

![Image](https://github.com/user-attachments/assets/c055cea1-cec0-43b8-aff5-35e1037ac475)

## Nomer 3

Black box testing adalah metode pengujian perangkat lunak yang berfokus pada pengujian fungsionalitas sistem tanpa mempertimbangkan struktur internal atau kode sumbernya. Pengujian ini dilakukan dari sudut pandang pengguna, dengan tujuan untuk memastikan bahwa perangkat lunak berfungsi sesuai dengan spesifikasi yang telah ditentukan

## Nomer 4

Permasalahan utama dalam proyek perangkat lunak yang saya kembangkan adalah kendala dalam pencetakan laporan, di mana sistem sering mengalami keterlambatan dalam memproses data, tampilan laporan yang tidak rapi, serta keterbatasan format ekspor yang tersedia. Penyebab utama masalah ini adalah kurangnya optimasi dalam pengolahan data, ketidaksesuaian format laporan dengan kebutuhan pengguna, serta kurangnya dukungan fitur ekspor ke berbagai format seperti PDF atau Excel. Dampaknya, pengguna mengalami kesulitan dalam mendapatkan laporan yang akurat dan sesuai dengan standar administrasi, sehingga memperlambat proses pengambilan keputusan. Untuk mengatasi masalah ini, solusi yang dapat diterapkan adalah mengoptimalkan query database agar lebih efisien, menggunakan library seperti DomPDF atau PHPSpreadsheet untuk meningkatkan fleksibilitas format laporan, serta merancang tampilan laporan yang lebih terstruktur dan mudah dibaca. Dengan solusi ini, sistem dapat menghasilkan laporan yang lebih cepat, rapi, dan sesuai dengan kebutuhan pengguna, sehingga meningkatkan efisiensi dan efektivitas dalam pengelolaan data perpustakaan.

## Nomer 5

Untuk pengembangan proyek ini, saya memilih PHP sebagai bahasa pemrograman utama karena sifatnya yang fleksibel, open-source, dan sangat cocok untuk pengembangan aplikasi berbasis web. PHP memiliki kemampuan untuk berinteraksi dengan database secara efisien, terutama MySQL, yang digunakan dalam proyek ini. Selain itu, PHP didukung oleh berbagai framework, seperti Laravel, yang menawarkan struktur yang rapi, keamanan yang lebih baik, serta fitur bawaan seperti ORM (Eloquent) dan routing yang memudahkan pengembangan aplikasi.  

Proyek ini dikembangkan sebagai aplikasi berbasis web, yang memungkinkan akses data secara online melalui browser tanpa perlu instalasi di setiap perangkat pengguna. Platform ini dipilih karena lebih fleksibel, mudah diakses, dan dapat digunakan oleh banyak pengguna dalam jaringan lokal maupun internet.  

Selama proses pengembangan, saya menggunakan beberapa perangkat lunak pendukung, termasuk XAMPP sebagai server lokal untuk menjalankan Apache, MySQL, dan PHP, Visual Studio Code sebagai editor kode utama dengan ekstensi pendukung untuk PHP dan Laravel, serta Composer sebagai manajer dependensi untuk mengelola paket dan library yang digunakan dalam proyek. Dengan kombinasi teknologi ini, sistem dapat dikembangkan secara lebih efisien, aman, dan mudah dikelola sesuai dengan kebutuhan pengguna.

### Seluruh codingan ada di dalam file yang bisa di akses di atas



