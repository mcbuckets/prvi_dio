<?php

/*
1. zadatak

Napiši funkciju koja kao parametar prima string, te kao rezultat vraæa true ako je zadani string
palindrom. U suprotnom vraæa false.

 *******************************************************************************************
Funkcija će vraćati ispravne rezultate za stringove koji ne sadrže interpunkciju,
razmake i mješovita slova(mala i velika), iako se može dogoditi da i za takav string da ispravan rezultat.
Problem interpunkcije i sl. se može riješiti npr. korištenjem regularnih izraza.
 *******************************************************************************************

 */

function isPalindrome($test_string)
{
    $length = 0;

    //duljina stringa
    while (isset($test_string[$length])) {
        $length++;
    }

    if (0 == $length) {
        return true;
    }

    $total_tests = floor($length / 2);

    $num_tests = 0; //pomocna varijabla, idemo od 0 do pola jer nema smisla dvaput provjeravati suprotne elemente

    while ($num_tests <= $total_tests) {
        if ($test_string[$num_tests] != $test_string[($length - $num_tests) - 1]) {
            return false;
        }

        $num_tests++;
    }

    return true;
}

/*
2. zadatak

Napiši funkciju koja prima dva integer parametra n i m, te kao rezultat vraæa vrijednost n^m.

 */

function power($x, $y)
{
    if ($y > 0) {
        return $x * power($x, $y - 1);
    } else if ($y < 0)//za negativne eksponente
    {
        return 1 / $x * power($x, $y + 1);
    } else {
        return 1;
    }
}

/*
3. zadatak

Napiši funkciju koja kao parameter prima neki niz, a kao rezultat vraæa element koji se najviše
puta ponavlja unutar tog niza.

 */

function mostCommon($arr)
{
    $length = 0;

    while (isset($arr[$length])) {
        $length++;
    }

    $count_arr = array(); //u ovaj niz spremamo broj ponavljanja elementa

    $max_show  = $arr[0]; //element koji se najèešæe pojavljuje inicijaliziramo na prvi niza (slicno kao kod trazenja min i max)
    $max_count = 1; //kontrolna varijabla koja kaze koliko puta se najcesce pojavljivani element pojavio

    for ($i = 0; $i < $length; $i++) {
        $el = $arr[$i]; //trenutni element niza koji se ispituje

        if (!isset($count_arr[$el])) {
            $count_arr[$el] = 1;
        } else {
            $count_arr[$el]++;
        }
        //ako se element vec prije pojavio uvecaj broj ponavljanja za 1

        if ($count_arr[$el] > $max_count)//postavljamo element koji se najvise puta pojavio i kontrolnu varijablu maxCount
        {
            $max_show  = $el;
            $max_count = $count_arr[$el];
        }
    }
    return $max_show;
}

/*
4. zadatak

Napiši funkciju koja kao parameter prima neki niz cijelih brojeva, a kao rezultat vraæa
najmanji broj unutar tog niza.

 */

function minVal($arr)
{
    $length = 0;

    while (isset($arr[$length])) {
        $length++;
    }

    $min = $arr[0]; //prvi u nizu postavljamo za najmanji

    for ($i = 1; $i < $length; $i++) {
        if ($arr[$i] < $min)//ako je element u nizu manji od $min taj element postaje $min
        {
            $min = $arr[$i];
        }
    }

    return $min;
}

/*
5. Peti zadatak

Napišite funkciju koja prima dva niza znakova (stringa) i vraća najduži zajednički niz (substring).




6. zadatak

Napiši funkciju koja kao parametre prima niz cijelih brojeva i broj grupa. Podijeli taj niz u
navedeni broj grupa na način da je suma svih članova unutar pojedine grupe što je moguće
bliža.

Npr:

Imate niz: 2, 1, 4, 7, 1, 2, 6, 8
Želite ga podijeliti u tri grupe.
Rezultat bi bio:
1 grupa – 8,2 = 10
2 grupa – 7, 2, 1 = 10
3 grupa – 6, 4, 1 = 11

Inicijaliziraj onoliko nizova koliko je grupa definirano.
Sortiraj početni niz.
Kreni od zadnjeg elementa(najvećeg) sortiranog niza i stavljaj brojeve naizmjenično u inicijalizirane nizove
(npr. u niz 1 pa u 2 i 3, onda u 3 pa u 2 i 1 itd.).

 */

/*
7. zadatak

Napišite funkciju koja ispisuje brojeve od 1 do 100, ali na naèin da za brojeve koji su djeljivi sa
tri ispiše “LOCA”, za brojeve koji su dijeljivi sa 5 ispiše “STIC”, a za brojeve koji su dijeljivi i sa 3
i sa 5 ispište “LOCASTIC”

 */

function locastic()
{
    for ($i = 1; $i < 101; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo 'LOCASTIC <br>';
        } else if ($i % 3 == 0) {
            echo 'LOCA <br>';
        } else if ($i % 5 == 0) {
            echo 'STIC <br>';
        } else {
            echo $i . '<br>';
        }
    }
}
