<?php

namespace Drupal\form_in_sms\Controller;

use Drupal\Core\Controller\ControllerBase;

class HelloController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    );
  }

}