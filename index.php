<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="css/style.css">
<body>
    <title>Hello, world!</title>
    <style>
      
                </style>
  </head>
  <body data-bs-spy="scroll" data-bs-target="#navbar">

    <nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">Data Imunisasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>

        
      </ul>
    </div>
  </div>
</nav>


<section id="home">

    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/imunisasi-lengkap-23-638.jpg" class="d-block w-100 " alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/3.webp" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</section>

<section id="about" class="bg-secondary">
      <div class="container">
        <div class ="row">
          <div class="col-md-8 mx-auto text-center">
               <div class="w3-container" style="margin-top:80px" id="total">
                  <h1 class="w3-jumbo"><b>Data Imunisasi</b></h1>
                  <a>Data Imunisasi Periode Januari-Desember Tahun 2017 </a> 
                   <h2 class="w3-xxxlarge w3-text-red"><b>Total Vaksin Imunisasi</b></h2>
                </div>
  <div>

    <img src="img/linecartt.PNG" alt="total vaksin" height=" 400" height="800"> 
    <br>
    Klik dibawah ini jika Anda ingin mengetahui Line Chart jumlah Imunisasi pada Januari- Desember 2017
    <br>
    <a id="linebcg" href="linebcg.html">Line Chart BCG</a>
    <br>
    <a id="linedpt" href="linedpt.html">Line Chart DPT</a>
    <br>
    <a id="linecampak" href="linecampak.html">Line Chart Campak-Rubella</a>
    <br>
    <a id="linepolio" href="linepolio.html">Line Chart Polio</a>
  </div>
          
                  <br/><br/>
                    <button type="button" class="btn btn-primary btn-primary-about btn-lg"> Share</button>

        
          </div>
        </div>
      </div>
</section>

<section id="gallery" class="bg-success">
  <div class="container">
    <div class ="row">
      <div class="col-md-8 mx-auto text-center">

          <h1>this is gallery page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, sapiente cum placeat optio itaque ullam distinctio doloribus non similique tenetur est reprehenderit et molestias provident ad, recusandae expedita illum voluptatem.</p>
      
              <br/><br/>
                <button type="button" class="btn btn-primary btn-lg"> Share</button>

    
      </div>
    </div>
  </div>
</section>

<section id="contact" class="bg-warning">
  <div class="container">
    <div class ="row">
      <div class="col-md-8 mx-auto text-center">

          <h1>this is contact page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, sapiente cum placeat optio itaque ullam distinctio doloribus non similique tenetur est reprehenderit et molestias provident ad, recusandae expedita illum voluptatem.</p>
      
              <br/><br/>
                <button type="button" class="btn btn-primary btn-lg"> Share</button>

    
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script> 
            $(document).scroll(function(){
                if(($window).scrollTop() > 50) {
                  $('#navbar').removeClass('.bg-light').addClass('.bg-nontrans');
                }else if(($window).scrollTop() <= 50){
                  $('#navbar').removeClass('.bg-nontrans').addClass('.bg-light');
                }
            });
    </script>
  
  
  </body>
</html>
