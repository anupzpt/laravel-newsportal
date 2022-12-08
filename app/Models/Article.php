<?php
namespace App\Models;//unique nameassign to file
class Article{
    public static function getALLArticles(){
        return [
            [
                'id' => 1,
                'title' => "News one",
                'desc'=>"Badhar Ghar bata niskiyako thiyo . Badhar Falful pasal ma gayo ra falful choryo. Tyatikai mah police ayo ra badhar leh dhama dham dahahahahahahha khayo kutai. "
            ],
            [
                'id' => 2,
                'title' => "News two",
                'desc'=>"Khuching khub budruk budruk ufrirako thiyo fela paryo." 
            ],
        ];
    }
    public static function getSingleArticles($id){
        $articles = self::getAllArticles();
        foreach($articles as $value){
            if($value['id']===$id){
                return $value;
        };
    }
    }    
}
?>