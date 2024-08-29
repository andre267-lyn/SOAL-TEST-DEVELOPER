# Sales Commission and Credit Payment System

## Deskripsi
sistem yang menghitung komisi penjualan untuk setiap marketing berdasarkan omzet penjualan mereka dan juga menyediakan sistem pembayaran kredit. Project ini menggunakan Laravel untuk backend dan React untuk frontend.

## Persyaratan
- PHP >= 7.3
- Composer
- Node.js
- npm
- MySQL
- phpMyAdmin

## Instalasi

### Backend (Laravel)
1. Clone repository ini:
   ```bash
   git clone <repository-url>
   cd sales-commission

Install dependencies:
composer install

Salin file .env.example menjadi .env dan sesuaikan konfigurasi database:
cp .env.example .env

Generate application key:
php artisan key:generate

Migrasi database:
php artisan migrate

Jalankan server Laravel:
php artisan serve

Frontend (React)
Pindah ke direktori frontend:
cd frontend

Install dependencies:
npm install

Jalankan aplikasi React:
npm start

Penggunaan
Menghitung Komisi Penjualan
Buka Postman.
Buat request POST ke http://localhost:8000/api/calculate-commission dengan body:
JSON

{
    "amount": 150000000
}



Membuat Pembayaran Kredit
Buka Postman.
Buat request POST ke http://localhost:8000/api/make-payment dengan body:
JSON

{
    "sale_id": 1,
    "amount": 5000000
}


Struktur System
backend/: Direktori untuk aplikasi Laravel.
frontend/: Direktori untuk aplikasi React.
postman_collection.json: Koleksi Postman untuk pengujian API.

Link System Jika error karena untuk frontend tidak bisa ke push berikut linknya https://drive.google.com/drive/folders/1jW7jV_9ieeBqFS4rvACVDDvgnNDtXsrt?usp=sharing

