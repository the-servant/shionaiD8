<?php

/**
 * @file
 * Contains \Drupal\aarts_test\Controller\Aarts_testController.
 */

namespace Drupal\aarts_test\Controller;

use Drupal\Core\Controller\ControllerBase;

class Aarts_testController extends ControllerBase {


  public function content() {
      $sHelloWorld = $this->t('Hello, World!');
      
    return array(
        '#type' => 'markup',
        '#markup' => $sHelloWorld,
    );
  }


}
