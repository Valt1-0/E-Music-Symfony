<?php

namespace App\Controller;

use App\Entity\Accessoire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AccessoireType;
use App\Form\Instrument;


class AccessoireController extends AbstractController
{


    public function ajouterAccessoire(Request $request)
    {
        $accessoire = new Accessoire();
        $formAccess = $this->createForm(AccessoireType::class, $accessoire);
        $formAccess->handleRequest($request);

        if ($formAccess->isSubmitted() && $formAccess->isValid()) {

            $accessoire = $formAccess->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($accessoire);
            $entityManager->flush();

            return $this->redirectToRoute('index');
        } else {
            return $this->render('Accessoire/ajouterAccessoire.html.twig', array('formAccess' => $formAccess->createView(),));
        }
    }

}
