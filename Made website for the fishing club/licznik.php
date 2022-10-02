 <?PHP
   $plik = "licznik.txt";
   if (file_exists($plik)) {
     $fp = fopen($plik, "r+");
     $licz = fgets($fp, 7);
     $licz += 1;
     fseek($fp, 0);
     fwrite($fp, $licz, 7);
     fclose($fp);
   }
   if ($licz < 10) 
     echo("00000" . $licz . " ");
   elseif ($licz < 100)
     echo("0000" . $licz . " ");
   elseif ($licz < 1000)
     echo("000" . $licz . " ");
   elseif ($licz < 10000)
     echo("00" . $licz . " ");
   elseif ($licz < 100000)
     echo("0" . $licz . " ");
   else
     echo($licz . " ");
 ?>