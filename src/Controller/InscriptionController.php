<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\InscriptionType;
use App\Entity\Inscription;

class InscriptionController extends AbstractController
{
    /**
     * @Route("/inscription", name="inscription")
     */
    public function index(): Response
    {
        return $this->render('inscription/index.html.twig', [
            'controller_name' => 'InscriptionController',
        ]);
    }
    public function listerInscription(): Response
    {
        // initialise une variable qui sera exploitée dans la vue

        $repository = $this->getDoctrine()->getRepository(Inscription::class);
		$inscription = $repository->findAll();
		return $this->render('Inscription/listerInscription.html.twig' , ['inscription' => $inscription,]);  
    }
    public function ajouterInscription(Request $request)
    {
        $inscription = new Inscription();
        $formInscription = $this->createForm(InscriptionType::class, $inscription);
        $formInscription->handleRequest($request);

        if ($formInscription->isSubmitted() && $formInscription->isValid()) {

            $inscription = $formInscription->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($inscription);
            $entityManager->flush();

            return $this->render('Inscription/consulterInscription.html.twig', ['inscription' => $inscription,]);
        } else {
            return $this->render('Inscription/ajouterInscription.html.twig', array('formInscription' => $formInscription->createView(),));
        }
    }
    public function consulterInscription($idInscription){
		
        $inscription = $this->getDoctrine()
        ->getRepository(Inscription::class)
        ->find($idInscription);
    
        if (!$inscription) {
            throw $this->createNotFoundException('Aucun etudiant trouvé avec le numéro '.$idInscription);
        }
    
        return $this->render('Inscription/consulterInscription.html.twig', ['inscription' => $inscription,]);
    }

}
