<?php

namespace App\Controller;

use App\Repository\CoachingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoachingsController extends AbstractController
{
    /**
     * @Route("/coaching-solo", name="solo")
     */
    public function solo(CoachingRepository $coachingRepository): Response
    {

        $coach = $coachingRepository->find(17);

        
        return $this->render('coachings/solo.html.twig', [
            'controller_name' => 'CoachingsController',
            'coachings'=> $coach
        ]);
    }
    
    /**
     * @Route("/coaching-duo", name="duo")
     */
    public function duo(): Response
    {
        return $this->render('coachings/duo.html.twig', [
            'controller_name' => 'CoachingsController',
        ]);
    }


    /**
     * @Route("/coaching-small-group", name="group")
     */
    public function group(): Response
    {
        return $this->render('coachings/smallGroup.html.twig', [
            'controller_name' => 'CoachingsController',
        ]);
    }

    /**
     * @Route("/coaching-kids", name="kids")
     */
    public function kids(): Response
    {
        return $this->render('coachings/kids.html.twig', [
            'controller_name' => 'CoachingsController',
        ]);
    }

    /**
     * @Route("/coaching-entreprise", name="entreprise")
     */
    public function entreprise(): Response
    {
        return $this->render('coachings/entreprise.html.twig', [
            'controller_name' => 'CoachingsController',
        ]);
    }

    /**
     * @Route("/coaching-visio", name="visio")
     */
    public function visio(): Response
    {
        return $this->render('coachings/visio.html.twig', [
            'controller_name' => 'CoachingsController',
        ]);
    }
    // /**
    //  * @Route("/coaching-detail/{id}" name="coaching-detail")
    //  */
    // public function coachingDetail(int $id, CoachingRepository $coachingRepository){
    //     return $this->render("twigDetail.html.twig", ["coaching"=>$coachingRepository->find($id)]);
    // }
}




