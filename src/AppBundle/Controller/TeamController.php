<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 7.4.2017
 * Time: 3:27
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Team;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class TeamController extends Controller
{
    /** @Route("/team/list") */
    public function listAction()
    {
        $teams = $this->getDoctrine()
            ->getRepository('AppBundle:Team')
            ->findAll();

        return $this->render('team/list.html.twig', [
            'teams' => $teams,
        ]);
    }

    /** @Route("/registrace-tymu") */
    public function createAction(Request $request)
    {
        $team = new Team();

        $user = $this->getUser()->getId();

        $form = $this->createFormBuilder($team)
            ->add('name', TextType::class, array('label' => 'Název týmu'))
            ->add('save', SubmitType::class, array('label' => 'Vytvořit nový tým'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $team = $form->getData();

            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
             $em = $this->getDoctrine()->getManager();
             $em->persist($team);
             $em->flush();

            return $this->redirectToRoute('app_team_create');
        }

        return $this->render('team/create.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}