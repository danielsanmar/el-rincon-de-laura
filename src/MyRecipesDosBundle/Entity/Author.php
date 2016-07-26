<?php
namespace MyRecipesDosBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class Author
{
	private $id;
	protected $name;
	protected $surname;
	protected $recipes;

    public function __construct()
    {
    }

    #public function __construct($name, $surname)
    #{
    #    $this->name = $name;
    #    $this->surname = $surname;
    #    $this->recipes = new ArrayCollection;
    #}

    #Obtener las recetas de un autor.
    public function getRecipes()
    {
    	return $this->recipes;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Author
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set surname
     *
     * @param string $surname
     *
     * @return Author
     */
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get surname
     *
     * @return string
     */
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Add recipe
     *
     * @param \MyRecipesDosBundle\Entity\Recipe $recipe
     *
     * @return Author
     */
    public function addRecipe(\MyRecipesDosBundle\Entity\Recipe $recipe)
    {
        $this->recipes[] = $recipe;

        return $this;
    }

    /**
     * Remove recipe
     *
     * @param \MyRecipesDosBundle\Entity\Recipe $recipe
     */
    public function removeRecipe(\MyRecipesDosBundle\Entity\Recipe $recipe)
    {
        $this->recipes->removeElement($recipe);
    }
}
