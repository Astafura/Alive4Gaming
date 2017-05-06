<?php
/**
 * Created by PhpStorm.
 * User: RmX63
 * Date: 05/05/2017
 * Time: 21:59
 */

namespace AppBundle\Controller\Others;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdminController
{
    /**
     * @Route("/admin", name="AdminHomePage")
     */
    public function admin(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}