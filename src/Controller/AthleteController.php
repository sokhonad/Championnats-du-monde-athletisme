<?php

namespace App\Controller;

use App\Entity\Athlete;
use App\Form\AthleteType;
use App\Repository\AthleteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;




class AthleteController extends AbstractController
{
    /** Inserer une athlete dans la table
     * @Route("/athlete/inserer", name="athlete_insert")
     */
    public function create_athelete(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $athlete = new Athlete();
        $athlete->setNomAthlete('Usain bolt');
        $athlete->setPrenomAthlete("Junior");
        $athlete->setSexeAthlete('male');
        $athlete->setNationaliteAthlete("FR");
        $athlete->setCodePaysAthlete("FR");

        $entityManager->persist($athlete);

        $entityManager->flush();

        return new Response('Nouvel athlete enregistré avec id ' . $athlete->getId());
    }

    /** Accès à toutes les athlete
     * @Route("/athlete", name="athlete")
     */
    public function showAllAthletes(AthleteRepository $repo)
    {
        $athletes = $repo->findAll();
        return $this->render('athlete/index.html.twig', array(
            'athletes' => $athletes
        ));
    }

    /** afficher un athlete en fonction de son id
     * @Route("athlete/{id}", name="showById_athlete")
     */
    public function showAthlete($id)
    {
        $athlete = $this->getDoctrine()
            ->getRepository(Athlete::class)
            ->find($id);

        if (!$athlete) {
            throw $this->createNotFoundException(
                ' athlete  id ' . $id . " n'existe pas !"
            );
        } else {
            return $this->render('athlete/showAthleteById.html.twig', array(
                'id_athlete' => $athlete->getId(), 'nom' => $athlete->getNomAthlete(),
                'prenom' => $athlete->getPrenomAthlete(), 'sexe' => $athlete->getSexeAthlete(),
                'nationalite' => $athlete->getNationaliteAthlete()
            ));
        }
    }

    /** suprimer un athlete en fonction de son id
     * @Route("athlete/{id}/suppression", name="deleteById_athlete")
     */
    public function delete($id): Response
    {
        $athlete = $this->getDoctrine()
            ->getRepository(Athlete::class)
            ->find($id);
        if (!$athlete) {
            throw $this->createNotFoundException(
                ' athlete  id ' . $id . " n'existe pas."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($athlete);
            $em->flush();
            return new Response('athlete  id ' . $id . ' a ete supprimer');
        }
    }

    /** modifier un athlete en fonction de son id
     * @Route("athlete/modifier/{id}", name="updateById_athlete")
     */
    public function update($id)
    {
        $athlete = $this->getDoctrine()
            ->getRepository(Athlete::class)
            ->find($id);
        $athlete->setNomAthlete("Youssoufa");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('athlete', ['id' => $athlete->getId()]);
    }


    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('athlete/index1.html.twig');
    }


    /**
     * @Route("/athlete_create", name="athlete_create")
     * @Route("/athlete/{id}/modiffication", name="athlete_modification")
     */
    public function form(Athlete $athlete = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$athlete) {
            $athlete = new Athlete();
        }
        $form = $this->createForm(AthleteType::class, $athlete);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($athlete);
            $entityManager->persist($athlete);
            $entityManager->flush();
            return $this->redirectToRoute('showById_athlete', ['id' => $athlete->getId()]);
        }
        return $this->render('athlete/form.html.twig', [
            'formAthlete' => $form->createView(),
            'textBoutton' => $athlete->getId() !== null
        ]);
    }


}
