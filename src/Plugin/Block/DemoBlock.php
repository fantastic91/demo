<?php

namespace Drupal\demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Demo block.
 *
 * @Block(
 *   id = "demo_block",
 *   admin_label = @Translation("Demo block"),
 * )
 */
class DemoBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return ['#markup' => $this->t('Demo block')];
  }

}
