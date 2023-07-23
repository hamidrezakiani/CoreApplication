<?php

namespace App\Services\PackageService;

class PackageServiceFactory{

    public static function build($packageType)
    {
        $packageService = __NAMESPACE__.'\\'.ucwords($packageType).'PackageService';
        if(class_exists($packageService))
        {
            return new $packageService();
        }
        else
           throw new \Exception("Invalid package type given.");
           
    }
}