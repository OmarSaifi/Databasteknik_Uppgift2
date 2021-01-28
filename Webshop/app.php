<?php

class App
{
    public static $endpoint = "http://localhost/Webshop/array.php";


    public static function main()
    {

        try {
            $array = self::getData();
            self::viewData($array);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public static function getData()
    {

        $json = @file_get_contents(self::$endpoint);


        if (!$json)
            throw new Exception("Cannot access " . self::$endpoint);

        return json_decode($json, true);
    }

    public static function viewData($array)
    {


        $template = "";

        foreach ($array as $key => $product) {
            $template .= "
        <div>
            <h1>
                $product[product]
            </h1>
            <img 
                src='$product[image]' 
                alt='Image on products'
                class='img-fluid' width = 300px >  
            <p>
            $product[description] 
            </p>
            <hr>
            <p>Pris: $product[price] kr
               </p>
               <hr>
              Lager saldo: $product[lagersaldo] st
        </div>";
        }

        echo $template;
    }
}
