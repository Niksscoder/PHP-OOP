<?php
// Zadanie 1. Funckja ktora przelicza wartosc z euro na zlotowki
function euro2pln($kwota, $kurs_euro){
    (float) $result = $kwota * $kurs_euro;
    return $result;
}
echo euro2pln(10, 4.56);

// Zadanie 2 Przeliczanie wartosc z Euro na PLN i Pln z Euro

function przelicznik_walut($kwota, $kurs_euro, $kurs_zloty){
    (float) $wynik_zlotych = $kwota * $kurs_euro;
    (float) $wynik_euro = $kwota * $kurs_zloty;
     echo "$kwota euro = $wynik_zlotych zlotych"."<BR>";
     echo "$kwota zlotych = $wynik_euro euro";
}
przelicznik_walut(100, 4.55, 0.22);

// Zadanie 3. Iteracyjne wylowanie silni.
function silnia($liczba){
    if ($liczba < 2){
        return 1;
    }else{
        $silnia_temp = 1;
        for($i = 2; $i <= $liczba; $i++){
            $silnia_temp *= $i;
        }
        return $silnia_temp;
    }
}
// echo silnia(10);


echo "<BR>";

function brutto ($netto, $vat = 0.23, $rabat = 0){
    $wynik[0] = $netto - $rabat;
    $wynik[1] = $wynik[0] * $vat; 
    $wynik[2] = $wynik[0] + $wynik[1];
    return $wynik;

}
print_r(brutto(100));
list($netto, $podatek, $brutto) = brutto(100);
echo "Cena netto : $netto <BR> Podatek : $podatek, <BR> Brutto : $brutto";

$a = 2;
function k(){
    global $a;
    echo $a;
}
k();
?>