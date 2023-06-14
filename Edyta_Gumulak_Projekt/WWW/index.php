<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="skrypt.js"></script>
    <style>
        main{
            padding: 0px 20%;
            font-family: Verdana;
            color: rgb(70, 69, 69);
            font-style: oblique;
        }
        #datetime{
            float: right;
            font-weight:900;
            font-size: 30px;
            text-shadow: 3px 3px 5px gray;
            color: rgb(36, 36, 36);
            padding-top: 20px;
        }
        .heading{
            text-align: center;
            font-weight:900;
            font-size: 35px;
            font-family: font-menu;
            text-shadow: 1px 1px 2px gray;
            word-spacing: 15px;
            letter-spacing: 3px;
            padding: 30px 0px;
            color: black;
        }
        .photo-history{
            height: 300px;
            width: 450px;
            border-radius: 30px;
            box-shadow: 3px 3px 5px gray;
            margin-right: 20px;
            margin: 30px 0px;
        }
        .photo-food{
            height: 400px;
            width: 400px;
            border-radius: 30px;
            box-shadow: 3px 3px 5px gray;
            margin-right: 20px;
            margin: 30px 0px;
        }
        #licznik{
            padding: 20px;
        }
        @media screen and (max-width: 1050px){
            .photo-history{
                height: 225px;
                width: 337px;
            }
            .photo-food{
                height: 300px;
                width: 300px;
            }
            #datetime{
                text-align: center;
            }
        }
        .photo{
            text-align: center;
        }
    </style>
    <link rel="shortcut icon" type="image/ico" href="../PHOTO/tło/noun-mountains-576444.png">
    <title>STRONA GŁÓWNA</title>
</head>

<body>
    <nav class="nav">
        <ul>
            <li><a href="index.php"><img src="../Photo/karczma/logo.png" alt="logo" id="logo" ></a></li>
            <li><a href="menu.html">MENU</a></li>
            <li><a href="galeria.html">GALERIA</a></li>
            <li><a href="rezerwacje.html">REZERWACJE</a></li>
            <li><a href="oferta.html">OFERTA</a></li>
            <li><a href="kontakt.html">KONTAKT</a></li>
        </ul>
    </nav>

    <header>
        <img src="../Photo/tło/slider1.jpeg" alt="slide" name="slide" style="width: 100%; height: 344px;">
    </header>

    <main>
        <div id="datetime"></div>
        <script>
            function updateDateTime() {
                var currentDateTime = new Date();
                var date = currentDateTime.toLocaleDateString("pl-PL");
                var time = currentDateTime.toLocaleTimeString("pl-PL");
        
                document.getElementById("datetime").innerHTML = date +" "+ time;
            }
            updateDateTime();
            setInterval(updateDateTime, 1000);
        </script>
        <p class="heading" style="padding-top: 100px;">KARCZMA  Z  HISTORIĄ</p>
            
            Przenieś się do niezwykle klimatycznej Karczmy Koło Potoka,
            gdzie w otoczeniu niesamowitego widoku Tatr,
            będziesz mieć okazję skosztować kultowej zakopiańskiej
            kuchni. Karczma Koło Potoka to restauracja stworzona z miłości
            do tradycji i kuchennych rewolucji.

        <div class="photo">
            <a href="galeria.html"><img src="../Photo/karczma/k1.jpg" alt="zdjecie 1" class="photo-history" style="margin-right: 20px;"></a>
            <a href="galeria.html"><img src="../Photo/karczma/k2.jpg" alt="zdjecie 2" class="photo-history"></a>
            <a href="galeria.html"><img src="../Photo/karczma/k3.jpg" alt="zdjecie 3" class="photo-history"></a>
        </div>
        
        <p class="heading">HISTORIA NASZEJ KARCZMY</p>

            W dawnych czasach, na skraju małej wsi koło Potoka, stała stara karczma. 
            Mieszkańcy okolicznych wsi często zatrzymywali się tam na nocleg lub na posiłek, 
            gdyż właściciel karczmy, stary Jan, słynął z pysznej kuchni i gościnności.
            Pewnego dnia do karczmy zawitał nieznajomy. Był to wysoki, ciemnowłosy mężczyzna o zadziornych oczach i z nutą tajemniczości w spojrzeniu. 
            Zażyczył sobie jedynie kawałka chleba i szklanki wody, ale w zamian za to opowiedział Janowi niezwykłą historię.
            Mężczyzna opowiedział, że w pobliskich lasach ukryty jest skarb, którego szuka od lat. 
            Twierdził, że znalazł już połowę mapy, ale potrzebuje pomocy w odnalezieniu drugiej części. 
            Jan był zafascynowany historią i zaoferował mu pomoc.
            Tak zaczęła się niezwykła przygoda, która pochłonęła obu mężczyzn na długi czas.
            Razem przemierzyli setki kilometrów, przekraczając rwące rzeki, wspinając się na wysokie szczyty i przeciskając przez gęste zarośla. 
            Spotkali też po drodze wielu ludzi, niektórzy okazali się przyjacielscy, inni wrogami.
            Po wielu tygodniach poszukiwań, udało im się odnaleźć skarb, ukryty w starożytnej grocie. 
            Było to ogromne bogactwo, złote monety, cenne klejnoty i drogocenne zwoje z tajemniczymi zapisami.
            Jan i nieznajomy podzielili się skarbem po równo i przysięgli sobie, że nigdy nie zdradzą tajemnicy groty. 
            Karczma stała się jeszcze bardziej popularna, a Jan zawsze z dumą opowiadał o swojej niezwykłej przygodzie i odkryciu skarbu.
            Historia ta przetrwała wiele pokoleń, a karczma koło Potoka stała się miejscem, 
            do którego zjeżdżali ludzie z całego kraju, aby posłuchać niezwykłej historii o odkryciu skarbu.
            
        <p class="heading">SZEF KUCHNI POLECA</p>

        <div class="photo">
            <a href="menu.html"><img src="../Photo/gallery/1.jpg" alt="MOSKOL" class="photo-food" style="margin-right: 20px;"></a>
            <a href="menu.html"><img src="../photo/gallery/2.jpg" alt="MIESO" class="photo-food"></a>
        </div>
        <?php  
        $licznikPlik = 'licznik.txt';     
        if (file_exists($licznikPlik)) {    
            $licznik = (int) file_get_contents($licznikPlik);     
            $licznik++;
        } else {  
            $licznik = 1;
            file_put_contents($licznikPlik, $licznik);
        } 
        file_put_contents($licznikPlik, $licznik);
        echo "<div id='licznik'>Licznik odwiedzin: $licznik</div>";
        ?>
    </main>

    <footer>
        <div>
            <section class="foot">
               <h2 class="foot-font">LOKALIZACJA</h2><br>
               ul.Partyzantów 1/5
               34-500 Zakopane
            </section>

            <section class="foot">
               <h2 class="foot-font">CZYNNE</h2><br>
               Codziennie od godziny 13-21.
            </section>

            <section class="foot">
               <h2 class="foot-font">KAPELA</h2><br>
               Przygrywa w piątki i soboty od 18 do 21.
            </section>
        </div>
        <hr>
        <p>
            COPYRIGHT 2023 EDYTA GUMULAK © WSZELKIE PRAWA ZASTRZEŻONE
        </p>
    </footer>
</body>

</html>