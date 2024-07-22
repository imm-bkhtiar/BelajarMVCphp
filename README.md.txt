# Struktur Proyek

Proyek ini menggunakan arsitektur Model-View-Controller (MVC) untuk memisahkan logika aplikasi, data, dan tampilan. Berikut adalah gambaran umum dari direktori utama dan isinya:

## `app`
Berisi file inti aplikasi dan konfigurasi.

- **configs**
  - `config.php` - File konfigurasi untuk aplikasi.

- **controllers**
  - `About.php` - Controller untuk bagian "About".
  - `Contact.php` - Controller untuk bagian "Contact".
  - `Home.php` - Controller untuk bagian "Home".

- **core**
  - `App.php` - Kelas utama aplikasi.
  - `const.php` - Berisi konstanta yang digunakan di seluruh aplikasi.
  - `Controller.php` - Kelas controller dasar.
  - `Database.php` - Kelas untuk koneksi dan kueri basis data.
  - `Flasher.php` - Kelas untuk penanganan pesan flash.

- **models**
  - `daftar_contact.php` - Model untuk daftar kontak.
  - `user_model.php` - Model untuk data terkait pengguna.

- **views**
  - **about**
    - `index.php` - View untuk bagian "About".
  - **contact**
    - `detail.php` - View untuk detail kontak.
    - `index.php` - View untuk daftar kontak.
  - **home**
    - `index.php` - View untuk halaman utama.
  - **templates**
    - `footer.php` - Template footer.
    - `header.php` - Template header.
  - `index.php` - File view utama.
  - `page.php` - File view umum.

## `public`
Berisi file yang dapat diakses secara publik seperti CSS, JavaScript, dan titik masuk utama.

- **css**
  - File CSS untuk styling.

- **js**
  - File JavaScript untuk fungsionalitas sisi klien.

- `.htaccess`
  - File konfigurasi Apache.

- `index.php`
  - Titik masuk aplikasi.

## `init.php`
Menginisialisasi aplikasi.

## Konsep MVC

Proyek ini diatur menggunakan konsep arsitektur Model-View-Controller (MVC):

1. **Model** - Bagian ini bertanggung jawab untuk mengelola data aplikasi. Dalam proyek ini, model-model berada di direktori `app/models`. Contoh file model adalah `daftar_contact.php` dan `user_model.php`.

2. **View** - Bagian ini bertanggung jawab untuk menampilkan data kepada pengguna. File view berada di direktori `app/views` dan terbagi dalam sub-direktori sesuai dengan bagian aplikasi. Contoh file view adalah `about/index.php`, `contact/detail.php`, dan `home/index.php`.

3. **Controller** - Bagian ini bertanggung jawab untuk menerima input dari pengguna, memprosesnya melalui model, dan mengirimkan hasilnya ke view. File controller berada di direktori `app/controllers`. Contoh file controller adalah `About.php`, `Contact.php`, dan `Home.php`.

Dengan menggunakan arsitektur MVC, proyek ini lebih mudah untuk dikembangkan, dipelihara, dan diatur. Pemisahan antara logika aplikasi (controller), data (model), dan tampilan (view) memungkinkan pengembang untuk bekerja pada bagian tertentu tanpa mempengaruhi bagian lain.
