<?php
namespace Application;

use Zend\Console\Adapter\AdapterInterface;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConsoleUsageProviderInterface, ConfigProviderInterface
{
    public function getConsoleUsage(AdapterInterface $console)
    {
        return  [
            'hello-world' => 'Show the hello world! message'
        ];
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
