<?php
/**
 * Created by PhpStorm.
 * User: Tomas
 * Date: 10.4.2017
 * Time: 22:57
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller
{
    /** @Route("/") */
    public function homepageAction()
    {
        return $this->render('index/homepage.html.twig');
    }
}