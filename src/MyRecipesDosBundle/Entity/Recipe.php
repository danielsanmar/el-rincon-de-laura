<?php
namespace MyRecipesDosBundle\Entity;

    use Doctrine\Common\Collections\ArrayCollection;

class Recipe
{
	private $id;
	protected $url;
	protected $name;
	protected $difficulty;
	protected $description;
    protected $author;
    protected $ingredients;

    public function __construct(Author $author, $url, $name, $description, $difficulty)
    {
        $this->author = $author;
        $this->url = $url;
        $this->name = $name;
        $this->description = $description;
        $this->difficulty = $difficulty;
        $this->ingredients = new ArrayCollection();
    }

    public function add(Ingredient $ingredient)
    {
        $this->ingredients[] = $ingredient;
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
     * Set url
     *
     * @param string $url
     *
     * @return Recipe
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Recipe
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
     * Set difficulty
     *
     * @param string $difficulty
     *
     * @return Recipe
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    /**
     * Get difficulty
     *
     * @return string
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recipe
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }


    /**
     * Set author
     *
     * @param string $author
     *
     * @return Recipe
     */
    /*
    public function setAuthor($author)
    {
        $this->description = $author;

        return $this;
    }
    */
    /**
     * Get author
     *
     * @return string
     */
    /*
    public function getAuthor()
    {
        return $this->author;
    }
    */
}
