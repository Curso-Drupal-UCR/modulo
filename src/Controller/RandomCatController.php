<?php

/**
 * @file
 * RandomCatController
 */

namespace Drupal\api_consumer\Controller;

use Drupal\Core\Controller\ControllerBase;

class RandomCatController extends ControllerBase
{

  /**
   * callback for GET API method
   */
  public function get_random_cat()
  {
    $pokeId = rand(1, 721);
    $urlAPI = "https://pokeapi.co/api/v2/pokemon/$pokeId";
    $callAPI = file_get_contents($urlAPI);

    $json = json_decode($callAPI, TRUE);

    $pokeName = $json['name'];
    $pokeImage = $json['sprites']['other']['home']['front_default'];

    return [
      '#type' => 'markup',
      '#markup' => $this->t('
         <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <h2 class="py-3 mt-5">Your Random Image is:</h2>
                <p>' . $pokeName . '</p>
                <img src="' . $pokeImage . '" class="img-fluid mb-5">
              </div>
            </div>
         </div>
      '),
    ];
  }
}
