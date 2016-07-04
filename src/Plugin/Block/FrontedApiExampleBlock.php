<?php

/**
 * @file
 * Contains \Drupal\frontend_api_example\Plugin\Block\ExampleConfigurableTextBlock.
 */

namespace Drupal\frontend_api_example\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a example or render APi with block.

 * @Block(
 *   id = "frontend_api_example_configurable_text",
 *   admin_label = @Translation("Title of block (frontend_api_example_configurable_text)")
 * )
 */
class FrontedApiExampleBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build['myelement'] = array(
      '#theme' => 'frontend_api_example_block',
      '#title' => 'title text',
      '#body' => 'Body text',
    );
    $build['myelement'] = array(
      '#type' => 'frontend_api_example_block',
      '#title' => 'title text',
      '#body' => 'Body text',
    );
    $build['myelement']['#attached']['library'][] = 'frontend_api_example/frontend_api_example.main';
    $build['myelement']['#attached']['drupalSettings']['frontend_api_example']['name'] = 'Drupal School User';
    return $build;
  }

}
