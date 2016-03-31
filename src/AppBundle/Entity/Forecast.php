<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Forecast
 *
 * @ORM\Table(name="forecasts")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ForecastRepository")
 */
class Forecast
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Provider
     *
     * @ManyToOne(targetEntity="Provider")
     * @JoinColumn(name="provider_id", referencedColumnName="id")
     *
     */
    private $provider;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="forecast_date", type="date")
     */
    private $forecastDate;

    /**
     * @var int
     *
     * @ORM\Column(name="forecast_days", type="integer")
     */
    private $forecastDays;

    /**
     * @var int
     *
     * @ORM\Column(name="city_id", type="integer")
     */
    private $cityId;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature_high", type="float", nullable=true)
     */
    private $temperatureHigh;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature_low", type="float", nullable=true)
     */
    private $temperatureLow;

    /**
     * @var float
     *
     * @ORM\Column(name="deviation", type="float", nullable=true)
     */
    private $deviation;

    /**
     * @var int
     *
     * @ORM\Column(name="humidity", type="integer", nullable=true)
     */
    private $humidity;

    /**
     * @var int
     *
     * @ORM\Column(name="pressure", type="integer", nullable=true)
     */
    private $pressure;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set provider
     *
     * @param integer $provider
     *
     * @return Forecast
     */
    public function setProvider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return int
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * Set forecastDate
     *
     * @param \DateTime $forecastDate
     *
     * @return Forecast
     */
    public function setForecastDate($forecastDate)
    {
        $this->forecastDate = $forecastDate;

        return $this;
    }

    /**
     * Get forecastDate
     *
     * @return \DateTime
     */
    public function getForecastDate()
    {
        return $this->forecastDate;
    }

    /**
     * Set cityId
     *
     * @param integer $cityId
     *
     * @return Forecast
     */
    public function setCityId($cityId)
    {
        $this->cityId = $cityId;

        return $this;
    }

    /**
     * Get cityId
     *
     * @return int
     */
    public function getCityId()
    {
        return $this->cityId;
    }

    /**
     * Set temperatureHigh
     *
     * @param float $temperatureHigh
     *
     * @return Forecast
     */
    public function setTemperatureHigh($temperatureHigh)
    {
        $this->temperatureHigh = $temperatureHigh;

        return $this;
    }

    /**
     * Get temperatureHigh
     *
     * @return float
     */
    public function getTemperatureHigh()
    {
        return $this->temperatureHigh;
    }

    /**
     * Set temperatureLow
     *
     * @param float $temperatureLow
     *
     * @return Forecast
     */
    public function setTemperatureLow($temperatureLow)
    {
        $this->temperatureLow = $temperatureLow;

        return $this;
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

    /**
     * Set deviation
     *
     * @param float $deviation
     *
     * @return Forecast
     */
    public function setDeviation($deviation)
    {
        $this->deviation = $deviation;

        return $this;
    }

    /**
     * Get deviation
     *
     * @return float
     */
    public function getDeviation()
    {
        return $this->deviation;
    }

    /**
     * Set humidity
     *
     * @param integer $humidity
     *
     * @return Forecast
     */
    public function setHumidity($humidity)
    {
        $this->humidity = $humidity;

        return $this;
    }

    /**
     * Get humidity
     *
     * @return int
     */
    public function getHumidity()
    {
        return $this->humidity;
    }

    /**
     * Set pressure
     *
     * @param integer $pressure
     *
     * @return Forecast
     */
    public function setPressure($pressure)
    {
        $this->pressure = $pressure;

        return $this;
    }

    /**
     * Get pressure
     *
     * @return int
     */
    public function getPressure()
    {
        return $this->pressure;
    }

    /**
     * Set forecastDays
     *
     * @param integer $forecastDays
     *
     * @return Forecast
     */
    public function setForecastDays($forecastDays)
    {
        $this->forecastDays = $forecastDays;

        return $this;
    }

    /**
     * Get forecastDays
     *
     * @return integer
     */
    public function getForecastDays()
    {
        return $this->forecastDays;
    }
}