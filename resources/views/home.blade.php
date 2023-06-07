<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <!-- {{-- Bosstrap Icons--}} -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<!-- {{-- My style --}} -->
<link rel="stylesheet" href="/css/style.css">
</head>
<body>
  <header>
    <!-- place navbar here -->

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-warning">
  <div class="container-fluid"  style=" box-shadow: 0 3px 4px 0 rgba(0, 0, 0, 0.5);">
    <a class="navbar-brand" href="#">  <img src="sekolaku.png" align="left"  width="100px"  > </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">blog</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
       
      <ul class ="navbar-nav ms-auto">
     @auth
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>  
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-window"></i>
            My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>

            <li>
              <form action="/logout" method="post" >
                @csrf
                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                 Logout</button>
              </form>
          </ul>
        </li>
   
        @else
      <li class="nav-item"></li>
      <a href="/login" class="nav-link"><i class="bi bi-person-plus-fill"></i> 
      Login</a>
      @endauth
    </ul>
    
  </div>
</div> 
</nav>















  </header>
  <main style="background-color: #ffcc00;">
    <div class="container-fluid ">
      <div class="row  ">
    <div class= " col-xs-12   col-sm-12 col-md-4 col-lg-2 bg-warning  ">
      <div class="row text-center  " >
        
      
    </div>
    <br>
      <div class="row text-center ">

        <div class= " col-xs-1   col-sm-1 col-md-12 col-lg-12  ">
          <a class="nav-link active"  href="https://www.google.co.id/?hl=en">
             <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
            <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z"/>
          </svg></a>
        <br>
        <a class="nav-link active"  href="https://getbootstrap.com/">
          <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
            <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
            <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>
          </svg></a>
    
       
      <div class="row text-center">
        <div class= " col-xs-1   col-sm-1 col-md-12 col-lg-12  ">

    <br> <a class="nav-link active"  href="index2.html">
       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
      </svg>
      
        </a>
      <div class="row ">
      <div class= " col-xs-2   col-sm-2 col-md-12 col-lg-12  ">
    <br> 
    <a class="nav-link active"  href="https://forms.gle/qEEnr2C8zwrMoX9y8"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
      <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
      <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
    </svg>
  </a>
    

        <div class="row ">
          <div class= " col-xs-2   col-sm-2 col-md-12 col-lg-12 ">
     <br> 
     <a class="nav-link active"  href="https://www.instagram.com/afdal_uty/l"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
    </svg></a>
     
      
      <div class="row ">
        <div class= " col-xs-2   col-sm-2 col-md-12 col-lg-12 ">
    <br> 
    <a class="nav-link active"  href="https://support.google.com/accounts/answer/3118621?hl=en"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-shield-exclamation" viewBox="0 0 16 16">
      <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
      <path d="M7.001 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
    </svg>

    </a>
    

      
      <div class="row ">
        <div class= " col-xs-2  col-sm-2 col-md-12 col-lg-12 ">
    <br> 
    <a class="nav-link active"  href="index2.html"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-apple" viewBox="0 0 16 16">
      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
      <path d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516.024.034 1.52.087 2.475-1.258.955-1.345.762-2.391.728-2.43Zm3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422.212-2.189 1.675-2.789 1.698-2.854.023-.065-.597-.79-1.254-1.157a3.692 3.692 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56.244.729.625 1.924 1.273 2.796.576.984 1.34 1.667 1.659 1.899.319.232 1.219.386 1.843.067.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758.347-.79.505-1.217.473-1.282Z"/>
    </svg>

    </a>
    
      
      <div class="row ">
        <div class= " col-xs-2  col-sm-2 col-md-12 col-lg-12 ">
    <br> 
    <a class="nav-link active"  href="index2.html"> <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-android2" viewBox="0 0 16 16">
      <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/>
    </svg>

    </a>
   
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
      














    </div>
    <div class= " col-xs-12   col-sm-12 col-md-4 col-lg-6 bg-light " style=" font-family:'Times New Roman', Times, serif;  box-shadow: 0 7px 20px 0 rgba(0, 0, 0, 0.5); height: 4300px;">
      <img src="img/GIT.jpg" align="left"  width="200px"  ><h2><p> <p> <p>  1. GIT(Group include Tour)</p> </p> </p></h2>  <p>  <p>  <p> <p>   <br> <br>   <h3>Bekerja dengan git !</h3> 
           Secara sederhana git itu salah satu dari,<b>Vcs (Version control sistem)Version control sistem</b> disebut juga <b>revision control sistem atau source code management</b> adalah sistem yang mengelolah perubahan dari sebuah dokumen,program komputer,website dan kumpulan informasi lain.
          
        <br>   KENAPA KITA MENGGUNAKAN <b>VERSION CONTROL</b> ?
           <li> Kita bisa melacak versi/History perubahan    </li>
           <li > Memungkinkan bekerja berkolaborasi dengan lebih baik </li>
           <li > Mengetahui siapa yang melakukan dan kapan sebuah perubahan terjadi  </li>
           <li > Memunginkan kita untuk kembali ke keadaan sebelum perubahan(checkout)  </li>
          
          
          
      </p> </p> </p> </p>  
        <h4>ISTILAH-ISTILAH DIDALAM GIT</h4>
       FOLDER PROJET<br><b>(REPOSITORY/REPO)</b> 
      <br>REKAHAMAN ATAU HISTORY/SNAPSHOOT    <br>     <b>(COMMIT)</b>
      <br>PENANDA UNIK PADA COMMIT<br> <b>(HASH)</b>
      <br>BERPINDAH KESEBUAH COMMIT <br><b>(CHECKOUT)</b>
      <br>CABANG BEBAS DARI SEBUAH COMMIT<br> <b>(BRANCH)</b>
      <br>MENGGABUNGKAN CABANG ATAU BRANCH <br><b>(MERGE)</b>
      <br>SUMBER MEMILIKI REPO <br><b>(REMOTE)</b>
      <br>MENGGAMBIL REPO DARI REMOTE<br> <b>(CLONE)</b>
      <br>MENGGIRIMKAN COMMIT KE REPO<br> <b>(PUSH)</b>
      <br>MENGGAMBIL COMMIT DARI REPO<br> <b>(PULL)</b>
      <br>
      <br>

 
     <hr>
         <br> 
            <p >   <img src="img/github7.png" align="left"  width="150px" ><p align= "left">  <h2> <br> <p> 2. GITHUB </p> </h2>   
              
                </p></p> 
                <br> 
                
                <p></p> <br> sebuah website yang bisa kalian kunjungi kalian registrasi,<a href="link">https://github.com/ </a>,dengan pembuatan akun,yaitu kalian bisa upload file atau bikin file didalamnya nanti filenya bisa dikelola menggunakan <b>VCS(version control sistem)</b>,ini kebalikannya kalian bisa bekerja di <b> GITHUB </b> tanpa nginstal git, yang  git itu salah satu dari,<b>Vcs (Version control sistem)Version control sistem disebut juga  revision control sistem atau source code management</b> adalah sistem yang mengelolah perubahan dari sebuah dokumen,program komputer,website dan kumpulan informasi lain.
               
                <p id="scrollspyHeading3"><h3><img src="img/webserverr.png" width="100" height="115" alt=""> 3. Web Server</h3></p><p><h6><b>Web Server</b> adalah sebuah software (perangkat lunak) yang memberikan layanan berupa data. Berfungsi untuk menerima permintaan <b>HTTP</b> atau <b>HTTPS</b> dari klien atau kita kenal dengan <b>Web Browser</b> (Chrome, Firefox). Selanjutnya ia akan mengirimkan respon atas permintaan tersebut kepada client dalam bentuk halaman web. Secara Keseluruhan Web Server adalah penyedia Layanan Buat Klien.</h6></p>
                <p><h6>Berikut Adalah Jenis-Jenis Web Server</h6></p>
                <p>
                  <ul>
                    <li>
                      <p>
                        Web Server Apache
                        <br>
                        <img src="img/Apache.png" width="300" height="100" alt="">
                      </p>
                      Web server yang populer dan paling banyak digunakan kebanyakan orang, yaitu jenis Apache. Pada awalnya Apache didesain guna mendukung penuh sistem operasi UNIX. Selain cukup mudah dalam implementasinya, Apache juga memiliki beberapa program pendukung sehingga memberinkan layanan yang lengkap, seperti PHP, SSI dan kontrol akses. Berikut detailnya:
                      <ul>
                        <br>
                      <li>
                          PHP (Personal Home Page atau PHP Hypertext Processor)
                        <br>
                        Program semacam CGI, berfungsi memproses teks yang bekerja di server. Apache sangat mendukung PHP dengan menempatkannya sebagai salah satu modulnya (mod_php). Hal tersebut membuat PHP bekerja lebih baik.
                      </li>
                      <br>
                      <li>
                          SSI (Server Side Include)
                        <br>
                        Perintah yang bisa disertakan dalam bekas HTML. Kemudian ia dapat diproses oleh web server ketika pengguna mengaksesnya.
                      </li>
                      <br>
                      <li>
                          Access Control
                        <br>
                        Kontrol Akses dapat dijalankan berdasarkan nama host atau nomor IP CGI (Common Gateway Interface). Lalu yang paling umum untuk digunakan adalah perl (Practical Extraction and Report Language), disupport oleh Apache dengan menempatkannya sebagai modul (mod_perl).
                      </li>
                    </ul>
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Nginx
                        <br>
                        <img src="img/ngnix.png" width="300" height="110" alt="">
                      </p>
                      Nginx yang merupakan salah satu web server dengan lisensi open source. Kelebihan dari Nginx adalah bisa menangani kebutuhan web server dengan trafik yang sangat tinggi. Hal ini tidak dapat dilakukan oleh web server jenis lainnya.
                      Nginx juga bisa mengedepankan performa, kemudahan, serta kecepatan. Itulah keunggulan dari Nginx dibandingkan dengan jenis-jenis web server lainnya. Berikut ini adalah beberapa kelebihan lain yang ditawarkan oleh Nginx.
                      <ul>
                        <br>
                        <li>
                          Kinerja yang Luar Biasa: Nginx memang didesain untuk bisa menangani banyak sekali permintaan klien. Nginx bahkan bisa menangani sampai sepuluh penerima setiap harinya. 
                        </li>
                        <br>
                        <li>
                          Arsitektur Event-Based: Selanjutnya, Nginx memakai arsitektur event-based yang dinilai lebih bisa meminimalisir thread untuk memproses permintaan klien.
                        </li>
                        <br>
                        <li>
                          Fitur-fitur yang Kaya: Terakhir, Nginx memiliki berbagai macam fitur yang sangat bermanfaat bagi penggunanya. Beberapa fitur tersebut antara lain file serving, access control, URL rewriting, virtual hosts, reverse proxying, dan lain-lain.
                        </li>
                      </ul>
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Apache Tomcat
                        <br>
                        <img src="img/apachetomcat.png" width="300" height="120" alt="">
                      </p>
                      Apache Tomcat berbeda Apache Server. Tomcat yang juga merupakan open source ini digunakan untuk menampung website berbasis Java. 

