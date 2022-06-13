<?php

namespace App\Controller;

use App\Entity\Gite;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GiteController extends AbstractController
{

  /**
   * @Route("/gite/{id}", name="gite_show")
   */
  public function show(Gite $gite)
  {

    return $this->render("gite/show.html.twig", [
      "gite" => $gite
    ]);
  }
}
