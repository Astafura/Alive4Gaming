<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class FrontController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $render = 'default/index.html.twig';
        // replace this example code with whatever you need
        if(!in_array($this->get('client.informations')->get_client_ip(),["127.0.0.1","86.216.96.219","88.188.200.205","37.171.14.131","78.121.74.3"])){
            $render = 'errors/maintenance.html.twig';
        }
        return $this->render($render, [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
