<?php

namespace App\Controller;

use App\Form\PretType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Pret;

class PretController extends AbstractController
{
	/**
	 * 
     * @Route("/login", name="app_login")
     */
    public function listerPret(){
		$repository = $this->getDoctrine()->getRepository(Pret::class);
		$Prets = $repository->findAll();
		return $this->render('Pret/listerPret.html.twig', [
            'Pret' => $Prets,]);	

		
			
	}


    public function ajouterPret(Request $request){
 
		$Pret = new Pret();
	$form = $this->createForm(PretType::class, $Pret);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
        $pret = $form->getData();
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Pret);
            $entityManager->flush();
 
	    return $this->render('Pret/consulterPret.html.twig', ['Pret' => $Pret,]);
	}
	else
        {
            return $this->render('Pret/ajouter.html.twig', array('form' => $form->createView(),));
	}
    
    }
    public function consulterPret($idPret){
		
		$Pret = $this->getDoctrine()
        ->getRepository(Pret::class)
        ->find($idPret);

		if (!$Pret) {
			throw $this->createNotFoundException(
            'Aucun etudiant trouvé avec le numéro '.$idPret
			);
		}

		return $this->render('Pret/consulterPret.html.twig', [
            'Pret' => $Pret,]);
	}

}
