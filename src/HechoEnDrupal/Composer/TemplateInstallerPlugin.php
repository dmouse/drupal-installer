<?php
namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Plugin\PluginInterface;

class TemplateInstallerPlugin implements PluginInterface {

  public function activate(Composer $composer, IOInterface $io){
    $installer = new TemplateInstaller($io, $composer);
    $composer->getInstallationManager()->addInstaller($installer);
  }

}
