<?php

namespace Oceres\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontendController extends Controller
{
    public function indexAction()
    {
        return $this->render('OceresRecipeBundle:Frontend:index.html.twig');
    }

    public function helloAction($name)
    {
        return $this->render('OceresRecipeBundle:Default:hello.html.twig', array('name' => $name));
    }
}
