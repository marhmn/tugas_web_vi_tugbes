<html>
<head>
  <meta name="viewport" content="width=device-width, intial-scale=1">
  <link rel="stylesheet" href="css/demo-style.css" />
  <script src="js/modernizr-1.5.min.js"></script>
  <link rel="stylesheet" href="css/icon-style.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/parallax.css">

</head>
<section id="home">
<body style="background-image:url(image/materi.png)">
  <nav id="navbar" class="navbar navbar-lg bg-default">
     <div class="icon-bar">
       <a href="index.html"><i class="fa fa-home"></i>home</a>
       <a href="#artikel"><i></i>artikel</a>
       <a href="model/Form_Akun.php"><i></i>login</a>
         <div class="form-inline my-2 my-lg-0">
            <?php
            
             ?>
         </div>
     </div>
 </nav>
</section>
 <div class="parallax">
       <div class="container" style="text-align: center;padding-top: 160px">
           <img src="image/logo.png" class="img-responsive" style="display: initial;" style="padding-top: 100px">
       </div>
 </div>

 <div class="container">
   <h1 class="badge-dark" Align="center">Artikel</h1>

 </div>

<div class="demo-wrapper">
<!-------------------------Heading-------------------------->
<div class="r-page heading">
    <div class="page-content">
      <h2 class="page-title">Heading</h2>
	<br>Heading adalah sebuah tag/code HTML untuk memperbesar sebuah tulisan.
	<br>Biasanya heading tag digunakan dalam membuat judul sebuah document atau artikel
	<br>Heading tag sendiri memiliki 6 tingkatan yang dimulai dari 1 sampai 6.
	<br>Heading 1 atau h1 merupakan tingkatan paling besar, sementara heading 6 atau h6 merupakan tingkatan paling kecil.
	<br><br>Sebagai contoh:
	<br>
	<img src="materi/heading/heading1.png" width="30%">
	<br><br>
	Contoh di atas akan menghasilkan tampilan seperti berikut :
	<br><br>
	<img src="materi/heading/heading1.1.png" width="30%" heigth="40%">
	<br><br>
	Berikut atribut dari tag heading :
	<br><br>
	<font size="6"><b>Align</b></font>
	<br>Align adalah atrinbut dari tag headig yang fungsinya mengatur letak horizontal pada layar.
	<br><br>Contoh :
	<br>
	<img src="materi/heading/heading1.2.png">
	</div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Link----------------------------->
<div class="r-page link">
    <div class="page-content">
      <h2 class="page-title">Link</h2>
    <br>Hyperlink atau biasa disebut link adalah sebuah kata, beberapa kata, atau gambar yang bila diklik akan melompat pada halaman baru atau dokumen baru.
	<br>Saat kursor atau mouse melintas diatas link pada suatu web,maka bentuk tanda panah mouse akan berubah menjadi sebuah bentuk tangan kecil yang sedang menunjuk.
	<br>untuk membuat link kita dapat menggunakan tag < a> dan ditutup dengan < /a>
	<br><br>Berikut atribut dari tag a :
	<br><br>
	<font size="6"><b>href</b></font>
	<br>href adalah salah satu atribut yang di tambahkan kedalam tag a dimana value dari href ini adalah url
	<br><br>Sebagai contoh :
	<br><img src="materi/a/a.png" width="50%" height="5%">
	<br><br>
	<font size="6"><b>title</b></font>
	<br>fungsi dari atribut title ini adalah untuk memberikan judul pada link yang kita buat tadi ketika pointer digeser ke arah link tersebut.
	<br>value/nilai title ini bisa ditulis apa saja, terserah dan disarankan penulisan valuenya sama dengan isi link tersebut
    <br><br>Sebagai contoh :
	<br><img src="materi/a/a1.png">
	<br>hasil dari script tersebut akan muncul seperti ini:
	<br><br><img src="materi/a/a2.png">
	<br><br>
	<font size="6"><b>target</b></font>
	<br> Fungsi atribut ini yaitu untuk membuat link, yang apabila di klik akan terbuka di tab baru,
	<br>namun kita juga bisa menyesuaikan value dari atribut ini, value dari atribut ini antara lain
		_blank, _self, _top
	<br><br>Contoh script :
	<br><img src="materi/a/a3.png">


	</div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Select--------------------------->
