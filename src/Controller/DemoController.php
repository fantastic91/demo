<?php

namespace Drupal\demo\Controller;

use Drupal\node\NodeInterface;

/**
 * DemoController.
 */
class DemoController {

  /**
   * Handles param route.
   */
  public function demo() {
    return ['#markup' => t('Demo')];
  }

  /**
   * Handles param route.
   */
  public function param(NodeInterface $node) {
    return ['#markup' => $node->label()];
  }

}
