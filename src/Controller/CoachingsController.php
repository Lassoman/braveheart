<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\CoachingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachingsController extends AbstractController
{

    /**
     * @Route("coachings/{slug}", name="solo")
     */
    public function solo($slug, CoachingRepository $coachingRepository): Response
    {

        $coach = $coachingRepository->findOneBy(["slug"=>$slug]);

        
        return $this->render('coachings/index.html.twig', [
            'coaching'=> $coach
        ]);
    }
    
}




