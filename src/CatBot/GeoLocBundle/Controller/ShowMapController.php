<?php

namespace CatBot\GeoLocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ShowMapController extends Controller
{
  /**
   * @Route("/Map" , name = "map")
   */
    public function showMapAction()
    {

        //$latitude = 48.751814;
        //$longitude = 2.320857;

        $latitude = 43.070955;
        $longitude = - 0.06446;

        return $this->render('CatBotGeoLocBundle:Maps:map.html.twig',[
          'latitude'=>$latitude,
          'longitude'=>$longitude

        ]);
    }
}
