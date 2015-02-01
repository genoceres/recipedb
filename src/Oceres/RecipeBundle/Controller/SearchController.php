<?php

namespace Oceres\RecipeBundle\Controller;

use Oceres\RecipeBundle\Entity\Recipe;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SearchController extends Controller
{
	public function searchAction()
	{

		$request = $this->getRequest();
		$rawKeywords = $request->query->get('keywords');
		
		$keywords = trim(str_replace(',',' ',$rawKeywords));
		
		$repo =  $this->getDoctrine()->getRepository('OceresRecipeBundle:Recipe');
		
		$qparams = array('keywords' => $keywords);
		
		$query = $repo->createQueryBuilder('p')
			->add('where', 'MATCH_AGAINST(p.tags, p.title, :keywords) > 0')
			->setParameters($qparams)
			->getQuery()
			->getResult();
		
		$params = array('results' => $query, 'keywords' => $rawKeywords);
		
		return $this->render('OceresRecipeBundle:Frontend:results.html.twig',$params);
	}


}


