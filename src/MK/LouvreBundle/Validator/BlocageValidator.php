<?php

namespace MK\LouvreBundle\Validator;

use MK\LouvreBundle\Entity\Reservation;
use MK\LouvreBundle\Form\ReservationType;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class BlocageValidator extends ConstraintValidator
{
	private $requestStack;
	private $em;

	public function __construct(RequestStack $requestStack, EntityManagerInterface $em)
	{
		$this->requestStack = $requestStack;
		$this->em           = $em;
	}

	public function validate($value, Constraint $constraint)
	{

		$listResa = $this->em
	      ->getRepository('MKLouvreBundle:Reservation')
			->limitationReservation($value)
		;

		$key = 1;

		foreach ($listResa as $key => $list) {
			
			foreach ($list as $key => $resa) {
				
				$resa = intval($resa);
				
				//dump($value); die();
			
				if ($resa > 5){

					$this->context->addViolation($constraint->message);
				}
			}
		}
	}
}