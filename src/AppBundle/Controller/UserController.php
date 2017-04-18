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

class UserController extends Controller
{
    /** @Route("/administrace/zapasy") */
    public function listAction()
    {
        return $this->render('game/list.html.twig');
    }
}