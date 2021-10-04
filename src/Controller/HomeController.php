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
    
    public function homepage(EntityManagerInterface $em)
    {

        //count([])
        //find(id)
        //findBy(['slug' => 'coaching-solo', 'price' => '15000'])
        //findOneBy([])
        //findAll()
       
        $coachingRepository = $em -> getRepository(Coaching::class);//dabord on recupere le repository des articles grace au manager
        $coaching = $coachingRepository->find(3);//ensuite on lui dit quoi chercher

        $coaching->setPrice(30000);
       
        $em->flush();
        dd($coaching);

        return $this->render('home.html.twig');
    }
}