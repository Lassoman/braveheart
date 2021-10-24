<?php

namespace App\Controller;

use App\Entity\Coaching;
use App\Form\CoachingType;
use App\Repository\CoachingRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/coaching")
 */
class AdminCoachingController extends AbstractController
{
    /**
     * @Route("/", name="admin_coaching_index", methods={"GET"})
     */
    public function index(CoachingRepository $coachingRepository): Response
    {
        return $this->render('admin_coaching/index.html.twig', [
            'coachings' => $coachingRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="admin_coaching_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $coaching = new Coaching();
        $form = $this->createForm(CoachingType::class, $coaching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($coaching);
            $entityManager->flush();

            return $this->redirectToRoute('admin_coaching_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_coaching/new.html.twig', [
            'coaching' => $coaching,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_coaching_show", methods={"GET"})
     */
    public function show(Coaching $coaching): Response
    {
        return $this->render('admin_coaching/show.html.twig', [
            'coaching' => $coaching,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="admin_coaching_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Coaching $coaching): Response
    {
        $form = $this->createForm(CoachingType::class, $coaching);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('admin_coaching_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin_coaching/edit.html.twig', [
            'coaching' => $coaching,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="admin_coaching_delete", methods={"POST"})
     */
    public function delete(Request $request, Coaching $coaching): Response
    {
        if ($this->isCsrfTokenValid('delete'.$coaching->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($coaching);
            $entityManager->flush();
        }

        return $this->redirectToRoute('admin_coaching_index', [], Response::HTTP_SEE_OTHER);
    }
}
