<?php

namespace ProjetWestaflex\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use ProjetWestaflex\PlatformBundle\Entity\Config_tube;
use ProjetWestaflex\PlatformBundle\Entity\Statistiques;
use ProjetWestaflex\PlatformBundle\Entity\SelectionProcedure;
use Symfony\Component\HttpKernel\Exception\Exceptionnellement;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ProjetController extends Controller
{

  public function enregistreAction(Request $request)
  {
    $procedure = new Config_tube();
    $formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $procedure);
    $formBuilder

      ->add('client',      TextType::class)
      ->add('pression',     IntegerType::class)
      ->add('duree',   IntegerType::class)
      ->add('marge',    IntegerType::class)
      ->add('diametre',    IntegerType::class)
      ->add('reference',      TextType::class)
      ->add('save',      SubmitType::class)
    ;  

    $form = $formBuilder->getForm();
    if ($request->isMethod('POST')) {
      $form->handleRequest($request);

      if ($form->isValid()) {

        $em = $this->getDoctrine()->getManager();

        $em->persist($procedure);

        $em->flush();
         return $this->redirectToRoute('projet_westaflex_platform_enregistre_procedure');
        }
    } 
    return $this->render('ProjetWestaflexPlatformBundle:Projet:enregistreProcedure.html.twig', array(
      'form' => $form->createView(),  ));
  }

 public function statsAction(Request $request)
  {
    $repository = $this

  ->getDoctrine()

  ->getManager()

  ->getRepository('ProjetWestaflexPlatformBundle:Statistiques')
  ;

  $stats = $repository->findAll();

     return $this->render('ProjetWestaflexPlatformBundle:Projet:statistiques.html.twig', array('stats' => $stats  ));
  }
   
  public function listesproceduresAction(Request $request)
  {
    $repository = $this

  ->getDoctrine()

  ->getManager()

  ->getRepository('ProjetWestaflexPlatformBundle:Config_tube')
  ;

  $procedures = $repository->findAll();

     return $this->render('ProjetWestaflexPlatformBundle:Projet:listeProcedures.html.twig', array('procedures' => $procedures));
  }

 public function deleteprocedureAction($id,Request $request)
 {
   $em = $this->getDoctrine()->getManager();
   $procedure = $em->getRepository('ProjetWestaflexPlatformBundle:Config_tube')->find($id);
   $em->remove($procedure);
   $em->flush();
   return $this->redirectToRoute('projet_westaflex_platform_liste_procedures');
 }
  
 public function selectionprocedureAction(Request $request)
 {
   $repository = $this

  ->getDoctrine()

  ->getManager()

  ->getRepository('ProjetWestaflexPlatformBundle:Config_tube')
  ;

  $procedures = $repository->findAll();
    return $this->render('ProjetWestaflexPlatformBundle:Projet:selectionProcedure.html.twig', array(
      'procedures' => $procedures )); 
 }
 public function updateprocedureAction($id,Request $request)
 {
   $em = $this->getDoctrine()->getManager();
   $procedure = $em->getRepository('ProjetWestaflexPlatformBundle:SelectionProcedure')->find(1);

   $procedure->setIdProcedure($id);
   $em->flush();
   return $this->redirectToRoute('projet_westaflex_platform_selection_procedure');
 }
 public function afficheprocedureAction($id,Request $request)
 {
  $repository = $this

  ->getDoctrine()

  ->getManager()

  ->getRepository('ProjetWestaflexPlatformBundle:Config_tube')
  ;

  $procedure = $repository->find($id);

     return $this->render('ProjetWestaflexPlatformBundle:Projet:afficheProcedureId.html.twig', array('procedure' => $procedure));
 }
}
?>
