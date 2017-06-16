<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'mk_louvre_reservation' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::reservationAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mk_louvre_ticket' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::ticketAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ticket',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mk_louvre_recapitulatif' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::recapitulatifAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/recapitulatif',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mk_louvre_paiement' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MK\\LouvreBundle\\Controller\\DefaultController::paiementAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/paiement',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
