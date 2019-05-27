<?php

namespace Drupal\jalur_pendaftaran\Entity;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Jalur pendaftaran entities.
 *
 * @ingroup jalur_pendaftaran
 */
interface JalurPendaftaranInterface extends ContentEntityInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Jalur pendaftaran name.
   *
   * @return string
   *   Name of the Jalur pendaftaran.
   */
  public function getName();

  /**
   * Sets the Jalur pendaftaran name.
   *
   * @param string $name
   *   The Jalur pendaftaran name.
   *
   * @return \Drupal\jalur_pendaftaran\Entity\JalurPendaftaranInterface
   *   The called Jalur pendaftaran entity.
   */
  public function setName($name);

  /**
   * Gets the Jalur pendaftaran creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Jalur pendaftaran.
   */
  public function getCreatedTime();

  /**
   * Sets the Jalur pendaftaran creation timestamp.
   *
   * @param int $timestamp
   *   The Jalur pendaftaran creation timestamp.
   *
   * @return \Drupal\jalur_pendaftaran\Entity\JalurPendaftaranInterface
   *   The called Jalur pendaftaran entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Jalur pendaftaran published status indicator.
   *
   * Unpublished Jalur pendaftaran are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Jalur pendaftaran is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Jalur pendaftaran.
   *
   * @param bool $published
   *   TRUE to set this Jalur pendaftaran to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\jalur_pendaftaran\Entity\JalurPendaftaranInterface
   *   The called Jalur pendaftaran entity.
   */
  public function setPublished($published);

}
