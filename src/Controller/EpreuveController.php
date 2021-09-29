<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Entity\Epreuve;
use App\Form\EpreuveType;
use App\Repository\CategorieRepository;
use App\Repository\EpreuveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EpreuveController extends AbstractController
{
    /** Inserer une epreuve dans la table
     * @Route("/epreuve/inserer", name="epreuve_insert")
     */
    public function create_epreuve(): Response
    {

        $epreuveManager = $this->getDoctrine()->getManager();
        $epreuve = new Epreuve();
        $epreuve->setNomEpreuve('1000M');
        $epreuve->setDescription('il est interdit lola');
        $epreuve->setHeureEpreuve('12:00');
        $epreuve->setMedailleEpreuve('argent');
        $epreuve->setIdCompetition(1);
        $epreuve->setIdCategorie(1);

        $epreuveManager->persist($epreuve);

        $epreuveManager->flush();

        return new Response('Nouvel epreuve enregistré avec id ' . $epreuve->getId());
    }

    /** afficher toutes les epreuves
     * @Route("/epreuve", name="epreuve")
     */
    public function showAllEpreuves(EpreuveRepository $repo)
    {
        $epreuve = $repo->findAll();
        return $this->render('epreuve/index.html.twig', array(
            'epreuves' => $epreuve
        ));
    }

    /** afficher une epreuve en fonction de son id
     * @Route("epreuve/{id}", name="showById_epreuve")
     */
    public function showEpreuve($id)
    {
        $epreuve = $this->getDoctrine()
            ->getRepository(Epreuve::class)
            ->find($id);

        if (!$epreuve) {
            throw $this->createNotFoundException(
                ' epreuve  id ' . $id . " n'existe pas veuillez m'excuser !"
            );
        } else {
            return $this->render('epreuve/showEpreuveById.html.twig', array(
                'id' => $epreuve->getId(), 'nom' => $epreuve->getNomEpreuve(),
                'description' => $epreuve->getDescription(),
                'heure' => $epreuve->getHeureEpreuve(),
                'medaille' => $epreuve->getMedailleEpreuve(),
                'id_copetition' => $epreuve->getIdCompetition(),
                'id_categorie' => $epreuve->getIdCategorie()
            ));
        }
    }

    /** suprimer une epreuve en fonction de son id
     * @Route("epreuve/supprimer/{id}", name="deleteById_epreuve")
     */
    public function delete($id): Response
    {
        $epreuve = $this->getDoctrine()
            ->getRepository(Epreuve::class)
            ->find($id);
        if (!$epreuve) {
            throw $this->createNotFoundException(
                ' categorie  id ' . $id . " n'existe pas ! ."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($epreuve);
            $em->flush();
            return new Response('epreuve  id ' . $id . ' a été supprimer');
        }
    }

    /** modifier une epreuve en fonction de son id
     * @Route("epreuve/modifier/{id}", name="updateById_epreuve")
     */
    public function update($id)
    {
        $epreuve = $this->getDoctrine()
            ->getRepository(Epreuve::class)
            ->find($id);
        $epreuve->setNomEpreuve("100m MEN");
        $epreuve->setMedailleEpreuve("Diaman bleu");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('epreuve', ['id' => $epreuve->getNomEpreuve(),
            'medaille' => $epreuve->getMedailleEpreuve()

        ]);
    }
    /**
     * @Route("/epreuve_create", name="epreuve_create")
     * @Route("/epreuve/{id}/modiffication", name="epreuve_modification")
     */
    public function form(Epreuve $epreuve = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$epreuve) {
            $epreuve = new Epreuve();
        }
        $form = $this->createForm(EpreuveType::class, $epreuve);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($epreuve);
            $entityManager->persist($epreuve);
            $entityManager->flush();
            return $this->redirectToRoute('showById_epreuve', ['id' => $epreuve->getId()]);
        }
        return $this->render('epreuve/form.html.twig', [
            'formEpreuve' => $form->createView(),
            'textBoutton' => $epreuve->getId() !== null
        ]);
    }

}
