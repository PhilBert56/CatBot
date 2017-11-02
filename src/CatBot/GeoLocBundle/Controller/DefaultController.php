<?php

namespace CatBot\GeoLocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
  /**
   * @Route("/" , name = "")
   */
    public function indexAction()

    {


        return $this->render('CatBotGeoLocBundle:default.html.twig');
    }
}