Awalnya, Tomcat merupakan proyek Apache yang menjadi bagian dari Apache Server. Karena popularitasnya meningkat, kemudian dipisah antara Apache Server dan Tomcat. Sampai saat ini, Apache Tomcat masih terus dikembangkan oleh komunitas open source Java.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Lighttpd
                        <br>
                        <img src="img/Lighttpd.png" width="300" height="90" alt="">
                      </p>
                      Selanjutnya ada Lighttpd, web server bersifat open source yang hanya bisa berjalan pada komputer dengan sistem operasi Linux dan Unix atau turunan keduanya. Kelebihan dari Lighttpd adalah bisa mengatur CPU load yang dinilai lebih efisien. Selain itu, Lighttpd juga mempunyai fitur seperti SCGI, Output-Compression, URL-Writing, dan FastCGi. Kelebihan inilah yang membuat Lighttpd berbeda dari jenis-jenis web server lainnya.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server IIS (Internet Information Services)
                        <br>
                        <img src="img/iis.png" width="300" height="90" alt="">
                      </p>
                      Kemudian, ada jenis web server IIS atau singkatan dari Internet Information Services. Untuk Windows versi lama seperti Windows 2000 dan Windows 2003, biasanya memakai web server berjenis IIS. Web server ini didukung oleh berbagai macam fitur dan komponen, mulai dari TCP/IP, DNS, sampai software untuk membuat situs web. Selain itu, IIS juga menjadi satu-satunya web server yang mendukung platform .NET dari Windows. Namun, IIS adalah web server yang berbayar. 
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Sun Java System
                        <br>
                        <img src="img/sunjava.png" width="300" height="150" alt="">
                      </p>
                      Sun Java System Web adalah web server open-source yang penggunaannya cukup mudah. Dengan tampilan visual dan Graphical User Interface (GUI) yang bersih, membuat penggunaan Sun Java System Web mudah untuk melakukan konfigurasi, mengatur, serta memonitor server web. Namun, komunitas pengguna Sun Java belum terlalu banyak. Kemudian, jenis log atau sistem password-nya juga dinilai cukup mudah ditembus oleh peretas.
                    </li>
                    <br>
                    <li>
                      <p>
                        Web Server Litespeed
                        <br>
                        <img src="img/litespeed.png" width="350" height="100" alt="">
                      </p>
                      Terakhir, ada web server Litespeed. Kelebihan dari Litespeed performa yang enam kali lebih cepat dari Apache. Selain itu, terdapat pula fitur Distributed Denial of Service (DdoS). DdoS adalah serangan peretas yang membanjiri traffic server, sistem, atau jaringan yang membuat server tidak bisa melayani permintaan informasi lagi.
                    </li>
                  </ul>
                  </p>



                






           </div>





              

    <div class= " col   col-sm-12 col-md-4 col-lg-4 bg-warning  ">  
              
      <ul class="list-unstyled bg-light" style=" box-shadow: 0 7px 20px 0 rgba(0, 0, 0, 0.6); height:4300px;">
        <center><h4 style="height: 70px;"> Penjelasan melalui vidio </h4></center>
     
        <center>
       
            
               <div class="vidio-container">
                <p width="100px" class="img-thumbnail" alt="...">
                <iframe width="360" height="245" src="https://www.youtube.com/embed/lTMZxWMjXQU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>              </iframe>
              </p>
              </div>
            
            </center>

            <center>
              <p width="100px" class="img-thumbnail" alt="...">             
                <iframe width="360" height="245" src="https://www.youtube.com/embed/Q3Id0DgcrXY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                </p>
                </center>


                <center>
                  <p width="100px" class="img-thumbnail" alt="...">
                    <iframe width="360" height="245" src="https://www.youtube.com/embed/k1QXd-8VbPY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                  
                    </p>
                    </center>


                    <center>
                      <p width="100px" class="img-thumbnail" alt="...">
                        <iframe width="360" height="245" src="https://www.youtube.com/embed/8rry2ncZmfg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                      
                        </p>
                        </center>


                        <center>
                          <p width="100px" class="img-thumbnail" alt="...">
                            <iframe width="360" height="245" src="https://www.youtube.com/embed/e-6OkXRqWaE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </p>
                            </center>


                        
                
            
        
    

  </ul>
  
  
  
  
