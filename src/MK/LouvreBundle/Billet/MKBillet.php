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
  public function billet($redirection)
  {
    $datetime = new \DateTime();
    $session = new Session();
    $jour = $session->get('dateReservation')->format('j');
    $mois = $session->get('dateReservation')->format('m');
    $annee = $session->get('dateReservation')->format('Y');
    if($session->get('typeBillet') == 1){

      if ($datetime->format('j') == $jour){

        if($datetime->format('m') == $mois){

          if($datetime->format('Y') == $annee){

            if($datetime->format('H') > 13){
              
              $session->clear();
              $session->getFlashBag()->add('errors', 'Erreur impossible de prendre un billet journée il est plus de 14h');
              return $redirection;
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
    else{
      return 0;
    }
  }
}