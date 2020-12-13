<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RecordingRepository::class)
 * @ORM\Table(name="`recording`")
 */
class Recording
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $fio;

    /**
     * @ORM\Column(type="float")
     */
    private $temperature;

    /**
     * @ORM\Column(type="string")
     */
    private $soreThroat;

    /**
     * @ORM\Column(type="string")
     */
    private $cough;

    /**
     * @ORM\Column(type="string")
     */
    private $chills;

    /**
     * @ORM\Column(type="string")
     */
    private $musclePain;

    /**
     * @ORM\Column(type="string")
     */
    private $fatigue;

    /**
     * @ORM\Column(type="string")
     */
    private $dyspnea;

    /**
     * @ORM\Column(type="string")
     */
    private $runnyNose;

    /**
     * @ORM\Column(type="string")
     */
    private $result;

    /**
     * Recording constructor.
     * @param $fio
     * @param $temperature
     * @param $soreThroat
     * @param $cough
     * @param $chills
     * @param $musclePain
     * @param $fatigue
     * @param $dyspnea
     * @param $runnyNose
     * @param $result
     */
    public function __construct($fio, $temperature, $soreThroat, $cough, $chills, $musclePain, $fatigue, $dyspnea, $runnyNose, $result)
    {
        $this->fio = $fio;
        $this->temperature = $temperature;
        $this->soreThroat = $soreThroat;
        $this->cough = $cough;
        $this->chills = $chills;
        $this->musclePain = $musclePain;
        $this->fatigue = $fatigue;
        $this->dyspnea = $dyspnea;
        $this->runnyNose = $runnyNose;
        $this->result = $result;
    }


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
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param mixed $fio
     */
    public function setFio($fio): void
    {
        $this->fio = $fio;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result): void
    {
        $this->result = $result;
    }



    /**
     * @return mixed
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * @param mixed $temperature
     */
    public function setTemperature($temperature): void
    {
        $this->temperature = $temperature;
    }

    /**
     * @return mixed
     */
    public function getSoreThroat()
    {
        return $this->soreThroat;
    }

    /**
     * @param mixed $soreThroat
     */
    public function setSoreThroat($soreThroat): void
    {
        $this->soreThroat = $soreThroat;
    }

    /**
     * @return mixed
     */
    public function getCough()
    {
        return $this->cough;
    }

    /**
     * @param mixed $cough
     */
    public function setCough($cough): void
    {
        $this->cough = $cough;
    }

    /**
     * @return mixed
     */
    public function getChills()
    {
        return $this->chills;
    }

    /**
     * @param mixed $chills
     */
    public function setChills($chills): void
    {
        $this->chills = $chills;
    }

    /**
     * @return mixed
     */
    public function getMusclePain()
    {
        return $this->musclePain;
    }

    /**
     * @param mixed $musclePain
     */
    public function setMusclePain($musclePain): void
    {
        $this->musclePain = $musclePain;
    }

    /**
     * @return mixed
     */
    public function getFatigue()
    {
        return $this->fatigue;
    }

    /**
     * @param mixed $fatigue
     */
    public function setFatigue($fatigue): void
    {
        $this->fatigue = $fatigue;
    }

    /**
     * @return mixed
     */
    public function getDyspnea()
    {
        return $this->dyspnea;
    }

    /**
     * @param mixed $dyspnea
     */
    public function setDyspnea($dyspnea): void
    {
        $this->dyspnea = $dyspnea;
    }

    /**
     * @return mixed
     */
    public function getRunnyNose()
    {
        return $this->runnyNose;
    }

    /**
     * @param mixed $runnyNose
     */
    public function setRunnyNose($runnyNose): void
    {
        $this->runnyNose = $runnyNose;
    }



}