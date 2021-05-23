 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href ="css/style.css">
    <script src="deneme.js"></script>
    <title>İletisim</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg arka">
      <div class="container-fluid arka">
        <a class="navbar-brand menu" href="#">ŞEHRİM VE BEN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end fixed-top deneme2" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active menu" aria-current="page" href="#">Ana Sayfa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="iletisim.html">İletişim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="login.html">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <div class="arkaPlan">
      <h3 class="text-center">Bilgileriniz iletildi!
      </h3>
<?php
echo "AD:".$_GET["name"]."<br>";
echo "SOYAD:".$_GET["subject"]."<br>";
echo "EMAİL:".$_GET["email"]."<br>";
echo "Cinsiyet:".$_GET["cinsiyet"]."<br>";
echo "Okullar:";
if(isset($_GET["ilk"])) echo "İlkokul-";
if(isset($_GET["orta"])) echo "Ortaokul-";
if(isset($_GET["lise"])) echo "Lise-";
if(isset($_GET["uni"])) echo "Üniversite";
echo "<br>";
echo "BÖLGE:".$_GET["bolge"]."<br>";
?>
    </div>
  </body>
</html>
