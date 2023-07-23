<?php

namespace App\Services\PackageService;


abstract class PackageService implements PackageServiceInterface{
    protected $type;
    protected function getInstalledPackages()
    {
        $packageNames = \Composer\InstalledVersions::getInstalledPackagesByType($this->type);
        $packagesArray = [];
    foreach($packageNames as $package)
    {
        array_push($packagesArray,(object)[
            'name' => $package,
            'version' => $this->getVersion($package),
            'path' => $this->getPath($package),
        ]);
    }

    return $packagesArray;
    }

    public function getVersion($packageName) : string
    {
        return \Composer\InstalledVersions::getVersion($packageName);
    }

    public function getPath($packageName) : string
    {
        return str_replace(['/','\\composer\\..\\'],'\\',\Composer\InstalledVersions::getInstallPath($packageName));
    }
}