<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // _homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_homepage');
            }

            return array (  '_controller' => 'ExpensesBundle\\Controller\\DefaultController::indexAction',  '_route' => '_homepage',);
        }

        // _oferta
        if ($pathinfo === '/pokoje') {
            return array (  '_controller' => 'ExpensesBundle\\Controller\\DefaultController::pokojeAction',  '_route' => '_oferta',);
        }

        // _resta
        if ($pathinfo === '/resta') {
            return array (  '_controller' => 'ExpensesBundle\\Controller\\DefaultController::restaAction',  '_route' => '_resta',);
        }

        // _dojazd
        if ($pathinfo === '/dojazd') {
            return array (  '_controller' => 'ExpensesBundle\\Controller\\DefaultController::dojazdAction',  '_route' => '_dojazd',);
        }

        // _rezerwacja
        if ($pathinfo === '/rezerwacja') {
            return array (  '_controller' => 'ExpensesBundle\\Controller\\DefaultController::signupAction',  '_route' => '_rezerwacja',);
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
