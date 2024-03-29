<h1 align="center">LAPORAN PROJEK AKHIR PENGEMBANGAN SISTEM BERORIENTASI OBJEK</h1>
<h2 align="center">APLIKASI IPB CAREER</h2>

<p align="center">
<img src="https://user-images.githubusercontent.com/60084504/121894160-02e80980-cd49-11eb-8f7d-a27fa118a6d5.png" width="200" height="200" />
 
<h4 align="center">Praktikum Paralel 2 | Kelompok 5 </h4>


## Deskripsi Aplikasi

IPB Career merupakan sebuah aplikasi yang berfungsi untuk membantu para mahasiswa maupun alumni IPB untuk mendapatkan kesempatan magang atau kerja secara full time. Aplikasi ini akan menginformasikan mengenai tempat magang maupun lowongan kerja bagi Civitas IPB yang memiliki minat sesuai dengan bidangnya. Civitas IPB juga bisa langsung apply internship atau full time job yang diinginkan sesuai keinginan masing masing dengan mengirimkan proposal sesuai syarat yang diberikan dan juga CV pribadi.

## User Analysis

Faishal adalah seorang mahasiswa tingkat akhir di Institut Pertanian Bogor, dia ingin melakukan kegiatan magang di bidang yang dia inginkan,tetapi dia tidak tahu mencari lowongan magang dimana,temannya mengusulkan menggunakan aplikasi pencarian pekerjaan yang dikhususkan untuk mahasiswa IPB yaitu IPB Career.

Alfian mempunyai perusahaan startup yang baru saja diresmikan,Alfian sudah menaruh lowongan diberbagai macam website atau aplikasi pencarian kerja, tetapi alfian ingin mempunyai karyawan fresh graduate karena ingin membantu mahasiswa mahasiswa yang baru saja lulus menambah pengalaman dalam dunia kerja. Alfian di beri tahu oleh kawan bahwa IPB memiliki sistem khusus untuk mahasiswa mereka dan perusahaan resmi apapun bisa mendaftarkan diri untuk menjadi partner IPB dalam memberikan wadah pekerjaan.

## Spesifikasi Teknis dan Pengembangan
### Software ###

#### Github ####
Github berguna untuk melakukan kolaborasi antar anggota agar memudahkan kita mengerjakan projek ini serta memudahkan kita menggabungkan pekerjaan antar anggota yang sudah di bagikan bagian pekerjaannya.

#### Figma ####
Figma berguna untuk melakukan brainstorming dalam pembuatan aplikasi,selain itu kami gunakan untuk melakukan design aplikasi tersebut.

#### Visual Studio Code ####
VSC kami gunakan untuk code writing yang nantinya akan kita implementasikan kedalam aplikasi

#### XAMPP ####
XAMPP kami gunakan untuk membuat server lokal yang kami gunakan untuk testing hasil implementasi 

#### Laravel ####
Laravel kami gunakan untuk framework kami,karena kami menggunakan php dalam pengembangan web ini jadi laravel adalah pilihan yang sesuai

### Hardware ###
* Processor   : I5 2500
* VGA         : NVIDIA 650 GTX
* RAM         : 8 GB
* PSU         : 700W
* Monitor     : Samsung 1366 x 768 60Hz
* OS          : Windows 10

### Technology Stack ###

#### Laravel ####
#### PHP
#### Blade
#### Shell


## Konsep OOP

### 1. Encapsulation
Encapsulation adalah membungkus class dan menjaga apa apa saja yang ada didalam class tersebut, baik method ataupun atribut, agar tidak dapat di akses oleh class lainnya. Untuk menjaga hal tersebut dalam Encapsulation dikenal nama Hak Akses Modifier yang terdiri dari : Public, Private, dan Protected.

```text
...
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $job = Job::all();
        $employer = Employer::where('id', Auth::guard('employer')->user()->id)->get();

        return view('User.dashboard', compact('job', 'employer'));
    }
...
```
### 2. Inheritance
Penggunaan inheritance dalam OOP adalah untuk mengklasifikasikan object dalam program sesuai karakteristik umum dan fungsinya yang membuat pekerjaan bersama object lebih mudah dan lebih intuitif.
```text
...
class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
...
```

