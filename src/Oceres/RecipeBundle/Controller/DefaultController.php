<?php

namespace Oceres\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OceresRecipeBundle:Default:index.html.twig', array('name' => $name));
    }

    public function helloAction($name)
    {
        return $this->render('OceresRecipeBundle:Default:index.html.twig', array('name' => $name));
    }
}
