<?php

namespace App\Services\PackageService;

interface PackageServiceInterface{
    
    public function getInstalled() : array;
    public function getVersion($packageName) : string;
    public function getPath($packageName) : string;

}