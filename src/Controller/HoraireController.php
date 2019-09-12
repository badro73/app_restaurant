<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Horaire;
use App\Form\HoraireType; 
use Symfony\Component\HttpFoundation\Request;
class HoraireController extends AbstractController
{
    /**
     * @Route("/horaire/{id}", name="horaire")
     */
    public function index(Request $request,$id)
    {
		$em = $this->getDoctrine()->getManager();
		$horaire=new Horaire();
		$horaire->setIdrestaurant($id);
		$form = $this->createForm(HoraireType::class,$horaire);
		//sauvgarder de l'entité rensignée dans le formulaire 
		//save all entities reported in the form 
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
		{
            $em = $this->getDoctrine()->getManager();
            $em->persist($horaire);
            $em->flush();
			return $this->redirectToRoute('home');
		}
        return $this->render('horaire/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
