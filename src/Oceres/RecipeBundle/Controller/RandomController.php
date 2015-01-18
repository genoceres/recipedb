<?php

namespace Oceres\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RandomController extends Controller
{
    public function indexAction($limit)
    {
    	$position = mt_rand(0,1) == 1 ? 'up' : 'down';
    	if($position == 'up'){
    		$number = mt_rand(11,$limit);
    	}else{
    		$number = mt_rand(22,$limit);
    	}
    	
    	return $this->render('OceresRecipeBundle:Random:index.html.twig', array('number' => $number, 'position' => $position));
    }

}
