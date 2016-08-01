<?php 

namespace Telma\DashboardBundle\Controller;

use Telma\DashboardBundle\Entity\Offre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

/**
* 
*/
class MainController extends Controller
{
	public function indexAction()
	{
		$listOffre = array(
			'offre',
			'debitactuel',
			'debitmin',
			'debitmax'
			);
		//indique la page ou se trouve l'utilisateur
		$page = "index";
		$em = $this->getDoctrine()->getManager();

		$offres = $em->getRepository('TelmaDashboardBundle:Offre')->findAll();

		 return $this->render('TelmaDashboardBundle:Dashboard:index.html.twig', array('valeurOffre' => $offres , 
		 			'listOffre' => $listOffre,
		 			'page' => $page
		 	));
	}

	public function addAction(Request $request){
		$page = "add";
		$offre = new Offre();

		$form = $this->get('form.factory')->createBuilder(FormType::class, $offre)
			->add('nomOffre', TextType::class)
			->add('type', TextType::class)
			->add('debitMin', NumberType::class)
			->add('debitMax', NumberType::class)
			->add('Save', SubmitType::class)
			->getForm();

		if ($request->isMethod('POST'))
		{
			$form->handleRequest($request);

			if ($form->isValid()){
				$em = $this->getDoctrine()
							->getManager();
				$em->persist($offre);
				$em->flush();

				return $this->redirectToRoute('telma_dashboard_homepage');
			}
		}

		return $this->render('TelmaDashboardBundle:Dashboard:add.html.twig', array('form' => $form->createView(),
					'page' => $page
			));

	}

	public function reportsAction()
	{
		$datas = array(
			'Hello' => 20.5,
			'Good'  => 29.5,
			'Worked'=> 10,
			'Boss'  => 25,
			'Thanks'=> 15
			); // Le noms des offres avec leurs pourcentages

		$page = "reports";
		return $this->render('TelmaDashboardBundle:Dashboard:reports.html.twig', array('page' => $page, 'datas' => $datas));
	}

	public function policyAction()
	{
		$page = "policy";
		return $this->render('TelmaDashboardBundle:Dashboard:policy.html.twig', array('page' => $page));
	}
}

?>