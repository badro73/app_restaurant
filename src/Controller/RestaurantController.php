<?php

	namespace App\Controller;
    use App\Entity\Restaurant;
	use Symfony\Component\Routing\Annotation\Route;
	use Symfony\Component\HttpFoundation\Response;
	use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
	use App\Form\RestaurantType;
	use Symfony\Component\HttpFoundation\Request;
	use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * Restaurant controller.
 *
 */
	class RestaurantController extends AbstractController
	{

		// function index : in / , out : all restaurant
		public function indexAction()
		{
			$em = $this->getDoctrine()->getManager();
			$number = $em->getRepository(Restaurant::class)->findAll();
			return $this->render('restaurant/home.html.twig',['number' => $number,]);
		}
	
		/**
			* @Route("/restaurant/api", name="api_ALLrestaurant")
		*/
		// bonus API return les resultats en format Json
		public function apiindexAction()
		{
			$rawSql = "SELECT * from  restaurant";
			$stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($rawSql);
			$stmt->execute([]);
			$resultat=$stmt->fetchAll();
			// retun les hoaraires du restaurant en format Json 
			//return the time for restaurant en format Json
			 return new JsonResponse($resultat);
		}
    /**
     * @Route("/restaurant/add", name="new_restaurant")
     */
		public function newAction(Request $request)
		{
			$em = $this->getDoctrine()->getManager();
			$restaurant=new Restaurant();
			$form = $this->createForm(RestaurantType::class,$restaurant);
			//sauvgarder de l'entité rensignée dans le formulaire 
			//save all entities reported in the form 
			if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
			{
				$em = $this->getDoctrine()->getManager();
				$em->persist($restaurant);
				$em->flush();
				return $this->redirectToRoute('home');
			}
			
			return $this->render('restaurant/add.html.twig',[
																'form' => $form->createView(),
															]);
		}
		// function show in :id out : show times for the restaurant 
		// fonction retrun entrer :id : sorti: horaire pour le restaurant 
		public function showAction($id)
		{
			// requette SQL pour récupérer les horaire d'un restaurant
			// request SQL to get of times for the restaurant
			$rawSql = "SELECT restaurant.id as idrestaurant , horaire.samedi as  samedi, horaire.dimanche as dimanche, horaire.lundi as  lundi,horaire.mardi as  mardi,horaire.mercredi as  mercredi,horaire.jeudi as jeudi, horaire.vendredi as vendredi,horaire.samedi as samedi,horaire.dimanche as dimanche FROM `restaurant` JOIN horaire on restaurant.id=horaire.idrestaurant where restaurant.id='".$id."'";
			$stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($rawSql);
			$stmt->execute([]);
			$resultat=$stmt->fetchAll();
			// retunr les hoaraires du restaurant 
			//return the time for restaurant
			return $this->render('restaurant/get.html.twig',[
															   'number' => $resultat,
															]);
		}
		/**
			* @Route("/restaurant/api/{id}", name="api_restaurant_by_id")
		*/
		// bonus API return les horaires en Json 
		public function apishowAction($id)
		{
			// requette SQL pour récupérer les horaire d'un restaurant
			// request SQL to get of times for the restaurant
			$rawSql = "SELECT restaurant.name as NameRestaurant,restaurant.id as idrestaurant , horaire.samedi as  samedi, horaire.dimanche as dimanche, horaire.lundi as  lundi,horaire.mardi as  mardi,horaire.mercredi as  mercredi,horaire.jeudi as jeudi, horaire.vendredi as vendredi,horaire.samedi as samedi,horaire.dimanche as dimanche FROM `restaurant` JOIN horaire on restaurant.id=horaire.idrestaurant where restaurant.id='".$id."'";
			$stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($rawSql);
			$stmt->execute([]);
			$resultat=$stmt->fetchAll();
			// retun les hoaraires du restaurant en format JSON 
			//return the time for restaurant in Json
			 return new JsonResponse($resultat);
		}
	}









?>