<?php

namespace Drupal\demo;
use Drupal\Core\Entity\EntityTypeManagerInterface;

/**
 * DemoService.
 */
class DemoService {

  /**
   * The entity type manager service.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;


  /**
   * Set up a new FetchWebResource instance.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *    The entity manager service.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager) {
    $this->entityTypeManager = $entity_type_manager;
  }

  /**
   * Returns demo content.
   */
  public function demo() {
    return t('Demo');
  }

}
