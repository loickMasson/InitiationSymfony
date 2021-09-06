<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ExerciceController extends AbstractController
{
    #[Route('/exercice/{ville?Paris}/{habitants?6500}', name: 'exercice')]


    public function index(string $ville, int $habitants): Response
    {
    

        return $this->render('exercice/index.html.twig',[
            'ville'=> $ville,
            'habitants' => $habitants  
        ]);
    
    }
}