<div class="r-page select">
    <div class="page-content">
      <h2 class="page-title">Select</h2>
      Select adalah tag html yang digunakan untuk menampilkan daftar pilihan dalam bentuk drop down (jatuh kebawah).
  <br>Penggunaannya harus bersamaan dengan penggunaan tag option dimana option adalah tag yang digunakan
  <br>untuk menampilkan pilihan-pilihan yang terdapat dalam daftar pilihan yang ditampilkan oleh tag select.
  <br><br>Sebagai contoh:
  <br>
  <img src="materi/select/select1.png" width="50%" height="30%">
  <br><br>
  Contoh di atas akan menghasilkan tampilan seperti berikut :
  <br><br>
  <img src="materi/select/select1.1.png" width="25%" height="30%">
  <br><br>
  Berikut atribut dari tag select :
  <br><br>
  <font size="6"><b>Name</b></font>
  <br>name adalah atribut dari tag select yang berguna untuk menjadikan pengenal
  <br>dari tag select ketika inputan data yang diberikan oleh pengguna diproses pada kode program pemroses.
  <br><br>
  <font size="6"><b>Multiple</b></font>
  <br>multiple adalah atribut yang digunakan untuk menampilkan lebih dari satu pilihan pada tampilan daftar pilihan.
  <br>Biasanya penggunaan atribut multiple selalu diikuti dengan penggunaan atribut size, yang berguna untuk menentukan
  <br>berapa banyak pilihan yang dapat ditampilkan secara sekaligus.
  <br><br>Contoh :
  <br><img src="materi/select/select2.png" width="50%" height="30%">
  <br><br>
  Contoh di atas akan menghasilkan tampilan seperti berikut :
  <br><br>
  <img src="materi/select/select2.1.png" width="25%" height="30%">
  <br><br>
  <font size="6"><b>Size</b></font>
  <br>size adalah atribut dari tag select yang digunakan untuk menampilkan jumlah
  <br>pilihan pada daftar pilihan lebih dari satu. Tanpa penggunaan atribut ini,
  <br>maka secara otomatis pilihan yang ditampilkan pada daftar pilihan hanya satu.
  <br><br>Contoh :
  <br><img src="materi/select/select3.png" width="50%" height="30%">
  <br><br>
  Contoh di atas akan menghasilkan tampilan seperti berikut :
  <br><br>
  <img src="materi/select/select3.1.png" width="25%" height="30%">
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Form----------------------------->
<div class="r-page form">
    <div class="page-content">
      <h2 class="page-title">Form</h2>
	  dipakai untuk pembuatan form dalam file HTML.
	  <br><br><img src="materi/form/form1.png" width="45%" height="10%">
	  <br><br>
	  <font size="6"><b>Method</b></font>
	  <br><br>
	  fungsi method menentukan bagaimana data akan dikirim ke server.
	  <br>
	  get : data akan dikirim dengan menggunakan query string pada url. <br>
	  post : data akan dikirim ke server sebagai block datake script.<br><br>
	  <font size="6"><b>Action</b></font>
	  <br><br>
	  action = Menentukan lokasi dari script yang akan memproses data dari form
	  <br><br>Contoh Script :
	  <br><br>
	  <img src="materi/input/input2.png" width="40%" height="30%">
	  <br><br>Tampilan Script :
	  <br><br>
	  <img src="materi/input/input3.png" width="30%" height="30%">
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Paragraf------------------------->
<div class="r-page paragraf">
    <div class="page-content">
      <h2 class="page-title">Paragraf</h2>
    <br><br>Kegunaan tag paragraf yaitu untuk membuat suatu paragraf baru berupa teks atau gambar pada html
	<br>tag paragraf dapat ditulisakan sebagai < p> dan ditutup dengan menggunakan < /p>
	<br>
	<br><font size="6"><b>Align</b></font>
	<br>Fungsi align pada paragraf yaitu untuk mengatur posisi teks atau image pada paragraf tersebut.
	<br><br>Contoh script :
	<br><img src="materi/paragraf/paragraf.png">
	<br><br>
	Hasil dari script tersebut :
	<br><img src="materi/paragraf/paragraf1.png">
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Frame---------------------------->
<div class="r-page frame">
    <div class="page-content">
      <h2 class="page-title">Frame</h2>
      <br>Frame adalah suatu fasilitas dalam HTML yang berfungsi untuk membagi layar ke dalam beberapa jendela.
	  <br>Ada pun perintah-perintah untuk membuat frame dalam HTML yaitu FRAMESET, FRAME, IFRAME.
	  <br><br>
	  <font size="6"><b>FRAMESET</b></font>
	  <br><br>Frameset dalah perintah untuk membuat frame, dan umumnya berpasangan dengan perintah FRAME.
	  <br>Atribut untuk FRAMESET :
	  <br>1. ROWS=length (panjang baris dalam satuan pixel)
	  <br>2. COLS=length (panjang kolom dalam satuan pixel)
	  <br><br>
	  <font size="6"><b>FRAME</b></font>
	  <br>Perintah ini untuk memasukan gambar, halaman atau URL ke dalam jendela (frame), mengatur margin, menggulung frame dan lain-lain.
	  <br>FRAME terdiri dari beberapa atribut, antara lain :
	  <br>1. NAME=string (nama frame)
	  <br>2. SRC=URL (isi frame)
	  <br>3. LONGDESC=URL (uraian dari frame)
	  <br>4. FRAMEBORDER=[1 | 0] (border frame)
	  <br>5. MARGINWIDTH=pixels (batas kiri terhadap ini frame)
	  <br>6. MARGINHEIGHT=pixels (batas atas terhadap ini frame)
	  <br>7. NORESIZE
	  <br>8. SCROLLING=[yes | no | auto] (penggulung frame)
	</div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------List----------------------------->
