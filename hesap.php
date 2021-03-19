<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sonuç</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;1,300&display=swap" rel="stylesheet"> 
    <style>
    *{
        font-family: 'Poppins', sans-serif;
    }
    /* Color Palette */
/* Background styles */
body {
  background: radial-gradient(circle closest-side at 50px 50px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 40px 60px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 60px 60px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 50px 70px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 150px 165px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 140px 175px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 160px 175px, #FB8B24 3px, transparent 0), radial-gradient(circle closest-side at 150px 185px, #FB8B24 3px, transparent 0), radial-gradient(ellipse closest-side at 50px 60px, #F9A734 18px, transparent 0), radial-gradient(ellipse closest-side at 150px 175px, #F9A734 18px, transparent 0), radial-gradient(circle closest-side at 30px 40px, #F9D8D4 15px, transparent 0), radial-gradient(circle closest-side at 40px 35px, #36964C 15px, transparent 0), radial-gradient(circle closest-side at 70px 40px, #F9D8D4 15px, transparent 0), radial-gradient(circle closest-side at 60px 35px, #286E38 15px, transparent 0), radial-gradient(circle closest-side at 130px 155px, #F9D8D4 15px, transparent 0), radial-gradient(circle closest-side at 140px 150px, #36964C 15px, transparent 0), radial-gradient(circle at 170px 155px, #F9D8D4 15px, transparent 0), radial-gradient(circle at 160px 150px, #286E38 15px, transparent 0);
  /* Pineapple details */
  background-color: #F9D8D4;
  background-size: 180px 210px;
  animation: animatedBackground 0.5s cubic-bezier(0.61, -0.64, 0.58, 1.46) forwards;
}
/* Animation */
@keyframes animatedBackground {
  from {
    background-position: 0 50%;
  }
  to {
    background-position: 0 0;
  }
}
.container {
  max-width: 800px;
  margin: 80px auto;
}
.text-center {
  text-align: center;
}
.quote-card {
  background: #fff;
  color: #222222;
  padding: 20px;
  padding-left: 50px;
  box-sizing: border-box;
  box-shadow: 0 2px 4px rgba(34, 34, 34, 0.12);
  position: relative;
  overflow: hidden;
  min-height: 120px;
}
.quote-card p {
  font-size: 22px;
  line-height: 1.5;
  margin: 0;
  max-width: 80%;
}
.quote-card cite {
  font-size: 16px;
  margin-top: 10px;
  display: block;
  font-weight: 200;
  opacity: 0.8;
}
.quote-card:before {
  font-family: Georgia, serif;
  content: "“";
  position: absolute;
  top: 10px;
  left: 10px;
  font-size: 5em;
  color: rgba(238, 238, 238, 0.8);
  font-weight: normal;
}
.quote-card:after {
  font-family: Georgia, serif;
  content: "”";
  position: absolute;
  bottom: -110px;
  line-height: 100px;
  right: -32px;
  font-size: 25em;
  color: rgba(238, 238, 238, 0.8);
  font-weight: normal;
}
@media (max-width: 640px) {
  .quote-card:after {
    font-size: 22em;
    right: -25px;
  }
}
.quote-card.blue-card {
  background: #303F9F;
  color: #ffffff;
  box-shadow: 0 1px 2px rgba(34, 34, 34, 0.12), 0 2px 4px rgba(34, 34, 34, 0.24);
}
.quote-card.blue-card:before, .quote-card.blue-card:after {
  color: #3F51B5;
}
.quote-card.red-card {
  background: #D32F2F;
  color: #ffffff;
  box-shadow: 0 1px 2px rgba(34, 34, 34, 0.12), 0 2px 4px rgba(34, 34, 34, 0.24);
}
.quote-card.red-card:before, .quote-card.red-card:after {
  color: #F44336;
}
.quote-card.yellow-card {
  background: #F9A825;
  color: #222222;
  box-shadow: 0 1px 2px rgba(34, 34, 34, 0.12), 0 2px 4px rgba(34, 34, 34, 0.24);
}
.quote-card.yellow-card:before, .quote-card.yellow-card:after {
  color: #FBC02D;
}
.credits {
  margin-top: 80px;
}
.credits a {
  color: #222222;
  text-decoration: none;
  text-shadow: 0 0 2px rgba(34, 34, 34, 0.24);
  padding-bottom: 1px;
  display: inline-block;
  border-bottom: 1px dashed rgba(34, 34, 34, 0.24);
  opacity: 0.6;
  transition: 0.3s all ease-in;
}
.credits a:hover {
  border-bottom-style: solid;
  opacity: 1;
}


    </style>
</head>
<body>
</body>
<?php

//?not ortalaması
$ders1 = $_POST["ders1"];
$ders2 = $_POST["ders2"];
$ders3 = $_POST["ders3"];
$ders4 = $_POST["ders4"];
$ders5 = $_POST["ders5"];
$ders6 = $_POST["ders6"];
$ders7 = $_POST["ders7"];
$not = [$ders1,$ders2,$ders3,$ders4,$ders5,$ders6,$ders7];
$toplam = array_sum($not);
$adet  = count($not);
$sonuc = $toplam / $adet;
if($sonuc > 85) {
    echo '<p style="font-size:24px;">Not Ortalamanız: '. $sonuc.','."tebrikler! takdirname kazandınız</p>".' '.'<img src="https://1.bp.blogspot.com/-sHUY-q8KaDw/V06zEPVykGI/AAAAAAAAFQI/HrAcHf4JUnYA-Xevr10vaA_yojf3FoZgACLcB/s1600/takdirbelgesi.png">';
}

if($sonuc > 75 AND $sonuc < 84.9) {
    echo '<p style="font-size:24px;">Not Ortalamanız: '. $sonuc.','."tebrikler! teşekkürname kazandınız</p>".'<img src="https://2.bp.blogspot.com/-vh6kKuLXwJg/V06xU8yBSPI/AAAAAAAAFP8/AY5cdudeW2QUdv-K2n8ZATvdBc5iO1-rQCLcB/s1600/tesekk%25C3%25BCrbelgesi.png">';
}

if ($sonuc < 74) {
    echo ' <p style="font-size:24px;">Not Ortalamanız:'.$sonuc.','.'Malesef <pN style="color:red; font-size:30px;">HİÇBİRŞEY</pN> Kazanamadınız.</p><iframe style="border:8px solid #fff;" width="560" height="315" src="https://www.youtube-nocookie.com/embed/H7mxXm0Avts?start=54" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <blockquote class="quote-card blue-card">
        <p>
          şimdi bana kaybolan yıllarımı verseler
        </p>
    
        <cite>
          Sezen Aksu´dan sana
        </cite>
      </blockquote>';
}
?>
</html>