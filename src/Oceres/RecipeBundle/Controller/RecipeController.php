<?php

namespace Oceres\RecipeBundle\Controller;

use Oceres\RecipeBundle\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecipeController extends Controller
{
    public function recipeAction($name,$recipeid)
    {
    
    	$em = $this->getDoctrine()->getManager();
    	
    	$recipe = $em->getRepository('OceresRecipeBundle:Recipe')->find($recipeid);
    	
    	$recipe->setAccessed();
    	$em->flush();

    	$params = array('recipe' => $recipe);
        return $this->render('OceresRecipeBundle:Frontend:recipe.html.twig',$params);
    }

}
