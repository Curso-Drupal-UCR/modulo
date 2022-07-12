<?php

namespace Drupal\api_consumer\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides to Random Cat a block value
 *
 * @Block(
 *   id = "api_consumer",
 *   admin_label = @Translation("Api Consumer - Random Cat block"),
 *   category = @Translation("Api Consumer - Random Image"),
 * )
 */

class RandomCat extends BlockBase
{

  /**
   * {@inheritdoc}
   */

  public function build()
  {
    return array(
      '#markup' => $this->t('
          <form action="/randomcat" method="GET" style="">
            <img src="https://proxy.duckduckgo.com/iu/?u=http%3A%2F%2Facidcow.com%2Fpics%2F20110608%2Fcats_cats_27.jpg&f=1" class="img-fluid">
            <input class="btn btn-primary w-100 px-3" type="submit" value="Get Other Cat Here">
          </form>
       '),
    );
  }
}
