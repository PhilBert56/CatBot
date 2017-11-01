<?php

namespace CatBot\GeoLocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
  /**
   * @Route("/" , name = "root")
   */
    public function indexAction()
    {
        return $this->render('CatBotGeoLocBundle:map.html.twig');
    }
}