<div class="r-page list">
    <div class="page-content">
      <h2 class="page-title">List</h2>
      List item di gunakan untuk mengelompokkan data baik berurutan
  <br>(ordered list) maupun yang tidak berurutan (unordered list).
  <br><br>
  Contoh : Kita ingin mengelompokan data-data berikut ini :
  <br>Java, Visual Basic, Html, MySQL
  <br><br>
  <font size="6"><b>Ordered List</b></font>
  <br><br>
  Untuk membuat list terurut nomor (ordered list), kita gunakan tag
  <br>pembuka dan penutup , sedangkan untuk mendata setiap itemnya
  <br>menggunakan tag sebagai pembuka dan sebagai penutup.ol kependekan
  <br>dari Ordered List, li kependekan dari List Item.
  <br><br>
  Contoh :
  <br><br>
  <img src="materi/list/list1.png" width="70%" height="30%">
  <br><br>
  Contoh di atas akan menghasilkan tampilan seperti berikut :
  <br><br>
  <img src="materi/list/list1.1.png" width="70%" height="30%">
  </b>
  <br><br>
  <b>Atribut type pada tag &lt;ol&gt; :</b>
  <br><br>
<table border="1" cellspacing="0" cellpadding="0">
 <tbody>
  <tr>
	<td valign="top" width="132"> <p><b>Type</b></p></td>
	<td valign="top" width="420"> <p><b>Arti</b></p></td>
  </tr>
  <tr>
	<td valign="top" width="132"> <p>I</p></td>
	<td valign="top" width="420"> <p>Angka ditampilkan dengan angka romawi huruf besar</p></td>
  </tr>
  <tr>
	<td valign="top" width="132"> <p>i</p></td>
	<td valign="top" width="420"> <p>Angka ditampilkan dengan angka romawi huruf kecil</p></td>
  </tr>
  <tr>
	<td valign="top" width="132"> <p>A</p></td>
	<td valign="top" width="420"> <p>Angka ditampilkan dengan abjad huruf besar</p></td>
  </tr>
  <tr>
	<td valign="top" width="132"> <p>a</p></td>
	<td valign="top" width="420"> <p>Angka ditampilkan dengan abjad huruf kecil</p></td>
  </tr>
 </tbody>
