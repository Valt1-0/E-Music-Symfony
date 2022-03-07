<?php

namespace App\Controller;

use App\Entity\Professeur;
use App\Form\ProfesseurType;
use App\Form\ProfesseurModifierType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;

class ProfesseurController extends AbstractController
{
    
    public function listerProfesseur(){
		$repository = $this->getDoctrine()->getRepository(Professeur::class);
		$Professeur = $repository->findAll();
		return $this->render('Professeur/listerProfesseur.html.twig', [
            'Professeur' => $Professeur,]);	
			
	}
    public function ajouterProfesseur(Request $request)
    {
        $professeur = new Professeur();
	    $formProfesseur = $this->createForm(ProfesseurType::class, $professeur);
	    $formProfesseur->handleRequest($request);

 	    if ($formProfesseur->isSubmitted() && $formProfesseur->isValid()) {

            $professeur = $formProfesseur->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($professeur);
            $entityManager->flush();

	    return $this->render('Professeur/consulterProfesseur.html.twig', ['professeur' => $professeur,]);
	    }
	    else
        {
            return $this->render('Professeur/ajouterProfesseur.html.twig', array('formProfesseur' => $formProfesseur->createView(),));
	    }
    }
    public function consulterProfesseur($idProfesseur){
		
		$professeur = $this->getDoctrine()
        ->getRepository(Professeur::class)
        ->find($idProfesseur);

		if (!$professeur) {
			throw $this->createNotFoundException(
            'Aucun etudiant trouvé avec le numéro '.$idProfesseur
			);
		}

		return $this->render('Professeur/consulterProfesseur.html.twig', [
            'professeur' => $professeur,]);
	}
    public function modifierProfesseur($idProfesseur, Request $request){
 
        //récupération de l'étudiant dont l'id est passé en paramètre
        $professeur = $this->getDoctrine()
        ->getRepository(Professeur::class)
        ->find($idProfesseur);
     
        if (!$professeur)
        {
            throw $this->createNotFoundException('Aucun Instrument trouvé avec le numéro '.$idProfesseur);
        }
        else
            {
                $formProfesseur= $this->createForm(ProfesseurModifierType::class, $professeur);
                $formProfesseur->handleRequest($request);
     
                if ($formProfesseur->isSubmitted() && $formProfesseur->isValid()) {
     
                     $professeur = $formProfesseur->getData();
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($professeur);
                     $entityManager->flush();
                     return $this->render('Professeur/consulterProfesseur.html.twig', ['professeur' => $professeur,]);
               }
               else{
                    return $this->render('Professeur/ajouterProfesseur.html.twig', array('formProfesseur' => $formProfesseur->createView(),));
               }
            }
     }
     /**
 * @Route("/deleteProfesseur/{idProfesseur}", name="supprimerProfesseur")
 * 
 * @return Response
 */

public function supprimerProfesseur(int $idProfesseur){
    $professeur = $this->getDoctrine()
    ->getRepository(Professeur::class)
    ->find($idProfesseur);
    $entityManager = $this->getDoctrine()->getManager();

    $entityManager->remove($professeur);

    $entityManager->flush();

    return new Response('Professeur bien supprimé');

}


}
