<?php

namespace Drupal;

use Drupal\DrupalExtension\Context\RawDrupalContext;

/**
 * FeatureContext class defines custom step definitions for Behat.
 */
class FeatureContext extends RawDrupalContext {

  /**
   * Every scenario gets its own context instance.
   *
   * You can also pass arbitrary arguments to the
   * context constructor through behat.yml.
   */
  public function __construct() {

  }

  /**
   * @Given I am logged in as user with name :name
   */
  public function iAmLoggedInAsUserWithName($name) {
    $domain = $this->getMinkParameter('base_url');
    $uli = $this->getDriver('drush')->drush('uli', [
      "--name '" . $name . "'",
      "--browser=0",
      "--uri=$domain",
    ]);
    $uli = trim($uli);
    $this->getSession()->visit($uli);
  }

}
