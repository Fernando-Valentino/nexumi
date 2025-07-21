<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# 🚀 Tutorial Singkat Menjalankan Project Nexumi

---

## 🧩 Setup Laravel

```bash
# Clone project dari GitHub
git clone https://github.com/Fernando-Valentino/nexumi.git
cd nexumi

# Install dependensi PHP
composer install

# Salin file .env dan konfigurasi
cp .env.example .env

# Generate key aplikasi
php artisan key:generate

# Edit konfigurasi database di file .env sesuai kebutuhan
# Contoh:
# DB_DATABASE=nama_database
# DB_USERNAME=root
# DB_PASSWORD=

# Jalankan migrasi database
php artisan migrate

# (Opsional) Jalankan seeder
php artisan db:seed

# Jalankan server Laravel
php artisan serve
-----------------------------------------------
🔃 Workflow Git (Push & Pull)
1️⃣ Membuat dan Pindah ke Branch Baru (Opsional)
# Buat branch baru dan langsung pindah ke sana
git checkout -b nama-branch
-----------------------------------------------
2️⃣ Menambahkan dan Push Perubahan ke Branch
# Tambahkan semua perubahan ke staging
git add .

# Commit perubahan dengan pesan yang deskriptif
git commit -m "Deskripsi perubahan"

# Push branch ke remote repository
git push origin nama-branch
-----------------------------------------------
3️⃣ Pull (Menarik Update Terbaru dari Branch)
bash
Salin
Edit
# Pindah ke branch yang ingin di-update
git checkout nama-branch

# Tarik update terbaru dari GitHub
git pull origin nama-branch
-----------------------------------------------
4️⃣ Membuat Pull Request (PR) ke Branch Utama (main atau master)
Buka repository di GitHub.

Setelah melakukan push ke branch, akan muncul notifikasi: "Compare & pull request" → klik tombol tersebut.

Isi judul dan deskripsi pull request (penjelasan perubahan).

Klik tombol "Create Pull Request".

Setelah direview, klik "Merge Pull Request" untuk menggabungkan ke main/master.
