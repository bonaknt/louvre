<?php

namespace MK\LouvreBundle\Billet;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use MK\LouvreBundle\Controller\DefaultController;
use Symfony\component\HttpFoundation\Session\Session;

class MKBillet
{

  /**
   * Vérifie si le texte est un spam ou non
   *
   * @param string $text
   * @return bool
   */
  public function billet($jour, $mois, $annee)
  {

    $datetime = new \DateTime();
    $session = new Session();
    //$dateR = $jour;

    //$date = $dateR->diff($datetime);
    //$dateFormat = $date->format('%a');
    //dump($datetime->format('j')); die();
    //$difference = intval($dateFormat);
    if($session->get('typeBillet') == 1){
      if ($datetime->format('j') == $jour){

        if($datetime->format('m') == $mois){

          if($datetime->format('Y') == $annee){

            return 1;
          }
          else{
            return 0;
          }
        }
        else{
          return 0;
        }
      }
      else{
        return 0;
      }
    }
    else{
      return 0;
    }
  }
}