</div>
</div>
</div>

  </main>
  <footer>
    <div class="container-fluid  text-light" >
      <div class="row  ">
        <div class= " col   col-sm-12 col-md-4 col-lg-1 bg-dark">
          </div>
    <div class= " col   col-sm-12 col-md-4 col-lg-3 bg-dark">
      <br>
     
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
        <path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z"/>
        <path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z"/>Bootstrap
        Designed and built with all the love in the world by the Bootstrap team with the help of our contributors.
        Code licensed MIT, docs CC BY 3.0.
        Currently v5.3.0-alpha3.
      </svg><b> Bootstrap </b><p>Designed and built with all the love in the world by the Bootstrap team with the help of our contributors.
      Code licensed MIT, docs CC BY 3.0.
      Currently v5.3.0-alpha3.</p>

   
  
  
  
  
  
  
  </div>
    <div class= " col   col-sm-12 col-md-4 col-lg-2 bg-dark">
      <br>
      
      <h5>Links</h5><hr width="30px" style=" font-family:'Times New Roman', Times, serif;">
      <p>Home</p>
      <p> Docs</p>
      <p>Examples</p> 
      <p>Icons</p>
      <p>Themes</p>
     
      </div>
      <div class= " col   col-sm-12 col-md-2 col-lg-2 bg-dark">
        <br>
        
      <h5>Communities</h5><hr width="60px" style=" font-family:'Times New Roman', Times, serif;">

        For Artists <p></p>
     <p> Developers</p>
     <p>  Advertising</p>
       <p>Investors</p>
     
       </div>
 

      <div class= " col   col-sm-12 col-md-4 col-lg-4 bg-dark"> 
         <br>
        
        <h5>Contack</h5><hr width="50px" style=" font-family:'Times New Roman', Times, serif;">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
          <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>indonesia
        </svg>  indonesia,Gorontalo,Telaga biru</p> 
        <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
        </svg>  Info@Afdaluti.gmail.com</p>
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
        </svg>  +62-821-2327-0035</p> 
        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </svg> @afdaluty</p>
      
        </div>




    </div>
  
</div>
 

<div class="container-fluid  text-light" >
  <div class="row  ">
    <div class= " col   col-sm-12 col-md-4 col-lg-12 bg-dark">
      <hr>
  <div class="position-relative">

      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-c-circle" viewBox="0 0 16 16"> 2023 Company, Inc,ALL rights reserved 
        <path d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8Zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.146 4.992c-1.212 0-1.927.92-1.927 2.502v1.06c0 1.571.703 2.462 1.927 2.462.979 0 1.641-.586 1.729-1.418h1.295v.093c-.1 1.448-1.354 2.467-3.03 2.467-2.091 0-3.269-1.336-3.269-3.603V7.482c0-2.261 1.201-3.638 3.27-3.638 1.681 0 2.935 1.054 3.029 2.572v.088H9.875c-.088-.879-.768-1.512-1.729-1.512Z"/>
      </svg> 2023 Company, Inc,ALL rights reserved

     
      <div class="position-absolute bottom-0 end-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
      </svg> Twitter
    
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
      </svg> Instagram
    
    
    
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
      </svg> Facebook
    
    </div>
    
    </div>
</div>
</div>
</div>

  </footer>

 
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>