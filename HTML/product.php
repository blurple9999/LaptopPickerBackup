<?php

namespace App;

class Product
{
    public $cpu_series;
    public $operating_system;
    public $touch_screen;
    public $aspect_ratio;
    public $refresh_rate;

    public function setCpuSeries($cpuSeries)
    {
        $this->cpu_series = $cpuSeries;
    }
    
    public function getCpuSeries()
    {
        return $this->cpu_series;
    }
    
    public function setOperatingSystem($operatingSystem)
    {
        $this->operating_system = $operatingSystem;
    }
    
    public function getOperatingSystem()
    {
        return $this->operating_system;
    }

    public function setTouchScreen($touchScreen)
    {
        $this->touch_screen = $touchScreen;
    }
    
    public function getTouchScreen()
    {
        return $this->touch_screen;
    }

    public function setAspectRatio($aspectRatio)
    {
        $this->aspect_ratio = $aspectRatio;
    }
    
    public function getAspectRatio()
    {
        return $this->aspect_ratio;
    }

    public function setRefreshRate($refreshRate)
    {
        $this->refresh_rate = $refreshRate;
    }
    
    public function getRefreshRate()
    {
        return $this->refresh_rate;
    }

    
}