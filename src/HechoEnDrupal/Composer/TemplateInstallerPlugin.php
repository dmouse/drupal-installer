<?php
namespace HechoEnDrupal\Composer;

use Composer\Package\PackageInterface;
use Composer\Installer\LibraryInstaller;

class TemplateInstallerPlugin extends LibraryInstaller {
  /**
   * Initializes base installer.
   *
   * @param PackageInterface $package
   * @param Composer         $composer
   */
  public function __construct(PackageInterface $package = null, Composer $composer = null) {
    $this->composer = $composer;
    $this->package = $package;
  }

  public function activate(Composer $composer, IOInterface $io){

  }

  /**
   * {@inheritDoc}
   */
  public function getPackageBasePath(PackageInterface $package) {
    $prefix = substr($package->getPrettyName(), 0, 23);
    if ('phpdocumentor/template-' !== $prefix) {
      throw new \InvalidArgumentException(
        'Unable to install template, phpdocumentor templates '
        .'should always start their package name with '
        .'"phpdocumentor/template-"'
      );
    }
    return 'data/templates/'.substr($package->getPrettyName(), 23);
  }

  /**
   * {@inheritDoc}
   */
  public function supports($packageType){
    return 'drupal-template' === $packageType;
  }
}
