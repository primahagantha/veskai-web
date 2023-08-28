## Panduan Instalasi Backend Veksai

Berikut adalah langkah-langkah untuk menginstal backend menggunakan framework Laravel. Panduan ini mencakup pengaturan awal, instalasi dependensi, dan konfigurasi lingkungan.

### Persiapan Awal

1. **Persyaratan:**
    - Pastikan sudah terinstal PHP (versi yang disarankan: 7.4 atau yang lebih baru).
    - Pastikan Composer terinstal. Composer adalah manajer dependensi untuk PHP.
    - Pastikan telah terinstal server database seperti MySQL atau PostgreSQL.

2. **Instal Laravel Installer:**
    Menghidupkan MySQL/MariaDB menggunakan Laragon:
Unduh dan Instal Laragon:

Unduh Laragon dari situs resmi: https://laragon.org/download/
Instal Laragon sesuai petunjuk yang diberikan.
Menghidupkan Laragon dan MySQL:

Buka Laragon dan klik tombol "Start All" di jendela utama. Ini akan menghidupkan server web dan MySQL.
Menghidupkan MySQL/MariaDB menggunakan XAMPP:
Unduh dan Instal XAMPP:

Unduh XAMPP dari situs resmi: https://www.apachefriends.org/download.html
Instal XAMPP sesuai petunjuk yang diberikan.
Menghidupkan XAMPP dan MySQL:

Jalankan XAMPP Control Panel (biasanya dapat ditemukan di direktori instalasi XAMPP).
Klik tombol "Start" di sebelah "MySQL" untuk menghidupkan server MySQL.
Setelah MySQL atau MariaDB dihidupkan, Anda dapat melanjutkan dengan langkah-langkah instalasi backend menggunakan Laravel seperti yang telah saya jelaskan sebelumnya. Pastikan Anda mengkonfigurasi koneksi database di file .env sesuai dengan pengaturan yang telah Anda lakukan pada server MySQL/MariaDB.

### Langkah-langkah Instalasi

1. **Clone Proyek atau Buat Proyek Baru:**
    - Clone proyek dari repositori git jika sudah ada, atau buat proyek baru dengan perintah:
    ```sh
    composer create-project --prefer-dist laravel/laravel nama-proyek
    ```
    
2. **Konfigurasi Lingkungan:**
    - Duplikat file `.env.example` menjadi `.env` dengan perintah:
    ```sh
    cp .env.example .env
    ```
    - Buka file `.env` dan konfigurasi koneksi database dan pengaturan lain sesuai kebutuhan.

3. **Generate Kunci Aplikasi:**
    - Generate kunci aplikasi dengan menjalankan perintah:
    ```sh
    php artisan key:generate
    ```

4. **Migrasi Database:**
    - Jalankan migrasi database untuk membuat tabel-tabel yang diperlukan:
    ```sh
    php artisan migrate
    ```

5. **Menjalankan Server:**
    - Jalankan server lokal dengan perintah:
    ```sh
    php artisan serve
    ```

6. **Instal Dependensi JavaScript:**
    - Instal dependensi JavaScript dengan npm:
    ```sh
    npm install
    ```

7. **Compile Asset:**
    - Compile asset dengan perintah:
    ```sh
    npm run dev
    ```
    - Untuk menghasilkan asset yang dioptimalkan untuk produksi, gunakan perintah `npm run prod`.

### Langkah-langkah Tambahan (Opsional)

1. **Autentikasi:**
    - Jika memerlukan sistem autentikasi, Laravel menyediakan fitur autentikasi siap pakai:
    ```sh
    composer require laravel/ui
    php artisan ui vue --auth
    npm install && npm run dev
    ```

2. **Konfigurasi Server Web:**
    - Konfigurasi server web (misalnya Apache atau Nginx) untuk menunjuk ke direktori `public` di proyek Laravel.

3. **Caching dan Optimasi:**
    - Jalankan perintah berikut untuk mengoptimasi performa:
    ```sh
    php artisan config:cache
    php artisan route:cache
    php artisan optimize
    ```

Setelah langkah-langkah di atas selesai, backend Laravel Anda harus siap digunakan. Jangan lupa untuk mengacu pada dokumentasi resmi Laravel untuk informasi lebih lanjut tentang pengembangan dan konfigurasi proyek.