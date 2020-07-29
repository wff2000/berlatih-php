<?php
function ubah_huruf($string){
//kode di sini

$abjad = "abcdefghijklmnopqrstuvwxyz";
$output ="";
for($i=0; $i <strlen($string); $i++){
  $posisition= strrpos($abjad,$string[$i]);  
  $output.= substr($abjad,$posisition+1,1);
}
return $output;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>".ubah_huruf('developer'); // efwfmpqfs
echo "<br>".ubah_huruf('laravel'); // mbsbwfm
echo "<br>".ubah_huruf('keren'); // lfsfo
echo "<br>".ubah_huruf('semangat'); // tfnbohbu

?>