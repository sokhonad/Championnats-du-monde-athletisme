<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /** Inserer une categorie dans la table
     * @Route("/categorie/inserer", name="categorie_insert")
     */
    public function create_categorie(): Response
    {

        $categorieManager = $this->getDoctrine()->getManager();
        $categorie = new Categorie();
        $categorie->setNomCategorie('foot ball');
        $categorie->setIdCalendrier(1);

        $categorieManager->persist($categorie);

        $categorieManager->flush();

        return new Response('Nouvel categorie enregistré avec id ' . $categorie->getIdCategorie());
    }

    /** afficher toutes les categorie
     * @Route("/categorie", name="categorie")
     */
    public function showAllCategories(CategorieRepository $repo)
    {
        $categorie = $repo->findAll();
        return $this->render('categorie/index.html.twig', array(
            'categories' => $categorie
        ));
    }

    /** afficher une catgorie en fonction de son id
     * @Route("categorie/{id}", name="showById_categorie")
     */
    public function showAthlete($id)
    {
        $categorie = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->find($id);

        if (!$categorie) {
            throw $this->createNotFoundException(
                ' categorie  id ' . $id . " n'existe pas veuillez m'excuser !"
            );
        } else {
            return $this->render('categorie/showCategorieById.html.twig', array(
                'id_categorie' => $categorie->getIdCategorie(), 'nom_categorie' => $categorie->getNomCategorie(),
                'id_calendrier' => $categorie->getIdCalendrier()
            ));
        }
    }

    /** suprimer une catgorie en fonction de son id
     * @Route("categorie/supprimer/{id}", name="deleteById_categorie")
     */
    public function delete($id): Response
    {
        $categorie = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->find($id);
        if (!$categorie) {
            throw $this->createNotFoundException(
                ' categorie  id ' . $id . " n'existe pas ! ."
            );
        } else {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie);
            $em->flush();
            return new Response('categorie  id ' . $id . ' a été supprimer');
        }
    }

    /** modifier une catgorie en fonction de son id
     * @Route("categorie/modifier/{id}", name="updateById_categorie")
     */
    public function update($id)
    {
        $categorie = $this->getDoctrine()
            ->getRepository(Categorie::class)
            ->find($id);
        $categorie->setNomCategorie("Running");
        $categorie->setIdCalendrier(2);
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return $this->redirectToRoute('categorie', ['id' => $categorie->getIdCategorie(),
            'categorie' => $categorie->getIdCalendrier()

        ]);

    }
    /**
     * @Route("/categorie_create", name="categorie_create")
     * @Route("/categorie/{id}/modiffication", name="categorie_modification")
     */
    public function form(Categorie $categorie = null, Request $request)
    {
        $entityManager = $this->getDoctrine()->getManager();
        if (!$categorie) {
            $categorie = new Categorie();
        }
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->persist($categorie);
            $entityManager->persist($categorie);
            $entityManager->flush();
            return $this->redirectToRoute('showById_categorie', ['id' => $categorie->getIdCategorie()]);
        }
        return $this->render('categorie/form.html.twig', [
            'formCategorie' => $form->createView(),
            'textBoutton' => $categorie->getIdCategorie() !== null
        ]);
    }

}
