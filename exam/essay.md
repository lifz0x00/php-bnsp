# SOAL 1

Pertanyaan:

## Soal KUK 1.1, 1.2, 1.3, 1.4
Berikut ini elemen data pelanggan yang perlu direkam:
* Nama: parameter.
* Jenis Kelamin:
* NIK:
* Tempat Lahir:
* Tgl Lahir:
Pertanyaan:
Untuk membuat desain user interface, tipe input apa saja yang cocok untuk entry datanya?

## Jawaban Soal KUK 1.1, 1.2, 1.3, 1.4
- Nama, menggunanakan type `text` karena berisi teks. contoh: Mochammad Alif Kurniawan
- Jenis Kelamin, menggunakan type `radio` atau radio button sebagai inputnya dikarenakan user hanya boleh memilih salah satu data.
- NIK, sebenernya bisa menggunakan salah satu dari kedua type yaitu `text` dan `number` tetapi demi menjaga keteraturan input pengguna lebih baik menggunaknan input berbasis number karena NIK hanya sekumpulan angka
- Tempat Lahir, menggunakan type `text` karena tempat merupakan kumpulan teks. contoh: Jakarta
- Tgl Lahir, menggunakan type `date` karena type tersebut sudah mendenfinisikan pemilihan tanggal dan nilai yang dihasilkan meliputi tahun, bulan dan hari

## Soal KUK (2.1, 2.2)  
Untuk membuat menu aplikasi, input apa saja yang perlu saudara ketahui?

## Jawaban Soal KUK (2.1, 2.2)
Soal KUK 1.1, 1.2, 1.3, 1.4
Input yang saya ketahui sejauh ini dalam pembuatan aplikasi dan umum digunakan adalah:
- <input type="text"/> digunakan untuk memasukan nama lengkap
- <input type="password"/> digunakan untuk inputan terdahap password
- <input type="email"/> digunakan untuk inputan terhadap email, agar pengguna 
- <input type="date"/> digunakan untuk memasukan tanggal lahir umumnya
- <input type="number"/> digunakan untuk memasukan inputan yang hanya berupa angka saja
- <input type="textarea"/> umumnya digunakan untuk memasukan alamat
- <input type="radio"/> digunakan untuk kondisi dimana user hanya boleh memilih salah satu saja. contohnya dalam pemilihan jenis kelamin
- <input type="checkbox"/> digunakan untuk kondisi dimana user boleh memilih lebih dari satu pilihan. contohnya ketika ingin memilih hobi
- <input type="file"/> umumnya digunakan untuk memasukan berkas contohnya .pdf

# SOAL  2
Pertanyaan:

## Soal KUK (1.2, 1.3)
Untuk mengeksekusi source code , tools apa saja yang bisa digunakan dengan asumsi program yang saudara gunakan menggunakan PHP?

Bagaimana cara memanggilnya dengan menggunakan pameter ?

## Jawaban Soal KUK (1.2, 1.3)

Dalam mengekekusi source code php umumnya menggunakan apache web server, yang sudah built-in ketika melakukan instalasi XAMPP. tools untuk menulis kode menggunakan php yang populer dapat mencoba sublime text, atom atau vscode. php adalah bahasa interpreted berbasis web dan membutuhkan browser sebagai penerjemahnya, maka chrome ataupun web browser lainnnya harus digunakan untuk keperluan pengembangan kode berbasis php


cara memulai menulis kode php adalah dengan php diawali dengan tag <?php dan diakhiri dengan ?>. banyak cara untuk menampilkan output menggunakan php, bisa menggunakan fungsi echo, print, printf, sprintf atau print_r

contoh code hello world menggunakan php

<?php
	echo "Hello, World!";
?>

## Soal KUK (2.1, 2.2) 
Apa perbedaan running, debugging dan membuat executable file

## Jawaban KUK (2.1, 2.2) 
- running: adalah proses program yang sedang berjalan
- debuging: adalah proses mencari kesalahan atau bug pada kode program
- executable file: adalah file hasil kompilasi dari source code kebinary file, biasanya file hasil exe tersebut berasal dari bahasa yang menggunakan compiler atau compiled language yang menghasilkan binary untuk diekseksui yang biasa disebut executable file. 

