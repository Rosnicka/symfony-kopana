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

class AdministrationController extends Controller
{
    /** @Route("/administrace") */
    public function indexAction()
    {
        return $this->render('administration/index.html.twig');
    }
}