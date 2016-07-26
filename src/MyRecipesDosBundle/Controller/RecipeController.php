<?php
namespace MyRecipesDosBundle\Controller;

    use Doctrine\Common\Collections\ArrayCollection;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyRecipesDosBundle\Entity\Recipe;
    use MyRecipesDosBundle\Entity\Author;
    use MyRecipesDosBundle\Entity\Ingredient;


use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use MyRecipesDosBundle\Form\AuthorType;


class RecipeController extends Controller
{
	#Mostrar el listado de recetas.
    public function listAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('MyRecipesDosBundle:Recipe');
        
        $recipe = $repository->findAll();
        return $this->render('MyRecipesDosBundle:Recipe:list.html.twig', array('recipes' => $recipe));
    }

    #Mostrar la receta indicada en la url.
    public function showAction($recipe_url)
    {
		$repository = $this->getDoctrine()
    		->getRepository('MyRecipesDosBundle:Recipe');
        $recipe = $repository->findOneBy(array('url' => $recipe_url));

        /*
        #$repository = $this->getDoctrine()
        #    ->getRepository('MyRecipesDosBundle:Recipe');
        #$recipe = $repository->findOneBy(array('url' => $recipe_url));
        #$author = $recipe->getAuthor();

        $em = $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery('select i.author_id from MyRecipesDosBundle:Recipe i')
        ->getQuery();
        $recipe = $query->getArrayResult();
        */
    	return $this->render('MyRecipesDosBundle:Recipe:show.html.twig', array('recipe' => $recipe));
    }

    #Modificar la receta indicada en la url.
    public function updateAction($recipe_id)
    {
   		$repository = $this->getDoctrine()
    		->getRepository('MyRecipesDosBundle:Recipe');
    	$recipe = $repository->findOneById($recipe_id);
    	$recipe->setDescription('Nueva descripción.');
    	$this->getDoctrine()->getManager()->flush();

    	return $this->render('MyRecipesDosBundle:Recipe:update.html.twig', array('recipe_name' => $recipe_id));
    }

    #Eliminar la receta indicada en la url
    public function deleteAction($recipe_id)
    {
   		$repository = $this->getDoctrine()
    		->getRepository('MyRecipesDosBundle:Recipe');
    	$recipe = $repository->find($recipe_id);
    	
    	$em = $this->getDoctrine()->getManager();
    	$em->remove($recipe);
    	$em->flush();
    	
    	return $this->render('MyRecipesDosBundle:Recipe:delete.html.twig', array('recipe_name' => $recipe_id));
    }

    #Crear una nueva receta.
    public function createAction(Request $request)
    {
        $recipe = new Recipe();
        $form = $this->createFormBuilder($recipe)
            ->add('url', TextType::Class)
            ->add('name', TextType::Class)
            ->add('author', AuthorType::class)
            ->add('difficulty', ChoiceType::Class, array(
                'choices' => array(
                    'Fácil' => 'facil',
                    'Media' => 'media',
                    'Difícil' => 'dificil',
                    )))
            ->add('description', TextType::Class)
            ->add('save', SubmitType::Class, $array = array('label' => 'crear receta'))
            ->getForm();
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($recipe);
            $em->flush();

            return $this->redirect($this->generateUrl('recipes_list', array('id' => $recipe->getId())));
        }
        return $this->render('Recipe/create.html.twig', array('form' => $form->createView(),));        
        #$author = new Author('Daniel', 'Sánchez');
        #$ingredient = new Ingredient('Patata');
        #$recipe = new Recipe($author,'ensaladilla-pobre','Ensaladilla pobre', 'Deliciosa ensaladilla pobre.', 'Media');
        #$recipe->add($ingredient);
        #$this->persistAndFlush($recipe);
        #return $this->redirect($this->generateUrl('recipes_show', array('recipe_url' => $recipe->getUrl())));
	}

    #Mostrar ultimas recetas.
    public function lastRecipesAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('MyRecipesDosBundle:Recipe');
        $recipe = $repository->findBy(array(), array('id' => 'DESC'), 5, 0);
        return $this->render('MyRecipesDosBundle:Recipe:lastRecipes.html.twig', array('recipes' => $recipe));

    }

    private function persistAndFlush(Recipe $recipe)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($recipe);
        $em->flush();
    }

}