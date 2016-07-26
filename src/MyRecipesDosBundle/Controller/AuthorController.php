<?php
namespace MyRecipesDosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Component\HttpFoundation\Response;
use MyRecipesDosBundle\Entity\Author;

class AuthorController extends Controller
{
    #Crear un nuevo autor.
    public function createAction(Request $request)
    {
        $author = new Author();
        #$validator = $this->get('validator');
        #$errors = $validator->validate($author);

        $form = $this->createFormBuilder($author)
            ->add('name', TextType::Class)
            ->add('surname', TextType::Class)
            ->add('save', SubmitType::Class, $array = array('label' => 'crear autor'))
            ->getForm();
        $form->handleRequest($request);

        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($author);
            $em->flush();

            return $this->redirect($this->generateUrl('authors_list', array('id' => $author->getId())));
        }

        return $this->render('Author/create.html.twig', array('form' => $form->createView(),));
    }

    #Mostrar el listado de autores.
    public function listAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('MyRecipesDosBundle:Author');
        
        $author = $repository->findAll();
        return $this->render('MyRecipesDosBundle:Author:list.html.twig', array('authors' => $author));
    }

    #Eliminar el autor indicada en la url
    public function deleteAction($author_id)
    {
        $repository = $this->getDoctrine()
            ->getRepository('MyRecipesDosBundle:Author');
        $author = $repository->find($author_id);
        
        $em = $this->getDoctrine()->getManager();
        $em->remove($author);
        $em->flush();
        
        $author = $repository->findAll();
        return $this->render('MyRecipesDosBundle:Author:list.html.twig', array('authors' => $author));
    }

}