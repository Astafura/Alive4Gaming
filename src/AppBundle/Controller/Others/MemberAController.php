<?php
/**
 * Created by PhpStorm.
 * User: RmX63
 * Date: 05/05/2017
 * Time: 22:00
 */

namespace AppBundle\Controller\Others;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MemberAController
{
    /**
     * @Route("/memberA", name="memberAdminHomePage")
     */
    public function memberAAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}