</table>
<font size="6"><b>Unordered List</b></font>
<br><br>
Untuk membuat list tidak terurut nomor (Unordered List), kita gunakan tag
<br>pembuka dan penutup , sedangkan untuk mendata setiap itemnya menggunakan
<br>tag sebagai pembuka dan sebagai penutup.ul kependekan dari Unordered List,
<br>li kependekan dari List Item.
<p>Contoh :
<br><br>
<img src="materi/list/list2.png" width="70%" height="30%">
<br><br>
Contoh di atas akan menghasilkan tampilan seperti berikut :
<br><br>
<img src="materi/list/list2.1.png" width="70%" height="30%">
<br><br>
<b>Atribut type pada tag &lt;ul&gt; :</b>
<table border="1" cellspacing="0" cellpadding="0">
<tbody>
	<tr>
		<td valign="top" width="132"> <p><b>Type</b></p></td>
		<td valign="top" width="420"> <p><b>Arti</b></p></td>
	</tr>
	<tr>
		<td valign="top" width="132"> <p>Circle</p></td>
		<td valign="top" width="420"> <p>Bullet Lingkaran</p></td>
	</tr>
	<tr>
		<td valign="top" width="132"> <p>Disc</p></td>
		<td valign="top" width="420"> <p>Bullet Titik</p></td>
	</tr>
	<tr>
	<td valign="top" width="132"> <p>Square</p></td>
	<td valign="top" width="420"> <p>Bullet Kotak</p></td>
	</tr>
</tbody>
</table>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Image---------------------------->
<div class="r-page image">
    <div class="page-content">
      <h2 class="page-title">Image</h2>
	  Image merupakan tag untuk menginputkan gambar ke dalam html.
	  <br>
	  <font size="6"><b>Search</b></font>
	  <br>fungsi search yaitu untuk mencari dan memanggil link gambar yg<br>
	  ada di komputer maupun di internet.
	  <br><br>Contoh Script :
	  <br>
	  <img src="materi/image/image1.png" width="40%" height="20%">
	  <br><br>Hasil Script :
	  <br>
	  <img src="materi/image/image2.png" width="50%" height="30%">
	  <br><br>
	  <font size="6"><b>Width</b></font>
	  <br>fungsi width pada image yaitu untuk mengatur lebar suatu gambar.
	  <br><br>Contoh Script :
	  <br>
	  <img src="materi/image/image3.png" width="40%" height="20%">
	  <br><br>Hasil Script :
	  <br>
	  <img src="materi/image/image4.png" width="50%" height="30%">
	  <br><br>
	  <font size="6"><b>Height</b></font>
	  <br>fungsi height pada image yaitu untuk mengatur tinggi suatu gambar.
	  <br><br>Contoh Script :
	  <br>
	  <img src="materi/image/image5.png" width="40%" height="20%">
	  <br><br>Hasil Script :
	  <br>
	  <img src="materi/image/image6.png" width="50%" height="30%">
	  <br><br>
	  <font size="6"><b>Alternate</b></font>
	  <br>fungsi alternate pada image yaitu untuk menampilkan Teks (pesan) <br>
	  jika gambar tidak ada atau tidak ditemukan.
	  <br><br>Contoh Script :
	  <br>
	  <img src="materi/image/image7.png" width="50%" height="20%">
	  <br><br>Hasil Script :
	  <br>
	  <img src="materi/image/image8.png" width="30%" height="40%">
	  <br><br>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Table---------------------------->
