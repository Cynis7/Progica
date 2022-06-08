<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController  {

/**
 * @Route("/", name="home")
 */
  public function index()
  {
    return $this->render("home/index.html.twig", [
      "title" => "Bienvenue sur mon site",
      "message" => "Accueil",
      "menu" => "home"
    ]);
  }

  /**
 * @Route("/contact", name="contact")
 */
  public function contact(){

    return $this->render("home/contact.html.twig",[
      "title" => "Contact",
      "message" => "Formulaire de contact",
      "menu" => "contact"
    ]);
  }
}