<?php

namespace Tests\Unit\PackageServiceTest;

use PHPUnit\Framework\TestCase;
use App\Services\PackageService\LibraryPackageService;
class LibraryPackageServiceTest extends TestCase
{
    private $libraryPackageService;

    public function __construct($name)
    {
       parent::__construct($name);
       $this->libraryPackageService = new LibraryPackageService();
    }
    /**
     * unit test for get installed packages.
     */
    public function test_get_installed_libraries_is_successful(): void
    {
        $libraries = $this->libraryPackageService->getInstalled();
        $this->assertTrue(is_array($libraries));
    }
    /**
     * unit test for get version of package.
     */
    public function test_get_version_of_libraries_is_successful(): void
    {
        $version = $this->libraryPackageService->getVersion('laravel/laravel');
        $this->assertTrue(is_string($version));
    }

   /**
     * unit test for get version of package.
     */
    public function test_get_path_of_libraries_is_successful(): void
    {
        $path = $this->libraryPackageService->getVersion('laravel/laravel');
        $this->assertTrue(is_string($path));
    }

}
