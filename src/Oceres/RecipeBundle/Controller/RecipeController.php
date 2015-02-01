<?php

namespace Oceres\RecipeBundle\Controller;

use Oceres\RecipeBundle\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RecipeController extends Controller
{
    public function recipeAction($name,$recipeid)
    {
    
    	$recipe = $this->getDoctrine()->getRepository('OceresRecipeBundle:Recipe')->find($recipeid);
    	

    	$params = array('recipe' => $recipe);
        return $this->render('OceresRecipeBundle:Frontend:recipe.html.twig',$params);
    }

}
