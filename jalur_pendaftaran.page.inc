<?php

/**
 * @file
 * Contains jalur_pendaftaran.page.inc.
 *
 * Page callback for Jalur pendaftaran entities.
 */

use Drupal\Core\Render\Element;

/**
 * Prepares variables for Jalur pendaftaran templates.
 *
 * Default template: jalur_pendaftaran.html.twig.
 *
 * @param array $variables
 *   An associative array containing:
 *   - elements: An associative array containing the user information and any
 *   - attributes: HTML attributes for the containing element.
 */
function template_preprocess_jalur_pendaftaran(array &$variables) {
  // Fetch JalurPendaftaran Entity Object.
  $jalur_pendaftaran = $variables['elements']['#jalur_pendaftaran'];

  // Helpful $content variable for templates.
  foreach (Element::children($variables['elements']) as $key) {
    $variables['content'][$key] = $variables['elements'][$key];
  }
}
