# Pustaka Booking Web Programming III

## Deskripsi

Pustaka-booking merupakan aplikasi reservasi atau booking peminjaman buku pada sebuah perpustakaan yang dilakukan secara online dengan melibatkan anggota, admin, dan aplikasi pustaka-booking. Aplikasi pustaka-booking ini dibagi menjadi 2 jenis tampilan yaitu tampilan bagian backend dan tampilan frontend. Untuk pembahasan Web Programming 2 ini hanya membahas tampilan backend saja, sedangkan untuk frontend-nya akan dibahas di mata kuliah Web Programming 3 di semester mendatang.

Aplikasi pustaka-booking adalah aplikasi berbasis web yang dibuat untuk booking sebuah buku untuk dipinjam. Tujuan dibuatkannya aplikasi ini agar memudahkan para pengguna dalam mencari buku dan ingin meminjam buku tersebut. Jadi sebelum datang ke perpustakaan dan meminjam sebuah buku, pengguna bisa mencari terlebih dahulu buku yang akan dipinjam, untuk memastikan bahwa di perpustakaan yang akan dia kunjungi benar bahwa buku tersebut tersedia.

Alur logika sistem booking pustaka ini yaitu seseorang yang ingin melakukan booking diharuskan mendaftar menjadi anggota terlebih dahulu. Selanjutnya, ketika sudah menjadi anggota, baru dapat melakukan booking terhadap buku yang akan dipinjam. Setelah melakukan booking, anggota diharuskan mengambil buku yang telah dibooking dengan cara datang langsung ke perpustakaan dalam waktu 1x24 jam. Kemudian konfirmasi ke petugas atau admin untuk diambilkan buku yang telah dibooking berdasarkan bukti booking melalui aplikasi.

Pustaka-booking secara utuh memiliki kebutuhan sebagai berikut:

Kebutuhan user:

**1. Admin**
- Seorang admin dapat login ke dalam aplikasi pustaka-booking
- Seorang admin dapat menambah, melihat, mengubah, dan menghapus data buku pada aplikasi pustaka-booking
- Seorang admin dapat melihat data booking dan melanjutkan proses booking sampai buku dipinjam
- Seorang admin dapat memproses pengembalian buku yang sudah selesai dipinjam
  
**2. Pengunjung**
- Pengunjung dapat melihat-lihat data buku yang ada pada aplikasi pustaka-booking
- Pengunjung dapat melakukan registrasi untuk menjadi anggota pustaka-booking
- Pengunjung dapat memberikan komentar melalui buku tamu
  
**3. Anggota**
- Anggota dapat login ke dalam sistem aplikasi pustaka-booking
- Anggota dapat melakukan booking terhadap buku yang ada pada aplikasi pustaka-booking
- Anggota dapat mencetak bukti booking buku untuk dibawa ketika akan mengambil buku yang dibooking
  
**Kebutuhan sistem:**
- Sistem akan melakukan validasi username dan password ketika ada seorang user yang melakukan login
- Sistem juga melakukan validasi data buku dan anggota yang akan diinput ke dalam database
- Sistem akan memblokir dan memberikan notifikasi apabila ada seorang pengunjung yang mengklik tombol booking tanpa melakukan login terlebih dahulu
- Sistem akan menghapus secara otomatis data booking yang sudah lewat dari 1x24 jam
- Sistem dapat mengkalkulasi denda yang harus dibayarkan ketika ada anggota yang terlambat mengembalikan buku
- Sistem dapat menampilkan buku yang dicari oleh user berdasarkan kriteria pencarian
