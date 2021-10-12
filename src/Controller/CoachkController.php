<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class CoachkController extends AbstractController
{
    /**
     * @Route("/coachk", name="coachk")
     */
    public function coachk(ArticleRepository $articleRepository): Response
    {
        $article = $articleRepository->find(1);

        dump($article);

        return $this->render('coachk/index.html.twig', [
            'controller_name' => 'Votre Coach',
            'article' => $article
        ]);
    }

    /**
     * @Route("admin/coachk/create", name="coachk_create")
     */
    public function create(FormFactoryInterface $factory)
    {
        $builder = $factory-> createBuilder();

        $builder->add('name', TextType::class, [
            'label'=> 'Nom du coach',
            'attr' => ['class' => 'form-control', 'placeholder' =>'Tapez le nom du coach']
        ])
        ->add('description', TextareaType::class,[
            'label'=> 'Tapez votre description',
            'attr' => ['class' => 'form-control', 'placeholder' =>'Vous pouvez taper votre texte']
        ])
        ->add('pseudo', TextType::class, [
            'label'=> 'Tapez votre pseudo',
            'attr' => ['class' => 'form-control', 'placeholder' =>'Tapez votre pseudonyme']
        ])
        ->add('image', UrlType::class,[
            'attr' => ['class' => 'form-control', 'placeholder' =>'glissez votre image']
        ]);

        $form = $builder->getForm();

        $formView = $form->createView();

        return $this->render('coachk/create.html.twig', [
            'formView' => $formView
        ]);
    }
}
