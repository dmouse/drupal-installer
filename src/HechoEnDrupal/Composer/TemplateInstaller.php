<?php

namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;
use Composer\Repository\InstalledRepositoryInterface;

class TemplateInstaller extends LibraryInstaller {

  public function isInstalled(InstalledRepositoryInterface $repo, PackageInterface $package) {
    print_r($package);
    print_r($repo);
  }
}
