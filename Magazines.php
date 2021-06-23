
<?php
include("include/main.php");
include("include/header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Newspaper</title>

    <style>
      .Newspaper {
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap-reverse;
        justify-content: center;
        box-shadow: 5px 15px 15px whitesmoke;
        padding-bottom: 50px;
      }
      .divNewspaper {
        margin-left: 20px;
        box-shadow: 5px 5px 5px black;
        padding-left: 10px;
        padding-right: 10px;
        cursor: pointer;
        margin-top: 30px;
      }
      .imageNewspaper {
        width: 230px;
        height: 170px;
      }
      .textNewspaper {
        font-size: medium;
      }
      #btnLeft {
        height: 30px;
        position: absolute;
        vertical-align: center;
        left: 300px;
        top: 80px;
      }
      #btnRight {
        height: 30px;
        position: absolute;
        vertical-align: center;
        right: 300px;
        top: 80px;
      }
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
      /* Magazines */
      .Magazines {
        position: relative;
        text-align: center;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        box-shadow: 5px 15px 15px whitesmoke;
        padding-bottom: 50px;
      }
      .divMagazines {
        margin-left: 20px;
        box-shadow: 5px 5px 5px black;
        padding-left: 10px;
        padding-right: 10px;
        cursor: pointer;
        margin-top: 30px;
      }
      .imageMagazines {
        width: 230px;
        height: 280px;
      }
      .textMagazine {
        font-size: medium;
      }
      #btnLeftMag {
        height: 30px;
        position: absolute;
        vertical-align: center;
        left: 300px;
        top: 80px;
      }
      #btnRightMag {
        height: 30px;
        position: absolute;
        vertical-align: center;
        right: 300px;
        top: 80px;
      }
      .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
      }
    </style>
</head>
  <body>
    <h1 style="text-align: center">Newspaper</h1>
    <div class="Newspaper">
      <!-- <button id="btnLeft" style="justify-content: left" onClick="plusDivs(-1)">
        <
      </button> -->
      <div
        onClick="window.location.href='https://www.livehindustan.com/'"
        class="divNewspaper fade"
      >
        <img class="imageNewspaper" src="image/hindustan1.jfif" />
        <h1 class="textNewspaper">Hindustan</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://www.jagran.com/'"
      >
        <img class="imageNewspaper" src="image/dainik1.jfif" />
        <h1 class="textNewspaper">Dainik Jagran</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://www.prabhatkhabar.com/'"
      >
        <img class="imageNewspaper" src="image/prabhatkhabar1.jfif" />
        <h1 class="textNewspaper">Prabhat Khabar</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://www.hindustantimes.com/'"
      >
        <img class="imageNewspaper" src="image/hindustanTimes1.jfif" />
        <h1 class="textNewspaper">Hindustan Times</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://timesofindia.indiatimes.com/'"
      >
        <img class="imageNewspaper" src="image/timesofInida.jfif" />
        <h1 class="textNewspaper">Times Of India</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://www.telegraphindia.com/'"
      >
        <img class="imageNewspaper" src="image/telegraph.jfif" />
        <h1 class="textNewspaper">Telegraph</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://economictimes.indiatimes.com/'"
      >
        <img class="imageNewspaper" src="image/economicTimes.jfif" />
        <h1 class="textNewspaper">Economic Times</h1>
      </div>
      <div
        class="divNewspaper fade"
        onClick="window.location.href='https://www.thehindu.com/'"
      >
        <img class="imageNewspaper" src="image/hindu.jfif" />
        <h1 class="textNewspaper">The Hindu</h1>
      </div>
    </div>
    <!-----------Magazines-->
    <h1 style="text-align: center">Magazines</h1>
    <div class="Magazines">
      <div
        onClick="window.location.href='https://www.businesstoday.in/emagazine'"
        class="divMagazines fade"
      >
        <img class="imageMagazines" src="image/businessToday.jfif" />
        <h1 class="textMagazine">Business Today</h1>
      </div>
      <div
        class="divMagazines fade"
        onClick="window.location.href='https://ezine.efymag.com/buy/ezinetariff.asp'"
      >
        <img class="imageMagazines" src="image/electronic4you.jfif" />
        <h1 class="textMagazine">Electronics For You</h1>
      </div>
      <div
        class="divMagazines fade"
        onClick="window.location.href='https://www.indiatoday.in/magazine'"
      >
        <img class="imageMagazines" src="image/indiaToday.jfif" />
        <h1 class="textMagazine">India Today</h1>
      </div>
      <div
        class="divMagazines fade"
        onClick="window.location.href='https://www.magzter.com/IN/THG-publishing-pvt-ltd/FRONTLINE/News/'"
      >
        <img class="imageMagazines" src="image/frontline.jfif" />
        <h1 class="textMagazine">Frontline Magazine</h1>
      </div>
      <div
        class="divMagazines fade"
        onClick="window.location.href='https://www.readersdigest.in/'"
      >
        <img class="imageMagazines" src="image/readersDigest.jfif" />
        <h1 class="textMagazine">Reader's Digest</h1>
      </div>
      <div
        class="divMagazines fade"
        onClick="window.location.href='https://magazine.outlookindia.com/issue/11724'"
      >
        <img class="imageMagazines" src="image/outlook.jfif" />
        <h1 class="textMagazine">Outlook</h1>
      </div>
      <div
        class="divMagazines fade"
        onClick="window.location.href='https://www.pdgroup.in/'"
      >
        <img class="imageMagazines" src="image/pratyogitaDarpan.jfif" />
        <h1 class="textMagazine">Pratyogita Darpan</h1>
      </div>
    </div>
    <script></script>
</body>
</html>

 
