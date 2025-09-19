# Laporan Praktikum Git

**Nama**  : Aditya Nur Lintang  
**NPM**   : 4523210003  
**Mata Kuliah** : Praktikum Pemrograman Berbasis Web 

---

## Tujuan
Memahami penggunaan dasar Git sebagai version control system, mulai dari inisialisasi repository hingga melakukan push ke remote repository.

---

## Langkah-Langkah Praktikum

1. **Download git bash**
   sesuai perangkat yang digunakkan pada link https://git-scm.com/downloads

   <img width="1918" height="1078" alt="Image" src="https://github.com/user-attachments/assets/ba3a3a22-1cb0-4b80-b241-ea592591f1c8" />

2. **Mengecek git telah terdownload**
   bisa di cek jika git bash sudah terdownload dengan cara ketik "git --version" pada terminal

   <img width="737" height="91" alt="Image" src="https://github.com/user-attachments/assets/bd68cba5-f90c-4bb5-a754-e10acf967594" />

3. **Membuat Repository di Github**
   Untuk menaruh file yang akan di eksekusi dengan git contoh folder: P-PBW 
   <img width="1917" height="1078" alt="Image" src="https://github.com/user-attachments/assets/94ac1ce9-63ca-4e88-aacf-01453c92b84c" />

4. **Membuat folder untuk di commit ke    dalam repository**
   Membuat file "index.html" pada folder Pertemuan 1 dan "readme.md" pada folder Readme
   <img width="327" height="217" alt="Image" src="https://github.com/user-attachments/assets/2e14bcfc-03a5-40c5-9c9d-d69560f20bdb" />

5. **Inisialisasi Repository**
   dengan perintah "git init"
   <img width="747" height="92" alt="Image" src="https://github.com/user-attachments/assets/8e1353ec-af29-4c37-ae46-f7d6dbd6ba04" />
   
6. **Menambahkan Remote Repository**
   dengan perintah "git remote add origin + link reposit", agar repository lokal dapat terhubung dengan repository di GitHub   
   <img width="745" height="82" alt="Image" src="https://github.com/user-attachments/assets/71aecd4f-6b8f-4fe0-9100-8d1e71d472a2" />
   pada gambar error karena reposit tersebut sudah ter remote

7. **Menambahkan File ke Staging Area**
   dengan perintah "git add .", digunakan untuk menambahkan semua file ke staging area sebelum di-commit.
   <img width="736" height="70" alt="Image" src="https://github.com/user-attachments/assets/dc1496cb-7653-483d-b35c-7421830eb83e" />

8. **Membuat Commit**
   dengan perintah "git commit -m "Pesan commit"", untuk menyimpan perubahan yang ada di staging area ke dalam repository lokal.
   <img width="798" height="120" alt="Image" src="https://github.com/user-attachments/assets/74784f2a-3018-4ac8-a7d0-3baab212308a" />

9. **Mengirimkan Perubahan ke Remote Repository**
    dengan perintah "git push origin main", untuk mengirimkan commit dari repository lokal ke repository remote.
    <img width="791" height="218" alt="Image" src="https://github.com/user-attachments/assets/d03d147c-cbea-40dd-9c77-4b76229fb662" />