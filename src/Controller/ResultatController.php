<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Resultat;
use App\Form\ResultatType;
use App\Repository\CategorieRepository;
use App\Repository\ResultatRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResultatController extends AbstractController
{
    /** Inserer un resultat dans la table
     * @Route("/resultat/inserer", name="resultat_insert")
     */
    public function create_resultat(): Response
    {

        $resultatManager = $this->getDoctrine()->getManager();
        $resultat = new Resultat();
        $resultat->setMedaille('or');
        $resultat->setRang(1);
        $resultat->setTemps(50);
        $resultat->setEcart(8);
        $resultat->setVitesse(70);
        $resultat->setPoids(80);
        $resultat->setNombreParticipants(2000);
        $resultat->setIdAthlete(1);
        $resultat->setIdEpreuve(1);

        $resultatManager->persist($resultat);

        $resultatManager->flush();

        return new Response('Nouvel resultat enregistré avec id ' . $resultat->getId());
    }

    /** afficher tous les resultat
     * @Route("/resultat", name="resultat")
     */
    public function showAllResultat(ResultatRepository $repo)
    {
        $resultat = $repo->findAll();
        return $this->render('resultat/index.html.twig', array(
            'resultats' => $resultat
        ));
    }

    /** afficher un resultat en fonction de son id
     * @Route("resultat/{id}", name="showById_resultat")
     */
    public function showResultat($id)
    {
        $resultat = $this->getDoctrine()
            ->getRepository(Resultat::class)
            ->find($id);

        if (!$resultat) {
            throw $this->createNotFoundException(
                ' resultat  id ' . $id . " n'existe pas veuillez m'excuser !"
            );
        } else {
            return $this->render('resultat/showResultatById.html.twig', array(
                'medaille' => $resultat->getMedaille(),
                'rang' => $resultat->getRang(),
                'temps' => $resultat->getTemps(),
                'ecart' => $resultat->getEcart(),
                'vitesse' => $resultat->getVitesse(),
                'poids' => $resultat->getPoids(),
                'nombre_participants' => $resultat->getNombreParticipants(),
                'id_athlete' => $resultat->getIdAthlete(),
                'id_epreuve' => $resultat->getIdEpreuve()
            ));
        }
    }

    /** suprimer un resultat en fonction de son id
     * @Route("resultat/supprimer/{id}", name="deleteById_resultat")
     */
    public function delete($id): Response
    {
        $resultat = $this->getDoctrine()
            ->getRepository(Resultat::class)
            ->find($id);
        if (!$resultat) {
            throw $this->createNotFoundException(
                ' resultat  id ' . $id . " n'existe pas ! ."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resultat);
            $em->flush();
            return new Response('resultat  id ' . $id . ' a été supprimer');
        }
    }

    /** modifier un resultat en fonction de son id
     * @Route("resultat/modifier/{id}", name="updateById_resultat")
     */
    public function update($id)
    {
        $resultat = $this->getDoctrine()
            ->getRepository(Resultat::class)
            ->find($id);
        $resultat->setMedaille("Diaman rouge");
        $resultat->setRang(2);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('resultat', ['id' => $resultat->getMedaille(),
            'resultat' => $resultat->getRang()

        ]);
    }
    /**
     * @Route("/resultat_create", name="resultat_create")
     * @Route("/resultat/{id}/modiffication", name="resultat_modification")
     */
    public function form(Resultat $resultat = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$resultat) {
            $resultat = new Resultat();
        }
        $form = $this->createForm(ResultatType::class, $resultat);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($resultat);
            $entityManager->persist($resultat);
            $entityManager->flush();
            return $this->redirectToRoute('showById_resultat', ['id' => $resultat->getId()]);
        }
        return $this->render('resultat/form.html.twig', [
            'formResultat' => $form->createView(),
            'textBoutton' => $resultat->getId() !== null
        ]);
    }

}
