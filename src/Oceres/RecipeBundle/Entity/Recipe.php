<?php
namespace Oceres\RecipeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="recipes")
 */
class Recipe {
	
	
	/**
	 * @ORM\Column(type="integer", name="rp_id")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=100, name="rp_title")
	 */
	protected $title;
	
	/**
	 * @ORM\Column(type="string", length=100, name="rp_chef")
	 */
	protected $chef;
	
	/**
	 * @ORM\Column(type="string", length=20, name="rp_course")
	 */
	protected $course;
	
	/**
	 * @ORM\Column(type="integer", name="rp_serves")
	 */
	protected $serves;
	
	/**
	 * @ORM\Column(type="string", length=50, name="rp_preptime")
	 */
	protected $preptime;
	
	/**
	 * @ORM\Column(type="string", length=50, name="rp_cooktime")
	 */
	protected $cooktime;
	
	/**
	 * @ORM\Column(type="string", length=4000, name="rp_ingredients")
	 */
	protected $ingredients;
	
	/**
	 * @ORM\Column(type="string", length=4000, name="rp_method")
	 */
	protected $method;
	
	/**
	 * @ORM\Column(type="string", length=20, name="rp_image")
	 */
	protected $image;
	
	/**
	 * @ORM\Column(type="string", length=250, name="rp_tags")
	 */
	protected $tags;
	
	/**
	 * @ORM\Column(type="datetime", name="rp_indt")
	 */
	protected $indt;
	
	/**
	 * @ORM\Column(type="datetime", name="rp_moddt")
	 */
	protected $moddt;
	
	/**
	 * @ORM\Column(type="smallint", name="rp_user")
	 */
	protected $user;
	
	/**
	 * @ORM\Column(type="datetime", name="rp_lastaccessed")
	 */
	protected $lastaccessed;
	
	public function __get($param){
		
		switch($param){
			case 'ingredients':
				$out = explode("\n",$this->ingredients);
				break;
			case 'method':
				$out = explode("\n",$this->method);
				break;
			case 'indt':
			case 'moddt':
			case 'lastaccessed':
				return $this->$param->format('D jS \o\f M, Y');
				break;
			default:
				$out = isset($this->$param) ? $this->$param : '';
		}
		
		return $out;
		
	}
	
	public function __isset($param){
		return property_exists($this,$param);
	}
	
	public function setAccessed(){
		// WILL be saved in the database
		$this->lastaccessed = new \DateTime("now");
	}
	
}