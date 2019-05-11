<h1 align="center"><img src="documentations/logo.png"></h1>

[Tentang Aplikasi](#tentang-aplikasi) | [Use Case Diagram](#use-case-diagram) | [Activity Diagram](#activity-diagram) | [Class Diagram](#class-diagram) | [Sequence Diagram](#sequence-diagram)
:---:|:---:|:---:|:---:|:---:



# Tentang Aplikasi
[`^ kembali ke atas ^`](#)

**SBM-Buddy** adalah aplikasi pembelajaran berbasis *web* untuk membantu siswa-siswi kelas 3 SMA dalam menghadapi ujian SBMPTN. **SBM-Buddy** menyediakan soal-soal SBMPTN serta memprediksi nilai *Passing Grade*, dan perkembangan *Passing Grade* siswa tiap waktu. **SBM-Buddy** juga menyediakan *list* *Passing Grade* beberapa program studi di universitas-universitas yang ada di Indonesia.

# Use Case Diagram
[`^ kembali ke atas ^`](#)
<h1 align="center"><img src="documentations/use case diagram.png"></h1>

## UC1 : Mengerjakan Soal
- **Importance Level :** High
- **Use Case Type :** Essential
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Mengerjakan soalnya
    - Admin : Membuat soal, menentukan penilaian
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana siswa mengerjakan soal
- **Pre-Condition :** Siswa harus register/login 
- **Trigger :** Siswa memilih soal yang ingin dikerjakan
    **Type :** External
- **Relationship :**
    - Association : Admin
- **Normal Flow of Events :**
    1. Siswa Login
    2. Siswa memilih jenis soal yang ingin dikerjakan (Latihan/Try Out)
    3. Siswa mengerjakan soal
    4. Siswa Submit Soal
- **Alternate/Exceptional Flows :**
    1E. Siswa gagal login
- **Post-Condition :** Siswa dapat mengakses pembahasan soal dan grafik perkembangan

## UC2 : Melihat Pembahasan Soal
- **Importance Level :** High
- **Use Case Type :** Essential
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Melihat Pembahasan Soal
    - Admin : Menambahkan Pembahasan Soal
- **Brief Description :**  Di dalam use case ini dijelaskan bagaimana siswa dapat mengakses pembahasan soal
- **Pre-Condition :** Siswa mengerjakan soal tersebut
- **Trigger :** Siswa selesai mengerjakan soal
    **Type :** External
- **Relationship :**
    - Association : Admin
    - Include : Mengerjakan Soal
- **Normal Flow of Events :**
    1. Siswa selesai mengerjakan soal
    2. Pembahasan soal ditampilkan
- **Alternate/Exceptional Flows :**
    2E . Pembahasan belum tersedia


## UC3 : Melihat grafik perkembangan
- **Importance Level :** Medium
- **Use Case Type :** Essential, System
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Melihat grafik 
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana siswa dapat melihat grafik perkembangan nilai
- **Pre-Condition :** Siswa harus menyelesaikan minimal 1 set soal
- **Trigger :** Siswa mengakses laman perkembangan
    **Type :** External
- **Normal Flow of Events :**
    1. Siswa membuka profil
    2. Siswa melihat grafik perkembangan nilai Try Out 

## UC4 : Melihat grafik intensitas pengerjaan soal
- **Importance Level :** Medium
- **Use Case Type :** Essential, System
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Melihat grafik
- **Brief Description :**  Di dalam use case ini dijelaskan bagaimana siswa dapat melihat grafik  intensitas pengerjaan soal dalam satuan waktu.
- **Pre-Condition :** Siswa harus menyelesaikan minimal 1 set soal
- **Trigger :** Siswa ingin melihat sebanyak apa soal yang telah dikerjakan
    **Type :** External
- **Normal Flow of Events :**
    1. Siswa membuka profil
    2. Siswa melihat grafik grafik  intensitas pengerjaan soal dalam satuan waktu

## UC5 : Melihat passing grade program studi
- **Importance Level :** Medium
- **Use Case Type :** System, Essential
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Melihat passing grade
    - Admin : Menambah/mengubah passsing grade
- **Brief Description :**  Di dalam use case ini dijelaskan bagaimana siswa melihat passing grade program studi
- **Trigger :** Siswa ingin melihat universitas / prodi yang direkomendasikan
    **Type :** External
- **Relationship :**
    - Association : Admin
- **Normal Flow of Events :**
    1. Siswa membuka profil
    2. Siswa melihat bagian passing grade

## UC6 : Membuat Soal dan Pembahasan
- **Importance Level :** High
- **Use Case Type :** Essential
- **Primary Actor :** Admin
- **Stakeholder and Interest :** 
    - Admin : Membuat paket soal baru
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana admin soal dapat membuat soal dan pembahasannya
- **Pre-Condition :** User harus merupakan seorang admin
- **Trigger :** Admin membuka laman penambahan soal
    **Type :** External
- **Normal Flow of Events :**
    1. Admin login
    2. Admin menambah paket soal baru
    3. Admin memasukkan setiap butir soal
    4. Admin memasukkan jawaban soal tersebut
    5. Admin memasukkan pembahasan tiap soal
    6. Admin menyimpan soal tersebut

## UC7 : Merubah soal dan pembahasan
- **Importance Level :** Low
- **Use Case Type :** Essential
- **Primary Actor :** Admin
- **Stakeholder and Interest :** 
    - Admin : Ingin merubah soal dan pembahasan dari mata pelajaran yang diujikan.
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana Admin merubah soal dan pembahasan dari mata pelajaran yang diujikan.
- **Pre-Condition :** User harus merupakan seorang admin
- **Trigger :** Terdapat kesalahan saat menginput soal 
    **Type :** Eksternal
- **Normal Flow of Events :**
    1. Admin membuka list soal ujian.
    2. Admin merubah soal dan pembahasan dari ujian yang dipilih.

## UC8 : Menghapus soal dan pembahasan
- **Importance Level :** Low
- **Use Case Type :** Essential
- **Primary Actor :** Admin
- **Stakeholder and Interest :** 
    - Admin : Menghapus paket soal
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana Admin dapat menghapus paket soal atau pembahasan 
- **Pre-Condition :** -
- **Trigger :** Soal sudah tidak relevan lagi
    **Type :** External
- **Normal Flow of Events :**
    1. Admin membuka paket-paket soal
    2. Admin memilih paket soal yang akan dihapus
    3. Admin menghapus soal tersebut
    4. Admin melakukan konfirmasi penghapusan

## UC9 : Merubah passing grade program studi
- **Importance Level :** Medium
- **Use Case Type :** Essential
- **Primary Actor :** Admin
- **Stakeholder and Interest :** 
    - Admin : Ingin memperbarui passing grade program studi di sebuah universitas.
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana Admin merubah passing grade program studi di sebuah universitas.
- **Pre-Condition :** User harus merupakan seorang admin
- **Trigger :** Perubahan nilai passing grade dari program studi per tahun.
    **Type :** Temporal
- **Normal Flow of Events :**
    1. Admin membuka list universitas.
    2. Admin memilih program studi.
    3. Admin merubah passing grade program studi. 


## UC10 :Menambah program studi
- **Importance Level :** Medium
- **Use Case Type :** Essential, System
- **Primary Actor :** Admin
- **Stakeholder and Interest :** 
    - Admin : Ingin menambah program studi di sebuah universitas.
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana Admin menambah program studi di sebuah universitas.
- **Pre-Condition :** User harus merupakan seorang admin
- **Trigger :** Universitas membuka program studi baru.
    **Type :** External
- **Normal Flow of Events :**
    1. Admin membuka list universitas.
    2. Admin menambah program studi.


## UC11 : Menghapus program studi
- **Importance Level :** Low
- **Use Case Type :** Essential, System
- **Primary Actor :** Admin
- **Stakeholder and Interest :** 
    - Admin : Ingin menghapus program studi di sebuah universitas.
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana Admin menghapus program studi di sebuah universitas.
- **Pre-Condition :** User harus merupakan seorang admin
- **Trigger :** Universitas menutup program studi yang ada karena alasan tertentu.
    **Type :** External
- **Normal Flow of Events :**
    1. Admin membuka list universitas.
    2. Admin menghapus program studi


# Activity Diagram
[`^ kembali ke atas ^`](#)
<h1 align="center"><img src="documentations/ad1.png"></h1>
<h1 align="center"><img src="documentations/ad2.png"></h1>
<h1 align="center"><img src="documentations/ad3.png"></h1>
<h1 align="center"><img src="documentations/ad4.png"></h1>
<h1 align="center"><img src="documentations/ad5.png"></h1>
<h1 align="center"><img src="documentations/ad6.png"></h1>

# Class Diagram
[`^ kembali ke atas ^`](#)

# Sequence Diagram
[`^ kembali ke atas ^`](#)
