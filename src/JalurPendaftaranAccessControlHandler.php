<?php

namespace Drupal\jalur_pendaftaran;

use Drupal\Core\Entity\EntityAccessControlHandler;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Access controller for the Jalur pendaftaran entity.
 *
 * @see \Drupal\jalur_pendaftaran\Entity\JalurPendaftaran.
 */
class JalurPendaftaranAccessControlHandler extends EntityAccessControlHandler {

  /**
   * {@inheritdoc}
   */
  protected function checkAccess(EntityInterface $entity, $operation, AccountInterface $account) {
    /** @var \Drupal\jalur_pendaftaran\Entity\JalurPendaftaranInterface $entity */
    switch ($operation) {
      case 'view':
        if (!$entity->isPublished()) {
          return AccessResult::allowedIfHasPermission($account, 'view unpublished jalur pendaftaran entities');
        }
        return AccessResult::allowedIfHasPermission($account, 'view published jalur pendaftaran entities');

      case 'update':
        return AccessResult::allowedIfHasPermission($account, 'edit jalur pendaftaran entities');

      case 'delete':
        return AccessResult::allowedIfHasPermission($account, 'delete jalur pendaftaran entities');
    }

    // Unknown operation, no opinion.
    return AccessResult::neutral();
  }

  /**
   * {@inheritdoc}
   */
  protected function checkCreateAccess(AccountInterface $account, array $context, $entity_bundle = NULL) {
    return AccessResult::allowedIfHasPermission($account, 'add jalur pendaftaran entities');
  }

}
