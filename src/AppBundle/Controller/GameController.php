<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 17.4.2017
 * Time: 17:30
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GameController extends Controller
{
    /** @Route("/administrace/zapasy") */
    public function listAction()
    {
        return $this->render('game/list.html.twig');
    }


    /** @Route("/administrace/zapas/{gameId}", requirements={"gameId": "\d+"}) */
    public function detailAction($gameId)
    {
        $game = $this->getDoctrine()->getRepository('AppBundle:Game')->find($gameId);

        if (!$game) {
            throw $this->createNotFoundException(
                'Zapás s ID ' . $gameId . ' nebyl nalezen.'
            );
        }

        return $this->render('game/detail.html.twig', ['gameId' => $game]);
    }
}