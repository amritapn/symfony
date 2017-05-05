<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // symfony_magazine_default_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'symfony_magazine_default_index');
            }

            return array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\DefaultController::indexAction',  '_route' => 'symfony_magazine_default_index',);
        }

        if (0 === strpos($pathinfo, '/issue')) {
            // issue_index
            if (rtrim($pathinfo, '/') === '/issue') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_issue_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'issue_index');
                }

                return array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::indexAction',  '_route' => 'issue_index',);
            }
            not_issue_index:

            // issue_new
            if ($pathinfo === '/issue/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_issue_new;
                }

                return array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::newAction',  '_route' => 'issue_new',);
            }
            not_issue_new:

            // issue_show
            if (preg_match('#^/issue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_issue_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'issue_show')), array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::showAction',));
            }
            not_issue_show:

            // issue_edit
            if (preg_match('#^/issue/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_issue_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'issue_edit')), array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::editAction',));
            }
            not_issue_edit:

            // issue_delete
            if (preg_match('#^/issue/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_issue_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'issue_delete')), array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\IssueController::deleteAction',));
            }
            not_issue_delete:

        }

        if (0 === strpos($pathinfo, '/publication')) {
            // publication_index
            if (rtrim($pathinfo, '/') === '/publication') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_publication_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'publication_index');
                }

                return array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::indexAction',  '_route' => 'publication_index',);
            }
            not_publication_index:

            // publication_new
            if ($pathinfo === '/publication/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_publication_new;
                }

                return array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::newAction',  '_route' => 'publication_new',);
            }
            not_publication_new:

            // publication_show
            if (preg_match('#^/publication/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_publication_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_show')), array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::showAction',));
            }
            not_publication_show:

            // publication_edit
            if (preg_match('#^/publication/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_publication_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_edit')), array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::editAction',));
            }
            not_publication_edit:

            // publication_delete
            if (preg_match('#^/publication/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_publication_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'publication_delete')), array (  '_controller' => 'Symfony\\MagazineBundle\\Controller\\PublicationController::deleteAction',));
            }
            not_publication_delete:

        }

        // first_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'first_homepage')), array (  '_controller' => 'Test\\firstBundle\\Controller\\ContentController::helloAction',));
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
