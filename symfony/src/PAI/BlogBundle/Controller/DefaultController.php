<?php

namespace PAI\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PAIBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}
