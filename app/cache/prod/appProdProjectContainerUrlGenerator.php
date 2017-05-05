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
        'symfony_magazine_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'issue_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/issue/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'issue_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/issue/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'issue_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/issue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'issue_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/issue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'issue_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/issue',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publication_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publication/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publication_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/publication/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publication_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/publication',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publication_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/publication',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'publication_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/publication',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'first_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Test\\firstBundle\\Controller\\ContentController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
