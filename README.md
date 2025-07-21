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

🔃 Workflow Git (Push & Pull)
1️⃣ Membuat dan Pindah ke Branch Baru (Opsional)
bash
Salin
Edit
# Buat dan langsung pindah ke branch baru
git checkout -b nama-branch
2️⃣ Menambahkan dan Push Perubahan ke Branch
bash
Salin
Edit
# Tambahkan semua perubahan
git add .

# Commit perubahan dengan pesan yang jelas
git commit -m "Deskripsi perubahan"

# Push ke branch yang sesuai di GitHub
git push origin nama-branch
3️⃣ Pull (Menarik Update Terbaru dari Branch)
bash
Salin
Edit
# Pastikan kamu berada di branch yang sesuai
git checkout nama-branch

# Tarik perubahan terbaru dari GitHub
git pull origin nama-branch
4️⃣ Membuat Pull Request (PR) ke Branch Utama
Buka repository di GitHub.

Akan muncul notifikasi: "Compare & pull request" → klik tombol tersebut.

Isi deskripsi pull request (penjelasan perubahan).

Klik "Create Pull Request".

Setelah direview dan disetujui, klik "Merge Pull Request" ke branch utama (misalnya master atau main).
