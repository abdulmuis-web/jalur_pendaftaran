<?php

namespace Drupal\jalur_pendaftaran;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Jalur pendaftaran entities.
 *
 * @ingroup jalur_pendaftaran
 */
class JalurPendaftaranListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('ID');
    $header['name'] = $this->t('Jalur pendaftaran');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\jalur_pendaftaran\Entity\JalurPendaftaran */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.jalur_pendaftaran.edit_form',
      ['jalur_pendaftaran' => $entity->id()]
    );
    return $row + parent::buildRow($entity);
  }

}
