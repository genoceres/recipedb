<?php

namespace Oceres\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
    	$number = mt_rand(1,$limit);
    	return $this->render('OceresRecipeBundle:Random:index.html.twig', array('number' => $number));
    }

}
