
<?php
function pasangan_terbesar($angka){
// kode di sini
    $list = array_map('intval',str_split($angka));
    $index = count($list);
    $max = 0;
    for($i = 0 ; $i < $index-1 ; $i++){
        $pasanganAngka = intval($list[$i] . $list[$i+1]);
        if($pasanganAngka > $max){
            $max = $pasanganAngka;
        }
    }
    echo $max . "<br>";
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo pasangan_terbesar(12783456); // 83
echo pasangan_terbesar(910233); // 91
echo pasangan_terbesar(71856421); // 85
echo pasangan_terbesar(79918293); // 99

?>