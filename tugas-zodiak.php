<form action="" method="get">
    <input type="text" name="bln" placeholder="Bulan ke-">
    <input type="text" name="tgl" placeholder="Tanggal ke-">
    <input type="submit" name="tombol" value="Tentukan">
</form>

<?php 
    $bln=$_GET['bln'];
    $tgl=$_GET['tgl'];
    $zodiac;


    if ($bln == 1) {
        if ($tgl > 0 && $tgl < 20) {
          $zodiac = "Capricorn";
        }
        if ($tgl > 19 && $tgl < 32) {
          $zodiac = "Aquarius";
        }
      }

    if ($bln == 2) {
        if ($tgl > 0 && $tgl < 18) {
          $zodiac = "Aquarius";
        }
        if ($tgl > 18 && $tgl < 32) {
          $zodiac = "Pisces";
        }
    }

    if ($bln == 3) {
        if ($tgl > 0 && $tgl < 21) {
          $zodiac = "Pisces";
        }
        if ($tgl > 20 && $tgl < 32) {
          $zodiac = "Aries";
        }
      }
    
      if ($bln == 4) {
        if ($tgl > 0 && $tgl < 20) {
          $zodiac = "Aries";
        }
        if ($tgl > 19 && $tgl < 32) {
          $zodiac = "Taurus";
        }
      }
      if ($bln == 5) {
        if ($tgl > 0 && $tgl < 21) {
          $zodiac = "Taurus";
        }
        if ($tgl > 20 && $tgl < 32) {
          $zodiac = "Gemini";
        }
      }
      if ($bln == 6) {
        if ($tgl > 0 && $tgl < 21) {
          $zodiac = "Gemini";
        }
        if ($tgl > 20 && $tgl < 32) {
          $zodiac = "Cancer";
        }
      }
      if ($bln == 7) {
        if ($tgl > 0 && $tgl < 23) {
          $zodiac = "Cancer";
        }
        if ($tgl > 22 && $tgl < 32) {
          $zodiac = "Leo";
        }
      }
      if ($bln == 8) {
        if ($tgl > 0 && $tgl < 23) {
          $zodiac = "Leo";
        }
        if ($tgl > 22 && $tgl < 32) {
          $zodiac = "Virgo";
        }
      }
      if ($bln == 9) {
        if ($tgl > 0 && $tgl < 23) {
          $zodiac = "Virgo";
        }
        if ($tgl > 22 && $tgl < 32) {
          $zodiac = "Libra";
        }
      }
      if ($bln == 10) {
        if ($tgl > 0 && $tgl < 23) {
          $zodiac = "Libra";
        }
        if ($tgl > 22 && $tgl < 32) {
          $zodiac = "Scorpio";
        }
      }
      if ($bln == 11) {
        if ($tgl > 0 && $tgl < 22) {
          $zodiac = "Scorpio";
        }
        if ($tgl > 21 && $tgl < 32) {
          $zodiac = "Sagittarius";
        }
      }
      if ($bln == 12) {
        if ($tgl > 0 && $tgl < 22) {
          $zodiac = "Sagittarius";
        }
        if ($tgl > 21 && $tgl < 32) {
          $zodiac = "Capricorn";
        }
      }

      echo "<h1>". $zodiac ."</h1>"
?>