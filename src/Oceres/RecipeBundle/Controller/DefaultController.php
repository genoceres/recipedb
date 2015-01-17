<?php

namespace Oceres\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('OceresRecipeBundle:Default:index.html.twig', array('name' => $name));
    }
}
