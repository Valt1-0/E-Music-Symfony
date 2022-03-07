<?php

namespace App\Controller;

use App\Entity\Accessoire;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Instrument;
use App\Entity\ClasseInstrument;
use App\Entity\TypeInstrument;
use App\Form\InstrumentType;
use App\Form\InstrumentModifierType;


class InstrumentController extends AbstractController
{

    public function listerClasseInstrument(): Response
    {
        // initialise une variable qui sera exploitée dans la vue

        $repository = $this->getDoctrine()->getRepository(ClasseInstrument::class);
        $ClassesInstrument = $repository->findAll();
        return $this->render('Instrument/listerClasse.html.twig', ['pClassesInstrument' => $ClassesInstrument,]);
    }

    public function listerTypeInstrument($id)
    {
        // initialise une variable qui sera exploitée dans la vue

        $typeInstrument = $this->getDoctrine()
            ->getRepository(TypeInstrument::class)
            ->findByClasseInstrument($id);

        return $this->render('Instrument/listerType.html.twig', ['pTypeInstrument' => $typeInstrument,]);
    }



    public function listerInstrument($id): Response
    {
        // initialise une variable qui sera exploitée dans la vue

        $instrument = $this->getDoctrine()
            ->getRepository(Instrument::class)
            ->findByTypeInstrument($id);

        return $this->render('Instrument/listerInstrument.html.twig', ['pInstrument' => $instrument,]);
    }

    public function ajouterInstrument(Request $request)
    {
        $instrument = new Instrument();
        $formInstru = $this->createForm(InstrumentType::class, $instrument);
        $formInstru->handleRequest($request);

        if ($formInstru->isSubmitted() && $formInstru->isValid()) {

            $instrument = $formInstru->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($instrument);
            $entityManager->flush();

            return $this->render('Instrument/consulterInstrument.html.twig', ['consInstru' => $instrument,]);
        } else {
            return $this->render('Instrument/ajouterInstrument.html.twig', array('formInstru' => $formInstru->createView(),));
        }
    }

    public function modifierInstrument($id, Request $request)
    {

        //récupération de l'étudiant dont l'id est passé en paramètre
        $instrument = $this->getDoctrine()
            ->getRepository(Instrument::class)
            ->find($id);

        if (!$instrument) {
            throw $this->createNotFoundException('Aucun Instrument trouvé avec le numéro ' . $id);
        } else {
            $formInstru = $this->createForm(InstrumentModifierType::class, $instrument);
            $formInstru->handleRequest($request);

            if ($formInstru->isSubmitted() && $formInstru->isValid()) {

                $instrument = $formInstru->getData();
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($instrument);
                $entityManager->flush();
                return $this->render('Instrument/consulterInstrument.html.twig', ['consInstru' => $instrument,]);
            } else {
                return $this->render('Instrument/ajouterInstrument.html.twig', array('formInstru' => $formInstru->createView(),));
            }
        }
    }

    public function supprimerInstrument($id)
    {

        $instrument = $this->getDoctrine()
            -> getRepository(Instrument::class)
            -> find($id);
            if (!$instrument)
            {
                throw $this->createNotFoundException('Aucun Instrument trouvé avec le numéro '.$id);
            }
            else
            {
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->remove($instrument);
                $entityManager->flush();
            }
        
        return $this->redirectToRoute('index');
    }



    public function listerAllInstrument(): Response
    {
        // initialise une variable qui sera exploitée dans la vue

        $repository = $this->getDoctrine()->getRepository(Instrument::class);
        $allInstrument = $repository->findAll();
        return $this->render('Instrument/listerAllInstrument.html.twig', ['pAllInstrument' => $allInstrument,]);
    }

    public function consulterInstrument($id)
    {

        $consInstru = $this->getDoctrine()
            ->getRepository(Instrument::class)
            ->find($id);

        if (!$consInstru) {
            throw $this->createNotFoundException(
                'Aucun instrument trouvé avec le numéro ' . $id
            );
        }


        return $this->render('Instrument/consulterInstrument.html.twig', [
            'consInstru' => $consInstru,
        ]);
    }

    public function listerLesInterventionsInstrument($idInstrument){
		
		$instrument = $this->getDoctrine()
        ->getRepository(Instrument::class)
        ->find($idInstrument);

		if (!$instrument) {
			throw $this->createNotFoundException(
            'Aucun etudiant trouvé avec le numéro '.$idInstrument
			);
		}

		return $this->render('Intervention/listerLesInterventionsInstrument.html.twig', [
            'instrument' => $instrument,]);
	}

    public function listerLesAccessoiresInstrument($idInstrument)
    {

        $instrument = $this->getDoctrine()
            ->getRepository(Instrument::class)
            ->find($idInstrument);

        if (!$instrument) {
            throw $this->createNotFoundException(
                'Aucun accessoire trouvé avec le numéro ' . $idInstrument
            );
        }

        return $this->render('Accessoire/listerLesAccessoiresInstrument.html.twig', [
            'instrument' => $instrument,
        ]);
    }


}
