<?php
namespace MyRecipesDosBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;

class Author
{
	private $id;
	protected $name;
	protected $surname;
	protected $recipes;

    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->recipes = new ArrayCollection;
    }

    #Obtener las recetas de un autor.
    public function getRecipes()
    {
    	return $this->recipes;
    }

}
