<?php

namespace App\Services\PackageService;

class LibraryPackageService extends PackageService{
    protected $type = 'library';

    public function getInstalled() : array
    {
        return $this->getInstalledPackages();
    }
}