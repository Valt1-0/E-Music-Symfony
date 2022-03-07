<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Eleve;
use Symfony\Component\Form\FormTypeInterface;
use App\Form\EleveType;
use App\Form\EleveModifierType;

class EleveController extends AbstractController
{


    public function listerEleve(): Response
    {
        // initialise une variable qui sera exploitée dans la vue

        $repository = $this->getDoctrine()->getRepository(Eleve::class);
		$eleves = $repository->findAll();
		return $this->render('Eleve/listerEleve.html.twig' , ['pEleves' => $eleves,]);  
    }
    
    
    public function ajouterEleve(Request $request){
 
		$Eleve = new Eleve();
	$form = $this->createForm(EleveType::class, $Eleve);
	$form->handleRequest($request);
 
	if ($form->isSubmitted() && $form->isValid()) {
 
        $Eleve = $form->getData();
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($Eleve);
            $entityManager->flush();
 
	    return $this->render('Eleve/consulterEleve.html.twig', ['Eleve' => $Eleve,]);
	}
	else
        {
            return $this->render('Eleve/ajouterEleve.html.twig', array('form' => $form->createView(),));
	}


}

public function consulterEleve($idEleve){
		
    $Eleve = $this->getDoctrine()
    ->getRepository(Eleve::class)
    ->find($idEleve);

    if (!$Eleve) {
        throw $this->createNotFoundException('Aucun etudiant trouvé avec le numéro '.$idEleve);
    }

    return $this->render('Eleve/consulterEleve.html.twig', ['Eleve' => $Eleve,]);
}

/**
 * @Route("/delete/{id}", name="Eleve_delete")
 * 
 * @return Response
 */

public function delete(Eleve $Eleve){
    $entityManager = $this->getDoctrine()->getManager();

    $entityManager->remove($Eleve);

    $entityManager->flush();

    return new Response('Élève bien supprimé');

}



public function modifierEleve($id, Request $request){
 
    //récupération de l'étudiant dont l'id est passé en paramètre
    $Eleve = $this->getDoctrine()
    ->getRepository(Eleve::class)
    ->find($id);
 
    if (!$Eleve)
    {
        throw $this->createNotFoundException('Aucun Élève trouvé avec le numéro '.$id);
    }
    else
        {
            $form = $this->createForm(EleveModifierType::class, $Eleve);
            $form->handleRequest($request);
 
            if ($form->isSubmitted() && $form->isValid()) {
 
                 $Eleve = $form->getData();

                 $entityManager = $this->getDoctrine()->getManager();
                 $entityManager->persist($Eleve);
                 $entityManager->flush();

                 return $this->render('Eleve/consulterEleve.html.twig', ['Eleve' => $Eleve,]);
           }
           else{
                return $this->render('Eleve/modifierEleve.html.twig', array('form' => $form->createView(),));
           }
        }
 }
}