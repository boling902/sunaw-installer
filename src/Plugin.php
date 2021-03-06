<?php

namespace sunaw\composer;


use Composer\Composer;
use Composer\Installer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new SunawFramework($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}