## Tipe Design Pengembangan
Agile Software Development adalah metodologi pengembangan software yang didasarkan pada proses pengerjaan yang dilakukan berulang dimana, aturan dan solusi yang disepakati dilakukan dengan kolaborasi antar tiap tim secara terorganisir dan terstruktur.

Metode ini lebih fleksibel dan memberikan kami feedback akan banyak hal dalam proses perancangan aplikasi dari proses design hingga proses implementasi,selain itu dengan menggunakan metode ini kami lebih cepat dan tanggap dalam proses pengambilan keputusan berdasarkan kebutuhan aplikasi jika ada perubahan dalam proses perancangannya.

## Hasil dan Pembahasan
### Use Case Diagram ###
![PSBO CIHUY-Usecase diagram](https://user-images.githubusercontent.com/21000822/121848239-9f090680-cc9e-11eb-9aa9-419c7f2f105d.jpg)

### Activity Diagram ###
#### Activity Diagram Melihat Job dan Apply untuk User dan Post Job untuk Admin ####
![PSBO CIHUY-Activity Diagram Melihat dan Apply Job](https://user-images.githubusercontent.com/21000822/121853305-9ff16680-cca5-11eb-9eb8-462835478132.jpg)

### Class Diagram ###
![PSBO CIHUY-Class diagram](https://user-images.githubusercontent.com/21000822/121865704-1fd1fd80-ccb3-11eb-9ffa-b25d44fb8b09.jpg)

### Entity Relationship Diagram ###
![PSBO CIHUY-ERD](https://user-images.githubusercontent.com/21000822/121867857-3da06200-ccb5-11eb-8c0e-fcf46a7e1479.jpg)

### System Architecture ###
![PSBO CIHUY-Page-11](https://user-images.githubusercontent.com/21000822/121886800-b958d980-ccca-11eb-8629-19de5d043371.jpg)

Berawal dari database yang mengambil berbagai macam data dari user dapat berupa atribut utama seperti "Nama" , "Email" , "Alamat" dan atribut atribut lain yang merupakan bagian entitas dari user. User melakukan request terhadap server yang nantinya server akan merespon sesuai dengan request yang diingkan, tampilan yang di berikan dari server sudah data yang telah di ambil dari database,jika user ingin melihat job,maka seluruh job yang ada di database akan di tampilkan oleh system.

Admin memberikan apa yang dibutuhkan oleh user yaitu "Job" karena admin "Job" bisa di akses oleh semua user IPB Career dengan cara "Post Job" yaitu mendaftarkan job mereka di dalam "Job List" untuk diakses oleh para user yang nantinya akan melakukan "Apply job". Admin juga dapat menghilangkan job yang sudah ia daftarkan karena alasan tertentu yang nantinya langsung terhapus jika admin berkehendak seperti itu,setelah terhapus maka tidak akan ditampilkan untuk user.

### Fitur Utama yang Dikembangkan ###
![image](https://user-images.githubusercontent.com/60084504/120892494-ce819880-c638-11eb-8e7e-d5de72560cf6.png)
![image](https://user-images.githubusercontent.com/60084504/120892509-e78a4980-c638-11eb-9513-5ed3702115ed.png)

Fitur utama yang kami kembangkan adalah fitur "Apply Job" dimana user dapat mendaftarkan diri ke berbagai "Job" atau "Internship" dengan mengupload CV dan Resume yang sudah user siapkan untuk melakukan pendaftaran. Selain itu user juga melakukan pencarian terhadap job yang mereka inginkan secara spesifik, dengan cara menuliskan job impian mereka di kotak "Search" dan dengan sekali klik maka hasil pencarian akan memunculkan job yang user inginkan.

## Design

Home
![image](https://user-images.githubusercontent.com/60084504/120892445-8bbfc080-c638-11eb-97db-58bdbed5e34f.png)
Log in page
![Log in page (1)](https://user-images.githubusercontent.com/21000822/122156972-e61e0580-ce1e-11eb-9211-7008b233276a.png)
Sign up page
![Sign up page (1)](https://user-images.githubusercontent.com/21000822/122156978-e8805f80-ce1e-11eb-820b-5d7e86375e69.png)
Categories
![Cateogries](https://user-images.githubusercontent.com/21000822/122169060-d956dd00-ce31-11eb-8dc1-313c57983347.png)
Job Preferences
![image](https://user-images.githubusercontent.com/60084504/120892480-c0337c80-c638-11eb-87f4-46aba4e65270.png)
Search home page
![Search home page (1)](https://user-images.githubusercontent.com/21000822/122157202-490f9c80-ce1f-11eb-9c41-58a383c761cf.png)
Favorites
![Favorites](https://user-images.githubusercontent.com/21000822/122169216-00151380-ce32-11eb-8015-6b9b887333ad.png)
Job page
![Job page (1)](https://user-images.githubusercontent.com/21000822/122157115-241b2980-ce1f-11eb-83c3-f122a4d3a36a.png)
Profile page
![Profile page](https://user-images.githubusercontent.com/21000822/122154327-9852ce80-ce19-11eb-8636-a6b6c8c7b770.jpg)


## Hasil Implementasi
Home
![home](https://user-images.githubusercontent.com/60084504/122162766-456f2a80-ce9e-11eb-923d-c4bf3d003b34.jpg)
Login
![login](https://user-images.githubusercontent.com/60084504/122162798-4f912900-ce9e-11eb-8896-91e94ed3d8a8.jpg)
Sign Up
![sign up](https://user-images.githubusercontent.com/60084504/122162801-53bd4680-ce9e-11eb-907c-3845d029b58d.jpg)
Dashboard
![job desc2 profile overlay](https://user-images.githubusercontent.com/60084504/122162864-73546f00-ce9e-11eb-808f-a87301a92b6e.jpg)
Job Description
![job desc](https://user-images.githubusercontent.com/60084504/122162867-74859c00-ce9e-11eb-9d4f-16e64db1a665.jpg)
Job Page
![userjobpage](https://user-images.githubusercontent.com/60084504/122162949-9bdc6900-ce9e-11eb-900f-81f869ad8dd1.jpg)
Post Job
![postjob2](https://user-images.githubusercontent.com/60084504/122162890-80715e00-ce9e-11eb-98a9-bfc2809511d5.jpg)
![postjob](https://user-images.githubusercontent.com/60084504/122162896-823b2180-ce9e-11eb-9216-ce0c5a44c4e6.jpg)
Viem Apply 
![viewaplly](https://user-images.githubusercontent.com/60084504/122162922-8e26e380-ce9e-11eb-9017-ddffa638b7f7.jpg)

 ## Saran
* Untuk pengembangan selanjutnya, lebih baik sistem ini menarik IP dari beberapa situs pencarian kerja agar opsi pekerjaan lebih banyak lagi.
* Untuk pengembangan selanjutnya,karena ini website dikhususkan untuk mahasiswa IPB dan Alumni IPB mungkin menggunakan API dari IPB untuk melakukan login jadi tidak perlu melakukan sign up terlebih dahulu,dan untuk alumnus bisa dibukakan akunnya hanya untuk menggunakan website ini bukan website khusus lainnya.
* Untuk pengembangan selanjutnya, selain fitur utama bisa dikembangkan untuk melengkapi kinerja website 

## Anggota Kelompok 5
|Nama|NIM|Job Desc|
|----|---|--------|
|Alfian Arief Santoso | G64180061 | Frontend Developer| 
|Muhammad Faishal Mumtaz | G64180093 | Backend Developer| 
|Ramadhan Wiradikusuma | G64180096 | Project Manager|
|Ananda Alfarishi Anwar | G64180097 | UI/UX Designer| 
