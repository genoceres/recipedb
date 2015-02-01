<?php

namespace Oceres\RecipeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontendController extends Controller
{
    public function indexAction()
    {
    	
    	//load the last 10 recipes
    	$repository = $this->getDoctrine()
    	->getRepository('OceresRecipeBundle:Recipe');
    	
    	$results = $repository->createQueryBuilder('p')
    	->orderBy('p.lastaccessed', 'DESC')
    	->setMaxResults(10)
    	->getQuery()
    	->getResult();
    	
    	
    	$params = array('recentRecipes' => $results);
    	
        return $this->render('OceresRecipeBundle:Frontend:index.html.twig',$params);
    }

}
