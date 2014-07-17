<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace Mouj\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
  public function indexAction()
  {
  	  // On fixe un id au hasard ici, il sera dynamique par la suite, évidemment
    $id = 999;

    // On veut avoir l'URL de l'article d'id $id.
    $url = $this->generateUrl('mouj_voir', array('id' => $id));
    // $url vaut « /blog/article/5 »

    // On redirige vers cette URL (ça ne sert à rien, on est d'accord, c'est pour l'exemple !)
    return $this->redirect($url);
  }
  public function byeAction()
  {
    return $this->render('MoujBlogBundle:Blog:bye.html.twig',array('name' => 'PouPi'));
    
  }
  public function voirAction($id)
  {
    return new Response("Affichage de l'article d'id : ".$id.".");
    
  }
 public function voirSlugAction($annee,$slug,$format)
  {
    return new Response("Affichage de la page: ".$annee." ".$slug." ".$format);
    
  }
}