<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        '_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExpensesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_oferta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExpensesBundle\\Controller\\DefaultController::pokojeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pokoje',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_resta' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExpensesBundle\\Controller\\DefaultController::restaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resta',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_dojazd' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExpensesBundle\\Controller\\DefaultController::dojazdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/dojazd',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_rezerwacja' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExpensesBundle\\Controller\\DefaultController::signupAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/rezer',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_regul' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ExpensesBundle\\Controller\\DefaultController::regulAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/regulamin',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
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
