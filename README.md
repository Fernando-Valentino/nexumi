<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
🚀 Tutorial Singkat Menjalankan Project Nexumi
🧩 Setup Laravel
bash
Salin
Edit
# Clone project dari GitHub
git clone https://github.com/Fernando-Valentino/nexumi.git
cd nexumi

# Install dependensi PHP
composer install

# Salin file .env dan konfigurasi
cp .env.example .env

# Generate key aplikasi
php artisan key:generate

# Edit konfigurasi database di .env sesuai kebutuhan
# DB_DATABASE=nama_database
# DB_USERNAME=root
# DB_PASSWORD=

# Jalankan migrasi database
php artisan migrate

# (Opsional) Jalankan seeder
php artisan db:seed

# Jalankan server Laravel
php artisan serve
🔃 Git Commands (Push & Pull Workflow)
🧪 1. Membuat dan pindah ke branch baru (opsional)
bash
Salin
Edit
git checkout -b nama-branch
📤 2. Menambahkan dan mendorong perubahan ke branch
bash
Salin
Edit
git add .
git commit -m "Deskripsi perubahan"
git push origin nama-branch
🔁 3. Menarik update terbaru dari branch
bash
Salin
Edit
git pull origin nama-branch
✅ 4. Membuat Pull Request ke master
Push branch ke GitHub

Buka GitHub → klik Compare & Pull Request

Isi deskripsi PR dan submit

Setelah review & approval → klik Merge
