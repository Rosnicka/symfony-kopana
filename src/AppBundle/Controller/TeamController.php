<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 7.4.2017
 * Time: 3:27
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller
{
    /** @Route("/teams/{teamName}") */
    public function showAction($teamName)
    {
        $players = [
            'Tomáš Křížek',
            'Vojtěch Lysý',
            'Lukáš Matoušek',
            'Lukáš Kloubek',
            'Jakub Městka',
        ];

        return $this->render('team/show.html.twig', [
            'name' => $teamName,
            'players' => $players,
        ]);
    }
}