<?php

namespace CatBot\GeoLocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class TestEnvoiDonneesController extends Controller
{
  /**
   * @Route("/Test" , name = "test")
   */
    public function showTestAction()
    {
        echo 'showTestAction';


        dump($_GET);
        if ($_GET) {
        $data1 = $_GET['plusFort'];
        $data2 = $_GET['nom'];
        echo '</br>'.$data1.'  '.$data2.'</br>';}

        return $this->render('CatBotGeoLocBundle:Maps:testEnvoiDonnees.html.twig');
    }
}
