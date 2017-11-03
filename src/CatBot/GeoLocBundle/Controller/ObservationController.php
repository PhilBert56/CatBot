<?php

namespace CatBot\GeoLocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use CatBot\GeoLocBundle\Entity\Observation;
use CatBot\GeoLocBundle\Form\ObservationFormType;

class ObservationController extends Controller
{
  /**
   * @Route("/Observation" , name = "observation")
   */
    public function showLocalisationAction(Request $request)
    {

        /*  Obternir position via adresse IP ?
        ou à partir de la dernière observation de l'utilisateur*/

        /* Pour le moment : positionné initialement sur le point zéro des rotue de France */
        $latitude = 48.85339895;
        $longitude = 2.34878361;

        $observation = new Observation();
        $observation->setLatitude($latitude);
        $observation->setLongitude($longitude);

        $form = $this->get('form.factory')->create(ObservationFormType::class, $observation);


        if ($request->isMethod('POST')) {

            $form->handleRequest($request);

            // On vérifie que les valeurs entrées sont correctes

            if ($form->isValid()) {

                $latitude = $form['latitude']->getData();
                $longitude = $form['longitude']->getData();
                $observation->setLatitude($latitude);
                $observation->setLongitude($longitude);

                /* l'observation est localisée - on retrace la carte centrée sur le lieu de l'observation*/
                return $this->render('CatBotGeoLocBundle:Maps:map.html.twig', [
                    'observation' => $observation,
                    'observationForm' => $form->createView()
                ]);
            }

        }


        return $this->render('CatBotGeoLocBundle:Maps:map.html.twig',[
            'observation' => $observation,
            'observationForm' => $form->createView()

        ]);
    }



}
