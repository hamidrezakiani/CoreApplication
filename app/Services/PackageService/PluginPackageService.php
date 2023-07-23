<?php

namespace App\Services\PackageService;

class PluginPackageService extends PackageService{
    protected $type = 'plugin';

    public function getInstalled() : array
    {
        return $this->getInstalledPackages();
    }
}