<div class="r-page table">
    <div class="page-content">
      <h2 class="page-title">Tabel</h2>
  <p>Tabel digunakan untuk menyajikan data dalam bentuk kolom dan baris. Umumnya setiap kolom
  <br>menunjukkan data yang sejenis, dan setiap baris yang terdiri atas kolom-kolom menunjukkan
  <br>kelompok data dalam satu kesatuan.
  <p>Sebuah tabel mempunyai judul, tempat anda menjelaskan kolom/baris yang dilibatkan, baris untuk
  <br>informasi dan sel untuk setiap itemnya.
  <p>Berikut adalah contoh script untuk membuat tabel dengan 2 baris dan 2 kolom :
  <p><img src="materi/table/tabel1.png">
  <br><br>
  Script di atas akan menghasilkan tampilan seperti berikut :
<p><img src="materi/table/tabel1.1.png">
<h3><b>Menggabungkan kolom pada tabel</b></h3>
<p>Table Cell atau baris dan kolom dari tabel tersebut dapat kita gabungkan sesuai
<br>kebutuhan bentuk tabel yang diinginkan.
<p>Untuk menggabungkan kolom dalam tabel digunakan atribut <b>colspan</b> :
<br><br>
<img src="materi/table/tabel2.png">
<p>Script di atas akan menghasilkan tampilan seperti berikut :
<p><img src="materi/table/tabel2.1.png">
<p>Sedangkan untuk menggabungkan baris dalam tabel digunakan atribut <b>rowspan</b> :
<br><br>
<img src="materi/table/tabel3.png">
<p>Script di atas akan menghasilkan tampilan seperti berikut :
<br><br>
<img src="materi/table/tabel3.1.png">
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Textarea------------------------->
<div class="r-page textarea">
    <div class="page-content">
      <h2 class="page-title">Textarea</h2>
	  Kotak isian bertype text ini menerima data dari karakter (default) sebanyak satu baris.
	  <br><br>
	  <font size="6"><b>Name</b></font>
      <br><br>
	  Nama variabel dari control yang akan menyimpan nilai dari input field
	   <br><br>
	  <font size="6"><b>Rows</b></font>
      <br><br>
	  Untuk mengatur jumlah baris pada textarea
	   <br><br>
	  <font size="6"><b>Cols</b></font>
      <br><br>
	  Untuk mengatur jumlah Kolom pada textarea
	  <br><br>
	  Contoh Script : <br>
	  <img src="materi/textarea/textarea1.png" width="40%" height="25%">
	  <br><br>
	  Hasil Script : <br>
	  <img src="materi/textarea/textarea2.png" width="50%" height="30%">
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Marquee-------------------------->
<div class="r-page marquee">
    <div class="page-content">
      <h2 class="page-title">Marquee</h2>
          Marquee adalah sebuah tag/kode dalam bahasa HTML yang dapat membuat sebuah objek seperti teks dan gambar
	  <br>bergerak secara horizontal maupun vertikal.
	  <br>beberapa attribut dari marquee :
	  <br><br>
	  <font size="6"><b>loop</b></font>
	  <br>digunakan untuk mengatur waktu tunda gerakan dalam mili detik.
	  <br>Contoh :
	  <br><br><marquee width="50%" loop="5"><img src="materi/marquee/marquee 1.png"></img></marquee>
	  <br><br>
	  <font size="6"><b>direction</b></font>
	  <br>digunakan untuk mengatur arah pergerakan dari objek sperti teks,image,dll.
	  <br>valuenya adalah (left/right/down/up)
	  <br>Contoh :
	  <br><br><marquee width="50%" direction="up"><img src="materi/marquee/marquee 1.png"></img></marquee>
	  <br><br>
	  <font size="6"><b>bgcolor</b></font>
	  <br>digunakan untuk menambahkan warna latar belakang
	  <br>dari sebuah objek (teks, image, dll).
	  <br>Contoh :
	  <br><br>
	  <marquee width="50%" bgcolor="white"><img src="materi/marquee/marquee 1.png"></img></marquee><br><br>
	  <font size="6"><b>behavior</b></font>
	  <br>digunakan untuk mengatur jenis dari marquee.
	  <br>valuenya adalah(scroll/slide/alternate)
	  <br>Contoh :
	  <br><br><marquee width="50%" behavior="alternate"><img src="materi/marquee/marquee 1.png"></img></marquee>
	  <br><br>
	  <font size="6"><b>scrollamount</b></font>
	  <br>digunakan untuk mengatur kecepatan gerakan dalam satuan
	  <br>pixel (semakin besar angka semakin cepat gerakannya).
	  <br>Contoh :
	  <br><br><marquee width="50%" behavior="alternate" scrollamount="20"><img src="materi/marquee/marquee 1.png"></img></marquee>
	  <br><br>
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<!-------------------------Input---------------------------->
<div class="r-page input">
    <div class="page-content">
      <h2 class="page-title">Input</h2>
	  Tag ini digunakan untuk membuat elemen text (default text, password text, hidden text), checkbox, radio button,
	  <br>tombol submit, dan tombol reset.
	  <br><br>
	  <font size="6"><b>Type</b></font>
	  <br>digunakan untuk menentukan tipe elemen kontrol yang akan digunakan.
	  <br>
	  <font size="6"><b>Name</b></font>
	  <br>digunakan untuk menamakan fungsi input tersebut.
	  <br>
	  <font size="6"><b>Value</b></font>
	  <br>digunakan untuk mengisi bagian dari type atau value.
	  <br>
	  <img src="materi/input/input1.png" width="30%" height="30%">
	  <br><br>Contoh Script :
	  <br><br>
	  <img src="materi/input/input2.png" width="40%" height="30%">
	  <br><br>Tampilan Script :
	  <br><br>
	  <img src="materi/input/input3.png" width="30%" height="30%">
    </div>
    <div class="close-button r-close-button">x</div>
  </div>
