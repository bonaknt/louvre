<?php
// src/OC/PlatformBundle/Validator/Antiflood.php

namespace MK\LouvreBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Blocage extends Constraint
{
  public $message = "Cette date est pleine, veuillez choisir une autre date de réservation !";

  public function validatedBy()
  {
    return 'mk_louvre_blocage'; // Ici, on fait appel à l'alias du service
  }
}