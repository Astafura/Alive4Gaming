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

class AdminController extends Controller
{
    /**
     * @Route("/admin", name="AdminHomePage")
     */
    public function admin(Request $request)
    {
        $render = 'admin/adminHome.html.twig';
        // replace this example code with whatever you need
        if(!in_array($this->get('client.informations')->get_client_ip(),["90.4.244.231","88.188.200.205","78.121.74.3"])){
            $render = 'errors/maintenance.html.twig';
        }
        return $this->render($render, [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}