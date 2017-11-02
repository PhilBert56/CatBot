<?php


namespace CatBot\GeoLocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TestPostController extends Controller
{
    /**
     * @Route("/Post" , name = "post")
     */


    public function showPostAction(Request $req)
    {

        if (empty($_POST)) {
            echo "Aucune donnée reçue";
        }
        else {
            $post = print_r($_POST, true);
            dump($post);
            //file_put_contents("post_form.log", $post);
        }
        echo 'showPostAction';
        dump($req);
        dump($_POST);
        dump($_GET);
        die();

        return $this->render('CatBotGeoLocBundle:Maps:map.html.twig');

    }


}