<section id="artikel">
<!--------------------------Materi-------------------------->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-small tile tile-8" data-page-type="r-page" data-page-name="heading">
          <div><p>Heading</p></div>
        </li>
        <li class="tile tile-small last tile-8" data-page-type="r-page" data-page-name="link">
          <div><p>Link</p></div>
        </li>
		<li class="tile tile-small tile tile-8" data-page-type="r-page" data-page-name ="select">
          <div><p>Select</p></div>
        </li>
		<li class="tile tile-small last tile-8" data-page-type="r-page" data-page-name ="form">
          <div><p>Form</p></div>
        </li>
      </div>
	  <div class="col2 clearfix">
		<li class="tile tile-small tile tile-8" data-page-type="r-page" data-page-name="paragraf">
          <div><p>Paragraf</p></div>
        </li>
        <li class="tile tile-small last tile-8" data-page-type="r-page" data-page-name="frame">
          <div><p>Frame</p></div>
        </li>
        <li class="tile tile-small tile tile-8" data-page-type="r-page" data-page-name="list">
          <div><p>List</p></div>
        </li>
		<li class="tile tile-small last tile-8" data-page-type="r-page" data-page-name="image">
          <div><p>Image</p></div>
        </li>
      </div>
	  <div class="col3 clearfix">
        <li class="tile tile-small tile tile-8" data-page-type="r-page" data-page-name ="table">
          <div><p>Table</p></div>
        </li>
		<li class="tile tile-small last tile-8" data-page-type="r-page" data-page-name ="textarea">
          <div><p>Textarea</p></div>
        </li>
		<li class="tile tile-small tile tile-8" data-page-type="r-page" data-page-name="marquee">
          <div><p>Marquee</p></div>
        </li>
		<li class="tile tile-small last tile-8" data-page-type="r-page" data-page-name ="input">
          <div><p>Input</p></div>
        </li>
      </div>
</section>
<div class="container">
  <a href="#home">
      <h1 class="badge-dark" Align="center">Balik Ke Atas</h1>
  </a>


</div>

</div>
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/scripts.js"></script>

</body>
</html>
