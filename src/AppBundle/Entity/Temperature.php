<?php

namespace AppBundle\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Temperature
 *
 * @ORM\Table(name="temperatures")
 * @ORM\Entity
 **/

class Temperature
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="datetime")
     * @var DateTime
     */
    private $date;
    /**
     * @ManyToOne(targetEntity="City")
     * @JoinColumn(name="city_id", referencedColumnName="id")
     */
    private $city;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature_high", type="float")
     */
    private $temperatureHigh;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature_low", type="float")
     */
    private $temperatureLow;

    /**
     * @ManyToOne(targetEntity="Provider")
     * @JoinColumn(name="provider_id", referencedColumnName="id")
     */
    private $provider;

    /**
     * @var integer
     *
     * @ORM\Column(name="humidity", type="integer")
     */
    private $humidity;

    /**
     * @var float
     *
     * @ORM\Column(name="pressure", type="float")
     */
    private $pressure;


    /**
     * Get id.
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date.
     *
     * @param string $date
     * @return Temperature
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set city.
     *
     * @param integer $city
     * @return Temperature
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set temperature.
     *
     * @param float $temperatureHigh
     * @return Temperature
     */
    public function setTemperatureHigh($temperatureHigh)
    {
        $this->temperatureHigh = $temperatureHigh;
    }

    /**
     * Get temperature.
     *
     * @return float
     */
    public function getTemperatureHigh()
    {
        return $this->temperatureHigh;
    }

    /**
     * Set temperature.
     *
     * @param string $temperatureLow
     * @return Temperature
     */
    public function setTemperatureLow($temperatureLow)
    {
        $this->temperatureLow = $temperatureLow;
    }

    /**
     * Get temperature.
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperatureLow;
    }

    /**
     * Set provider.
     *
     * @param string $provider
     * @return Provider
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;
    }

    /**
     * Get provider.
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set humidity.
     *
     * @param integer $humidity
     * @return
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;
    }

    /**
     * Get humidity.
     *
     * @return integer
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set pressure.
     *
     * @param float $pressure
     * @return
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;
    }

    /**
     * Get pressure.
     *
     * @return float
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Get temperatureLow
     *
     * @return float
     */
    public function getTemperatureLow()
    {
        return $this->temperatureLow;
    }
}
