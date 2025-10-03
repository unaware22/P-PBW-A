# Praktikum Laravel - Pertemuan 3
**Judul:** Instalasi, Konfigurasi, dan Halaman Pertama Kita  
**Proyek:** LaraPress (Blog Sederhana)  

---

## Tujuan
- Menginstal Laravel 12 dengan Composer  
- Menjalankan server lokal (`php artisan serve`)  
- Memahami struktur folder dasar Laravel  
- Membuat route dan view sederhana  
- Memahami alur kerja dasar: **Request → Route → View → Response**  

---

## Alat yang Dibutuhkan
- Server lokal (Laragon/XAMPP)  
- Composer  
- Terminal (CMD, PowerShell, atau bawaan Laragon)  
- Code Editor (VS Code disarankan)  
- Browser (Chrome/Firefox)  

---

## Ringkasan Praktikum
1. **Instalasi Proyek**
   ```bash
   composer create-project laravel/laravel LaraPress
   
2. **Membuat folder baru LaraPress berisi framework Laravel dan menjalankan server**
    cd LaraPress
    php artisan serve

3. **Route & View**
    Default route di routes/web.php:

    Route::get('/', function () {
        return view('welcome');
    });

    Edit resources/views/welcome.blade.php, codingan diubah dengan HTML sederhana untuk halaman utama.
    Menjadi seperti dibawah ini, dengan menambahkan link navigasi antar halaman
    <img width="807" height="362" alt="image" src="https://github.com/user-attachments/assets/e8d62579-bc53-432b-aa27-7b68d72c39ea" />
    Simpan & Refresh lalu kembali ke halaman http://127.0.0.1:8000.

4. **Membuat Halaman Baru**

    Tambah route:

    Route::get('/tentang-kami', function () {
        return view('about');
    });


    Buat file resources/views/about.blade.php dengan konten HTML tentang proyek.

    Tambahkan link navigasi antar halaman (Home ↔ Tentang Kami).
    <img width="1162" height="341" alt="image" src="https://github.com/user-attachments/assets/a94d3574-400f-4341-ab46-526230b54039" />

5. **Menambah Halaman Kontak**
   Buat halaman statis baru: Kontak

    Route: /kontak-kami

    Isi dengan informasi kontak fiktif (email, nomor telepon).
    Tambahkan link navigasi ke halaman lain.
   <img width="1092" height="926" alt="image" src="https://github.com/user-attachments/assets/02f4484a-3fc2-4b40-b267-b07188418d94" />


**Tampilan Router:**
<img width="987" height="426" alt="image" src="https://github.com/user-attachments/assets/34e4f3c5-3bcd-4268-bf34-ba5d9b1f84ee" />

**Output pada website:**
- Welcome
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/44f5679f-2031-486c-b94a-2a82809884d7" />

- About
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/4f35f821-18e6-4d1b-a5ca-88c793b80bf9" />
  
- Kontak
  <img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/d3d03964-4c61-4d1f-95b4-cf91a26d7ff1" />
