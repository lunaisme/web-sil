````markdown
# Proyek Laravel dengan Tailwind CSS

Ini adalah proyek Laravel yang menggunakan Tailwind CSS sebagai kerangka kerja CSS. Instruksi berikut akan memandu Anda dalam menginstal proyek ini pada komputer lokal menggunakan Laragon.

## Persyaratan Sistem

-   Laragon
-   PHP >= 7.4
-   Composer
-   Node.js dan npm

## Langkah Instalasi

### 1. Menginstal Laragon

Jika Anda belum memiliki Laragon, ikuti langkah-langkah berikut untuk menginstalnya:

1. Kunjungi [situs resmi Laragon](https://laragon.org/) dan unduh versi terbaru.
2. Instal Laragon dengan mengikuti panduan instalasi.
3. Setelah instalasi selesai, buka Laragon dan pastikan Apache/Nginx serta MySQL telah berjalan.

### 2. Kloning Proyek

Buka Command Prompt atau Terminal dan arahkan ke folder **www** di direktori Laragon (biasanya `C:\laragon\www\`). Kemudian, kloning proyek ini:

```bash
git clone https://github.com/lunaisme/web-sil.git
```
````

Ganti `username` dan `nama-proyek` dengan nama pengguna GitHub dan nama proyek Anda.

### 3. Instal Dependensi Laravel

Masuk ke direktori proyek yang telah Anda kloning:

```bash
cd nama-proyek
```

Instal semua dependensi Laravel dengan perintah Composer:

```bash
composer install
```

### 4. Salin File Konfigurasi

Salin file `.env.example` ke `.env`:

```bash
cp .env.example .env
```

### 5. Generate Application Key

Jalankan perintah berikut untuk menghasilkan application key Laravel:

```bash
php artisan key:generate
```

### 6. Konfigurasi Database

-   Buka file `.env` dan ubah pengaturan database sesuai dengan konfigurasi MySQL Laragon Anda.
-   Contoh konfigurasi database di `.env`:

    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nama_database
    DB_USERNAME=root
    DB_PASSWORD=
    ```

Ganti `nama_database` dengan nama database yang Anda buat di Laragon.

### 7. Instal Tailwind CSS

Instal dependensi Node.js dan Tailwind CSS:

```bash
npm install
```

Setelah itu, tambahkan Tailwind CSS ke proyek Laravel dengan perintah:

```bash
npx tailwindcss init
```

Konfigurasi file `tailwind.config.js` sesuai kebutuhan proyek Anda.

### 8. Kompilasi Assets dengan Vite

Jika Anda menggunakan Vite untuk kompilasi, jalankan perintah berikut untuk mem-build Tailwind CSS:

```bash
npm run dev
```

Perintah ini akan menjalankan server pengembangan untuk mengompilasi asset saat Anda melakukan perubahan pada file.

### 9. Jalankan Migrasi Database

Jalankan migrasi untuk membuat tabel di database Anda:

```bash
php artisan migrate
```

### 10. Menjalankan Proyek

Setelah semua langkah selesai, Anda dapat menjalankan proyek Laravel dengan perintah:

```bash
php artisan serve
```

Proyek Laravel Anda akan tersedia di `http://localhost:8000` atau jika menggunakan Laragon, buka langsung `http://nama-proyek.test`.

## Kontribusi

Jika Anda ingin berkontribusi, silakan buat pull request atau fork proyek ini dan kirimkan pull request.

## Lisensi

Proyek ini dilisensikan di bawah [nama lisensi Anda].

---

Happy coding!

```

```
