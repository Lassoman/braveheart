<?php

namespace App\Controller;

use App\Entity\Coaching;
use App\Repository\CoachingRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController{


    /**
     * @Route("/", name="homepage")
     */
    
    public function homepage(CoachingRepository $coachingRepository)
    {

        //count([])
        //find(id)
        //findBy(['slug' => 'coaching-solo', 'price' => '15000'])
        //findOneBy([])
        //findAll()
       
        $coachings = $coachingRepository->findBy([],[],3);

        dump($coachings);

        

        return $this->render('home.html.twig', ['coachings' =>$coachings
        ]);
    }
}