# 📑 Aplikasi Pendaftaran Event – Belajar PHP 2025

## 📌 Deskripsi

Aplikasi ini adalah sistem pendaftaran event sederhana berbasis **PHP dan HTML**.
Peserta dapat mengisi form (nama, email, tanggal lahir), kemudian data akan divalidasi dan disimpan ke file `pendaftar.txt`.
Setelah mendaftar, peserta langsung muncul dalam tabel daftar pendaftar.

---

## 🛠️ Fitur Utama

* ✅ Form pendaftaran dengan input **Nama, Email, Tanggal Lahir**
* ✅ Validasi input menggunakan **Regex** (Email & Tanggal lahir DD-MM-YYYY)
* ✅ Pesan sukses dan pesan error yang jelas
* ✅ Data peserta disimpan otomatis ke file `pendaftar.txt`
* ✅ Daftar peserta ditampilkan dalam tabel

---

## 🧩 Struktur Kode

### 1. HTML (Tampilan Form)

* Membuat form input untuk **Nama, Email, dan Tanggal Lahir**
* CSS sederhana agar tampilan form dan tabel rapi
* Menggunakan metode **POST** untuk mengirim data ke `index.php`
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/85973f99-aada-4fd1-b876-2b166e555972" />
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/1c7c5ee8-6025-4013-b765-3aa458af73b7" />
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/7775e04f-37d0-4acd-af7f-1ae70a4bc54d" />
<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/cfe3dd1f-4b96-48b6-a324-10b3e1286924" />


### 2. PHP (Logika Program)

* **Constant**

  * `NAMA_EVENT` → Nama event
  * `FILE_PENDAFTARAN` → Lokasi file data pendaftar
* **Fungsi Validasi**

  * `validateEmail()` → memeriksa format email
  * `validateDate()` → memeriksa format tanggal lahir (**DD-MM-YYYY**)
* **Form Handling**

  * Data input dibersihkan dengan `htmlspecialchars()`
  * Cek field kosong, format email, dan tanggal lahir
  * Jika valid → simpan data ke `pendaftar.txt` dengan `file_put_contents()`
  <img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/9cf6a0b3-6fa9-4ac0-aed8-56c64c76724b" />
  <img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/a3c8a440-b1b8-474a-9718-7cce997aa882" />


### 3. Status Message

* **Sukses** → Pesan hijau:

  > “Terima kasih, [Nama]! Pendaftaran Anda untuk event Belajar PHP 2025 berhasil.”
* **Error** → Pesan merah berisi kesalahan:

  * Field kosong
  * Format email tidak valid
  * Format tanggal lahir salah
  <img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/fb6d0ac2-9ad2-4e65-8991-2d59b883f6b0" />

### 4. Daftar Peserta

* Data peserta dibaca dari `pendaftar.txt`
* Ditampilkan dalam tabel dengan kolom: **Nama Lengkap | Email | Tanggal Lahir**
* Jika belum ada data → ditampilkan pesan:

  > “Belum ada pendaftar.”
  <img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/569413db-a73d-433e-98ae-70058ba98172" />
---

## 📂 File yang Digunakan

* `index.php` → Halaman utama (form + daftar peserta)
* `pendaftar.txt` → Tempat menyimpan data peserta

---

## 🚀 Cara Menjalankan

1. Pastikan sudah mengaktifkan server lokal (XAMPP/Laragon/dll).
2. Simpan file `index.php` di folder `htdocs` atau project web server.
3. Buka browser, akses:

   ```
   http://localhost/index.php
   ```
4. Isi form dan klik **Daftar Sekarang**.
5. Data peserta akan tersimpan di `pendaftar.txt` dan tampil di tabel.

---

## 📸 Tampilan 

### Form Pendaftaran Jika Berhasil

<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/22c7c3e2-3818-469f-8f84-b7bb157c30cd" />

### Form Pendaftaran Jika Gagal

<img width="1920" height="1080" alt="Image" src="https://github.com/user-attachments/assets/7cc56c6d-e3c2-46bb-82a5-2ec63f4854df" />
---

## 📌 Kesimpulan

Program ini merupakan contoh praktikum sederhana untuk mempelajari:

* Konsep **HTML Form**
* **Validasi input** dengan PHP + Regex
* **File handling** di PHP
* **Menampilkan data** dalam bentuk tabel

Dengan aplikasi ini, kita sudah bisa membuat sistem pendaftaran event sederhana tanpa database.

---
