<?php

namespace App\Controller;

use App\Entity\Cours; 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use App\Form\CoursType;
use App\Form\CoursModifierType;

class CoursController extends AbstractController
{
    public function listerCours(){
		$repository = $this->getDoctrine()->getRepository(Cours::class);
		$cours = $repository->findAll();
		return $this->render('Cours/listerCours.html.twig', [
            'cours' => $cours,]);	
			
	}


    public function ajouterCours(Request $request){
 
		$cours = new Cours();
	$formCours = $this->createForm(CoursType::class, $cours);
	$formCours->handleRequest($request);
 
	if ($formCours->isSubmitted() && $formCours->isValid()) {
 
        $cours = $formCours->getData();
 
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cours);
            $entityManager->flush();
 
	    return $this->render('Cours/consulterCours.html.twig', ['cours' => $cours,]);
	}
	else
        {
            return $this->render('Cours/ajouterCours.html.twig', array('formCours' => $formCours->createView(),));
	}
    
    }
    public function consulterCours($idCours){
		
		$cours = $this->getDoctrine()
        ->getRepository(Cours::class)
        ->find($idCours);

		if (!$cours) {
			throw $this->createNotFoundException(
            'Aucun etudiant trouvé avec le numéro '.$idCours
			);
		}

		return $this->render('Cours/consulterCours.html.twig', [
            'cours' => $cours,]);
	}
    
    
    public function modifierCours($idCours, Request $request){
 
        //récupération de l'étudiant dont l'id est passé en paramètre
        $cours = $this->getDoctrine()
        ->getRepository(Cours::class)
        ->find($idCours);
     
        if (!$cours)
        {
            throw $this->createNotFoundException('Aucun Instrument trouvé avec le numéro '.$idCours);
        }
        else
            {
                $formCours= $this->createForm(CoursModifierType::class, $cours);
                $formCours->handleRequest($request);
     
                if ($formCours->isSubmitted() && $formCours->isValid()) {
     
                     $cours = $formCours->getData();
                     $entityManager = $this->getDoctrine()->getManager();
                     $entityManager->persist($cours);
                     $entityManager->flush();
                     return $this->render('Cours/consulterCours.html.twig', ['cours' => $cours,]);
               }
               else{
                    return $this->render('Cours/ajouterCours.html.twig', array('formCours' => $formCours->createView(),));
               }
            }
     }  
     
    /**
    * @Route("/delete/{idCours}", name="supprimerCours")
    * 
    * @return Response $this->render('Cours/consulterCours.html.twig', ['cours' => $cours,])
    */
    public function supprimerCours($idCours){
        $cours = $this->getDoctrine()
        ->getRepository(Cours::class)
        ->find($idCours);
        if (!$cours)
            {
                throw $this->createNotFoundException('Aucun Cours trouvé avec le numéro '.$idCours);
            }
            else
            {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($cours);
                $entityManager->flush();
            }
            return new Response('Cours bien supprimé'); ;
    }



}
