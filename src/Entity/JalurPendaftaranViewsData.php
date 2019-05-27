<?php

namespace Drupal\jalur_pendaftaran\Entity;

use Drupal\views\EntityViewsData;

/**
 * Provides Views data for Jalur pendaftaran entities.
 */
class JalurPendaftaranViewsData extends EntityViewsData {

  /**
   * {@inheritdoc}
   */
  public function getViewsData() {
    $data = parent::getViewsData();

    // Additional information for Views integration, such as table joins, can be
    // put here.
	if (\Drupal::moduleHandler()->moduleExists('pendaftaran')) {
      $data['jalur_pendaftaran']['pendaftaran'] = array(
	    'title' => t('Jalur pendaftaran from pendaftaran'),
	    'relationship' => array(
	      'base' => 'pendaftaran', // The name of the table to join with.
	      'base field' => 'jalur_pendaftaran', // The name of the field on the joined table.
	      'relationship field' => 'id', 
	      'handler' => 'views_handler_relationship',
	      'label' => t('Pendaftaran'),
	      'title' => t('Relation from Pendaftaran'),
	      'field' => [
		  // ID of field handler plugin to use.
		    'id' => 'numeric',
	      ],
	      'sort' => [
		    // ID of sort handler plugin to use.
		    'id' => 'standard',
	      ],
	      'filter' => [
		    // ID of filter handler plugin to use.
		    'id' => 'numeric',
	      ],
	      'id' => 'standard'
        ),
      );		
	}

    return $data;
  }

}
