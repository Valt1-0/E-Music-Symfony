<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormTypeInterface;
use App\Entity\User;

class ProfilController extends AbstractController
{
    
    public function consulterProfil(){
		
		$user = $this->getUser();
     
		return $this->render('Profil/consulterProfil.html.twig');
	}
    
}
