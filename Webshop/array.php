<?php

// 1. Skapa en HTTP-header med innehållstypen JSON (Content-Type).
header("Content-Type: application/json; charset=UTF-8");

// 2. Skapa två PHP-arrayer för att lagra förnamn och efternamn.
$kitchenProducts = ["Blender", "Brödrost", "Citrus juicer", "Gjutjärnsgryta",  "Köksvåg", "Liten kastrull",
 "Lökblender", "Smörgåsgrill", "Stor kastrull", "Vattenkokare"];
$kitchenDescription = ["En enkel blender som kommer att göra din vardag sundare.", 
"Starta dagen med nyrostat bröd.", 
"C-vitamin är bra för kropp och själ.",
 "Robust gryta som passar till alla hushåll, små som stora. Grytan är tillverkad i emaljerat gjutjärn med jämn värmefördelning som bevarar värmen ända upp till kanten. ",
 "Väg maten du tillagar för att kunna räkna kalorier.", 
 "Perfekt till att koka vatten.",
 "Undvik att gråta varje gång du har med lök att göra.",
 "Perfekt till mackor.", 
 "Laga mat till hela familjen.", 
 "Bäst prestanda i marknaden enligt Ahmed och Omar.",];
 $kitchenPrice =["200","350","150","700","250","180","70","320","380","190"];
 $kitchenImage = ["http://localhost\Webshop\image\Blender.jpg","http://localhost\Webshop\image\Brödrost.jpg",
 "http://localhost\Webshop\image\CitrusJuicer.jpg","http://localhost\Webshop\image\Gjutjärnsgryta.jpg",
 "http://localhost\Webshop\image\Köksvåg.jpg","http://localhost\Webshop\image\LitenKastrull.jpg",
 "http://localhost\Webshop\image\Lökblender.jpg","http://localhost\Webshop\image\Smörgåsgrill.jpg",
 "http://localhost\Webshop\image\StorKastrull.jpg","http://localhost\Webshop\image\Vattenkokare.jpg"];
 $lagersaldo = [rand(0,50) ,rand(0,50),rand(0,50),rand(0,50),rand(0,50),rand(0,50),
 rand(0,50),rand(0,50),rand(0,50),rand(0,50)];

$products = array();   

for ($i=0; $i < 10 ; $i++) { 

    $product = array(
        "product" => $kitchenProducts[$i],
        "description" => $kitchenDescription[$i],
        "price" =>$kitchenPrice[$i],
        "image" =>$kitchenImage[$i],
        "lagersaldo" =>$lagersaldo[$i]
      
    );

    array_push($products, $product);

}

// 4. Konvertera PHP-arrayen till en JSON-string.
$json = json_encode($products, JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);

// Skicka JSON till klienten.
echo $json;