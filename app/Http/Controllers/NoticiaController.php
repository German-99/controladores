<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function lista() {
        $noticias = array();
        $noticias[] = array(
            "id" => 3,
            "titulo" => "Descubren cura del cancer",
            "fecha" => "10/01/2021");
        $noticias[] = array(
            "id" => 4, 
            "titulo" => "Vuelven clases presenciales",
            "fecha" => "11/01/2021");

        
        $argumentos = array();
        $argumentos["noticias"] = $noticias;

            return view("noticias.lista", $argumentos);
    }

    public function detalles($noticia) {
        //Simulacion de solicitud de detalles de noticia
        $detalles_noticia = array();
        $detalles_noticia["titulo"] = "Noticia #" . $noticia;
        $detalles_noticia["autor"] = "Autor de la noticia #" . $noticia;
        $detalles_noticia["fecha"] = "28/01/2021" . $noticia;
        $detalles_noticia["cuerpo"] = "Este es el texto de la noticia #" . $noticia;
        $detalles_noticia["foto"] = "https://ismorbo.com/wp-content/uploads/2021/01/cdprojektred.jpg";

        $argumentos = array();
        $argumentos["noticia"]  = $detalles_noticia;

        return view('noticias.detalles', $argumentos);
    } 
}
