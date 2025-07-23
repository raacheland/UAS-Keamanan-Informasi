# UAS-Keamanan-Informasi
Sistem Absensi Siswa

Deskripsi
Sistem ini dirancang untuk mengelola data kehadiran siswa di sekolah dengan menggunakan basis data relasional. 
Sistem ini menyimpan informasi terkait siswa, kelas, dan kehadiran (absensi) untuk setiap siswa pada tanggal tertentu. 
Dengan sistem ini, guru dan administrator sekolah dapat memantau kehadiran siswa secara efisien dan akurat.

Struktur Tabel dan Relasinya
1. Tabel siswa
Tabel ini menyimpan data siswa yang mencakup informasi dasar tentang masing-masing siswa. Berikut adalah kolom-kolom yang ada di dalam tabel siswa:

nis: Nomor Induk Siswa (NIS) yang unik untuk setiap siswa.
nama_siswa: Nama lengkap siswa.
kelas_id: ID yang mengacu pada kelas tempat siswa berada (relasi dengan tabel kelas).
api_token: Token API yang digunakan untuk autentikasi sistem dan mengelola akses siswa dalam aplikasi.
Tabel siswa terhubung dengan tabel kelas melalui kolom kelas_id, yang merujuk pada ID kelas di tabel kelas. Setiap siswa hanya dapat terdaftar pada satu kelas, tetapi satu kelas dapat memiliki banyak siswa.

2. Tabel kelas
Tabel ini menyimpan data tentang kelas yang ada di sekolah, termasuk informasi nama kelas dan tingkat kelas. Kolom-kolom dalam tabel kelas adalah:

nama_kelas: Nama dari kelas (misalnya: 10A, 11B, dll.).
tingkat_kelas: Tingkat atau level kelas yang terkait (misalnya: 10, 11, 12 untuk tingkat SMA).
Tabel kelas terhubung dengan tabel siswa melalui kolom kelas_id di tabel siswa. Setiap kelas dapat memiliki banyak siswa, tetapi satu siswa hanya dapat terdaftar pada satu kelas.

3. Tabel absensi
Tabel ini mencatat kehadiran siswa pada setiap hari. Data yang disimpan meliputi siswa yang hadir, tidak hadir, atau izin pada tanggal tertentu. Berikut adalah kolom-kolom yang terdapat di dalam tabel absensi:

siswa_id: ID siswa yang merujuk ke tabel siswa, mengidentifikasi siswa yang absen pada hari tersebut.
tanggal: Tanggal absensi dilakukan.
kehadiran: Status kehadiran siswa pada tanggal tersebut. Nilai yang mungkin adalah "Hadir", "Tidak Hadir", atau "Izin".
Tabel absensi terhubung dengan tabel siswa melalui kolom siswa_id. Setiap siswa dapat memiliki banyak catatan absensi, satu untuk setiap tanggal yang relevan.
