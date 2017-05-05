<?php
/**
 * Created by PhpStorm.
 * User: mindfire
 * Date: 1/5/17
 * Time: 4:19 PM
 */

namespace Test\firstBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ContentController extends Controller {
    public function helloAction($name) {
        return $this->render('firstBundle:Content:hello.html.twig', array(
            'name' => $name
        ));
    }
}