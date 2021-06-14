# LAPORAN PROJEK AKHIR PENGEMBANGAN SISTEM BERORIENTASI OBJEK


KELOMPOK 5

Alfian Arief Santoso - G64180061 - Frontend Developer

Muhammad Faishal Mumtaz - G64180093 - Backend Developer

Ramadhan Wiradikusuma - G64180096 - Project Manager

Ananda Alfarishi Anwar - G64180097 - UI/UX Designer

## IPB CAREER

IPB Career merupakan sebuah aplikasi yang berfungsi untuk membantu para mahasiswa maupun alumni IPB untuk mendapatkan kesempatan magang atau kerja secara full time. Aplikasi ini akan menginformasikan mengenai tempat magang maupun lowongan kerja bagi Civitas IPB yang memiliki minat sesuai dengan bidangnya. Civitas IPB juga bisa langsung apply internship atau full time job yang diinginkan sesuai keinginan masing masing dengan mengirimkan proposal sesuai syarat yang diberikan dan juga CV pribadi.

## User Analysis
Faishal adalah seorang mahasiswa tingkat akhir di Institut Pertanian Bogor, dia ingin melakukan kegiatan magang di bidang yang dia inginkan,tetapi dia tidak tahu mencari lowongan magang dimana,temannya mengusulkan menggunakan aplikasi pencarian pekerjaan yang dikhususkan untuk mahasiswa IPB yaitu IPB Career.

## Spesifikasi Teknis dan Pengembangan
### Software ###

#### Github ####
Github berguna untuk melakukan kolaborasi antar anggota agar memudahkan kita mengerjakan projek ini serta memudahkan kita menggabungkan pekerjaan antar anggota yang sudah di bagikan bagian pekerjaannya.

#### Figma ####
Figma berguna untuk melakukan brainstorming dalam pembuatan aplikasi,selain itu kami gunakan untuk melakukan design aplikasi tersebut.

#### Visual Studio Code ####
VSC kami gunakan untuk code writing yang nantinya akan kita implementasikan kedalam aplikasi

#### XAMPP ####

#### Laravel ####

### Hardware ###

### Tech Stack ###

## Konsep OOP

### 1. Encapsulation
Encapsulation adalah membungkus class dan menjaga apa apa saja yang ada didalam class tersebut, baik method ataupun atribut, agar tidak dapat di akses oleh class lainnya. Untuk menjaga hal tersebut dalam Encapsulation dikenal nama Hak Akses Modifier yang terdiri dari : Public, Private, dan Protected.

```text
...
class DashboardController extends Controller
{
    public function index() {
        $total_buku = \App\Buku::all()->count();
        $total_kunjungan = \App\KunjunganMasyarakat::all()->count();

        return view('dashboard', compact('total_buku', 'total_kunjungan'));
    }
}
...
```
### 2. Inheritance
Penggunaan inheritance dalam OOP adalah untuk mengklasifikasikan object dalam program sesuai karakteristik umum dan fungsinya yang membuat pekerjaan bersama object lebih mudah dan lebih intuitif.
```text
...
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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
#### Activity Diagram Melihat Job dan Post Job untuk Admin ####
![PSBO CIHUY-Activity Diagram Melihat dan Apply Job](https://user-images.githubusercontent.com/21000822/121853305-9ff16680-cca5-11eb-9eb8-462835478132.jpg)

## Desain 

Home
![image](https://user-images.githubusercontent.com/60084504/120892445-8bbfc080-c638-11eb-97db-58bdbed5e34f.png)
Log in page
![image](https://user-images.githubusercontent.com/60084504/120892469-ac881600-c638-11eb-8eea-9beefe3234df.png)
Sign up page
![image](https://user-images.githubusercontent.com/60084504/120892472-b14cca00-c638-11eb-850d-61b41bf5cd67.png)
Categories
![image](https://user-images.githubusercontent.com/60084504/120892475-b873d800-c638-11eb-8ed2-b7e90b5e3a52.png)
Job Preferences
![image](https://user-images.githubusercontent.com/60084504/120892480-c0337c80-c638-11eb-87f4-46aba4e65270.png)
Add job preferences
![image](https://user-images.githubusercontent.com/60084504/120892490-c6295d80-c638-11eb-8c7a-58db5330c52c.png)
Search home page
![image](https://user-images.githubusercontent.com/60084504/120892494-ce819880-c638-11eb-8e7e-d5de72560cf6.png)
Favorites
![image](https://user-images.githubusercontent.com/60084504/120892499-d6d9d380-c638-11eb-82b8-8a89593ffce3.png)
Job page
![image](https://user-images.githubusercontent.com/60084504/120892509-e78a4980-c638-11eb-9513-5ed3702115ed.png)
Profile page
![image](https://user-images.githubusercontent.com/60084504/120892618-739c7100-c639-11eb-88fc-d21be6150684.png)
Edit Profile Page
![image](https://user-images.githubusercontent.com/60084504/120892631-7eef9c80-c639-11eb-85fa-593dcc4d295b.png)


