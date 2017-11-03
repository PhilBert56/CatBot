<?php

namespace CatBot\GeoLocBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

class Observation
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $latitude;


    /**
     * @ORM\Column(type="string")
     */
    private $longitude;


    /**
     * @ORM\Column(type= "integer")
     */
    private $observateurId;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getObservateurId()
    {
        return $this->observateurId;
    }

    /**
     * @param mixed $observateurId
     */
    public function setObservateurId($observateurId)
    {
        $this->observateurId = $observateurId;
    }




}