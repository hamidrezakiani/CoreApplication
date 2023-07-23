<?php

namespace Tests\Unit\PackageServiceTest;

use PHPUnit\Framework\TestCase;
use App\Services\PackageService\PluginPackageService;
class PluginPackageServiceTest extends TestCase
{
    private $pluginPackageService;

    public function __construct($name)
    {
       parent::__construct($name);
       $this->pluginPackageService = new PluginPackageService();
    }
    /**
     * unit test for get installed packages.
     */
    public function test_get_installed_plugins_is_successful(): void
    {
        $plugins = $this->pluginPackageService->getInstalled();
        $this->assertTrue(is_array($plugins));
    }
    /**
     * unit test for get version of package.
     */
    public function test_get_version_of_plugins_is_successful(): void
    {
        $version = $this->pluginPackageService->getVersion('laravel/laravel');
        $this->assertTrue(is_string($version));
    }

   /**
     * unit test for get version of package.
     */
    public function test_get_path_of_plugins_is_successful(): void
    {
        $path = $this->pluginPackageService->getVersion('laravel/laravel');
        $this->assertTrue(is_string($path));
    }

}