## Soal KUK (3.1, 3.2)
Jika terdapat kegagalan dalam eksekusi source code, langkah apa yang saudara lakukan:

## Jawaban Soal KUK (3.1, 3.2)
langkah yang dilakukan adalah melakukan debugging, membaca pesan error, mencari letak error kode program terlebih dahulu kemudian memperbaikinya

# SOAL 3

Pertanyaan:

## Soal KUK (1.1, 1.2, 1.3)

Perhatikan source code berikut ini:
// membuat fungsi
function kenalan($nama, $kota){
	echo "Perkenalkan, nama saya ".$nama."";
	echo "Asal Kota ".$kota."";
}

Pertanyaan:
Perintah apa yang diberikan, agar menghasilkan tampilan berikut ini:

Perkenalkan, nama saya Mukidi
Asal Kota Malang

## Jawaban KUK (1.1, 1.2, 1.3)
kenalan("Mukidi<br>","Malang");

## Soal KUK (2.2) 
sebutkan file di PHP yg mengatur penggunaan resources?
file php yang mengatur penggunaan resources atau sumber daya adalah .htaccess sedangkan file yang mengatur konfigurasi yang dapat mengontrol apa yang dilakukan oleh pengguna dan apa yang tidak boleh dilakukan oleh pengguna adalah php.ini

Berikan contoh parameter pengaturan memori

Melalui .htaccess:
php_value memory_limit 128M

Melalui script.php
ini_set('memory_limit','128M');

# SOAL 4
Pertanyaan:

## Soal KUK (1.1) 
apa yang dimaksud dengan coding guidelines? 

Coding Guidelines adalah acuan bagi para developer untuk membuat kode program yang lebih mudah dibaca dan juga dipelihara. Tujuan dari adanya Coding Guidelines ini adalah :
- Menyeragamkan kode program yang dibuat oleh developer yang berbeda-beda
- Mempermudah pemahaman isi kode program dan mengurangi kompleksitas program.
- Membantu kode program untuk bisa digunakan kembali (reuse)
- Mempermudah mendeteksi kesalahan atau error

# SOAL 5
Pertanyaan:
1. Apa perbedaan fungsi struktur pencabangan dan pengulangan ? 
1. Percabangan adalah suatu keadaan dimana salah satu dari 2 atau lebih pernyataan dapat di eksekusi apabila salah satu dari 2 atau lebih kondisi memenuhi syarat untuk mengerjakan pernyataan tersebut. sedangkan perulangan adalah suatu keadaan dimana satu pernyataan dapat di eksekusi secara berulang-ulang selama kondisi masih memenuhi persyaratan. Jika kondisi tersebut sudah tidak memenuhi persyaratan, maka pernyataan akan tidak akan di eksekusi dan akan dilewati ke stetment selanjutnya.

2. Apa perbedaan prosedur dan fungsi? Fungsi sama seperti halnya dengan prosedur, namun tetap ada 
2. Perbedaannya yaitu fungsi mempunyai output dengan tipe variabel yang kita tentukan. Berbeda dengan procedure yang bisa tidak menggunakan parameter, fungsi harus menggunakan parameter dalam penggunaannya. fungsi mengembalikan nilai sedangkan procedure tidak mengembalikan nilai

3. Sebutkan jenis array yang saudara pahami? jelaskan
3. Array dimulai dari index 0, nilai array selalu fix ketika dideklarasikan. Array menampung element bertipe data sama dan nilainya boleh berbeda-beda. Array umumnya memiliki beberapa dimensi, tapi secara sederhana array memiliki 2 pandangan dimensi yaitu array 1 dimensi dan array multi dimensi. Array satu dimensi hanya memiliki 1baris/kolom sedangkan array multidimensi minimal 2 dimensi memiliki 1kolom dan 1baris.


# SOAL 6
Pertanyaan:
1. Sebutkan contoh 2 Library pre-eksisting (yang sudah melekat) dalam PHP

# Jawaban SOAL 6
* FPDF untuk menghasilkan file pdf menggunakan php
* Faker adalah pustaka PHP praktis yang memungkinkan pengembang menghasilkan konten dummy untuk aplikasi web. 