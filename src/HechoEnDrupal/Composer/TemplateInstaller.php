<?php

namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;
use Composer\Json\JsonFile;
use Composer\Repository\ArrayRepository;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Util\Filesystem;

class TemplateInstaller extends LibraryInstaller {

  private $drupal_composer = [];

  public function __construct(IOInterface $io, Composer $composer, $type = 'library', Filesystem $filesystem = null){
    parent::__construct($io, $composer, $type, $filesystem);
    $json = new JsonFile('../drupal8.dev/composer.lock');
    $composer_lock = $json->read();
    foreach ($composer_lock['packages'] as $package) {
      array_push($this->drupal_composer, $package['name']);
    }
  }

  public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package) {

    if (in_array($package->getName(), $this->drupal_composer)){
      $this->uninstall($repo,$package);
      return true;
    }
    else {
      return false;
    }
  }



}
