<?php

namespace App\Controller;

use App\Repository\CoachingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
     * @Route("/coaching")
     */
class CoachingsController extends AbstractController
{
    /**
     * @Route("/{slug}", name="solo")
     */
    public function solo($slug, CoachingRepository $coachingRepository): Response
    {

        $coach = $coachingRepository->findOneBy(["slug"=>$slug]);

        
        return $this->render('coachings/solo.html.twig', [
            'controller_name' => 'CoachingsController',
            'coaching'=> $coach
        ]);
    }
    
}




