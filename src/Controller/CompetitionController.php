<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Competition;
use App\Entity\Resultat;
use App\Form\CompetitionType;
use App\Repository\CategorieRepository;
use App\Repository\CompetitionRepository;
use App\Repository\ResultatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CompetitionController extends AbstractController
{
    /** Inserer une competition dans la table
     * @Route("/competition/inserer", name="competition_insert")
     */
    public function create_competition(): Response
    {

        $competitionManager = $this->getDoctrine()->getManager();
        $competition = new Competition();
        $competition->setNomCompetition('ROAD CYCLING');
        $competition->setPaysCompetition('Senegal');
        $competition->setVilleCompetition('Dakar');
        $competition->setLieuCompetition('Bamako');
        $competition->setDateCompetition('2018-08-08');

        $competitionManager->persist($competition);

        $competitionManager->flush();

        return new Response('Nouvel competition enregistré avec id ' . $competition->getId());
    }

    /** afficher toutes les competitions
     * @Route("/competition", name="competition")
     */
    public function showAllCompetition(CompetitionRepository $repo)
    {
        $resultat = $repo->findAll();
        return $this->render('competition/index.html.twig', array(
            'competitions' => $resultat
        ));
    }

    /** afficher une competition en fonction de son id
     * @Route("competition/{id}", name="showById_competition")
     */
    public function showCompetition($id)
    {
        $competition = $this->getDoctrine()
            ->getRepository(Competition::class)
            ->find($id);

        if (!$competition) {
            throw $this->createNotFoundException(
                ' competition  id ' . $id . " n'existe pas veuillez m'excuser !"
            );
        } else {
            return $this->render('competition/showCompetitionById.html.twig', array(
                'id' => $competition->getId(),
                'competition' => $competition->getNomCompetition(),
                'pays' => $competition->getPaysCompetition(),
                'ville' => $competition->getVilleCompetition(),
                'lieu' => $competition->getLieuCompetition(),
                'date' => $competition->getDateCompetition(),
            ));
        }
    }

    /** suprimer un competition en fonction de son id
     * @Route("competition/supprimer/{id}", name="deleteById_competition")
     */
    public function delete($id): Response
    {
        $competition = $this->getDoctrine()
            ->getRepository(Competition::class)
            ->find($id);
        if (!$competition) {
            throw $this->createNotFoundException(
                ' competition  id ' . $id . " n'existe pas ! ."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($competition);
            $em->flush();
            return new Response('competition  id ' . $id . ' a été supprimer');
        }
    }

    /** modifier une competition en fonction de son id
     * @Route("competition/modifier/{id}", name="updateById_competition")
     */
    public function update($id)
    {
        $resultat = $this->getDoctrine()
            ->getRepository(Competition::class)
            ->find($id);
        $resultat->setNomCompetition("DIVING");
        $resultat->setPaysCompetition("France");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('competition', ['id' => $resultat->getNomCompetition(),
            'competition' => $resultat->getPaysCompetition()

        ]);
    }
    /**
     * @Route("/competition_create", name="competition_create")
     * @Route("/competition/{id}/modiffication", name="competition_modification")
     */
    public function form(Competition $competition = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$competition) {
            $competition = new Competition();
        }
        $form = $this->createForm(CompetitionType::class, $competition);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($competition);
            $entityManager->persist($competition);
            $entityManager->flush();
            return $this->redirectToRoute('showById_competition', ['id' => $competition->getId()]);
        }
        return $this->render('competition/form.html.twig', [
            'formCompetition' => $form->createView(),
            'textBoutton' => $competition->getId() !== null
        ]);
    }
}
