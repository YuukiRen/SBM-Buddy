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
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. Siswa Login
    2. Siswa memilih jenis soal yang ingin dikerjakan (Latihan/Try Out)
    3. Siswa mengerjakan soal
    4. Siswa Submit Soal
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
    1E. Siswa gagal login
- **Post-Condition :** Siswa dapat mengakses pembahasan soal, grafik perkembangan dan rekomendasi prodi

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
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. Siswa selesai mengerjakan soal
    2. Pembahasan soal ditampilkan
 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
    2E . Pembahasan belum tersedia
- **Post-Condition :** -

## UC3 : Melihat grafik perkembangan
- **Importance Level :** Middle
- **Use Case Type :** Essential, System
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Melihat grafik 
- **Brief Description :** Di dalam use case ini dijelaskan bagaimana siswa dapat melihat grafik perkembangan nilai
- **Pre-Condition :** Siswa harus menyelesaikan minimal 1 set soal
- **Trigger :** Siswa mengakses laman perkembangan
    **Type :** External
- **Relationship :**
    - Association : -
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. Siswa membuka profil
    2. Siswa melihat grafik perkembangan nilai Try Out 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :** -   
- **Post-Condition :** -

## UC4 : Melihat grafik intensitas pengerjaan soal
- **Importance Level :** Middle
- **Use Case Type :** Essential, System
- **Primary Actor :** Siswa
- **Stakeholder and Interest :** 
    - Siswa : Melihat grafik
- **Brief Description :**  Di dalam use case ini dijelaskan bagaimana siswa dapat melihat grafik  intensitas pengerjaan soal dalam satuan waktu.
- **Pre-Condition :** Siswa harus menyelesaikan minimal 1 set soal
- **Trigger :** Siswa ingin melihat sebanyak apa soal yang telah dikerjakan
    **Type :** External
- **Relationship :**
    - Association : -
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. Siswa membuka profil
    2. Siswa melihat grafik grafik  intensitas pengerjaan soal dalam satuan waktu

- **Sub Flows :** -
- **Alternate/Exceptional Flows :** -
- **Post-Condition :** -

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

## UC :
- **Importance Level :** 
- **Use Case Type :** 
- **Primary Actor :**
- **Stakeholder and Interest :** 
    - Siswa : 
    - Admin : 
- **Brief Description :** 
- **Pre-Condition :**
- **Trigger :** 
    **Type :** 
- **Relationship :**
    - Association : 
    - Include : -
    - Extend : -
    - Generalization : - 
- **Normal Flow of Events :**
    1. 
    2. 
    3.
    4. 
- **Sub Flows :** -
- **Alternate/Exceptional Flows :**
   
- **Post-Condition :** 

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