<?php

namespace App\Controller;

use App\Entity\Calendrier;
use App\Entity\Categorie;
use App\Form\CalendrierType;
use App\Repository\CalendrierRepository;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalendrierController extends AbstractController
{
    /** Inserer un calendrier dans la table
     * @Route("/calendrier/inserer", name="calendrier_insert")
     */
    public function create_calendrier(): Response
    {

        $calendrierManager = $this->getDoctrine()->getManager();
        $calendrier = new Calendrier();
        $calendrier->setEditionCalendrier('2050');

        $calendrierManager->persist($calendrier);

        $calendrierManager->flush();

        return new Response('Nouvel calendrier enregistré avec id ' . $calendrier->getId());
    }

    /** afficher toutes les calendrier
     * @Route("/calendrier", name="calendrier")
     */
    public function showAllCalendriers(CalendrierRepository $repo)
    {
        $calendrier = $repo->findAll();
        return $this->render('calendrier/index.html.twig', array(
            'calendriers' => $calendrier
        ));
    }

    /** afficher un calendrier en fonction de son id
     * @Route("calendrier/{id}", name="showById_calendrier")
     */
    public function showCalendrier($id)
    {
        $calendrier = $this->getDoctrine()
            ->getRepository(Calendrier::class)
            ->find($id);

        if (!$calendrier) {
            throw $this->createNotFoundException(
                ' calendrier  id ' . $id . " n'existe pas veuillez m'excuser !"
            );
        } else {
            return $this->render('calendrier/showCalendrierById.html.twig', array(
                'id' => $calendrier->getId(),
                'edition' => $calendrier->getEditionCalendrier(),

            ));
        }
    }

    /** suprimer un calendrier en fonction de son id
     * @Route("calendrier/supprimer/{id}", name="deleteById_calendrier")
     */
    public function delete($id): Response
    {
        $calendrier = $this->getDoctrine()
            ->getRepository(Calendrier::class)
            ->find($id);
        if (!$calendrier) {
            throw $this->createNotFoundException(
                ' calendrier  id ' . $id . " n'existe pas ! ."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($calendrier);
            $em->flush();
            return new Response('calendrier  id ' . $id . ' a été supprimer');
        }
    }

    /** modifier une calendrier en fonction de son id
     * @Route("calendrier/modifier/{id}", name="updateById_calendrier")
     */
    public function update($id)
    {
        $calendrier = $this->getDoctrine()
            ->getRepository(Calendrier::class)
            ->find($id);
        $calendrier->setEditionCalendrier("2079");

        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('calendrier', ['id' => $calendrier->getId(),
            'calendrier' => $calendrier->getEditionCalendrier()

        ]);
    }
    /**
     * @Route("/calendrier_create", name="calendrier_create")
     * @Route("/calendrier/{id}/modiffication", name="calendrier_modification")
     */
    public function form(Calendrier $calendrier = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$calendrier) {
            $calendrier = new Calendrier();
        }
        $form = $this->createForm(CalendrierType::class, $calendrier);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($calendrier);
            $entityManager->persist($calendrier);
            $entityManager->flush();
            return $this->redirectToRoute('showById_calendrier', ['id' => $calendrier->getId()]);
        }
        return $this->render('calendrier/form.html.twig', [
            'formCalendrier' => $form->createView(),
            'textBoutton' => $calendrier->getId() !== null
        ]);
    }
}
