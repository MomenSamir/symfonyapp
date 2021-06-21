<?php 
// src/AppBundle/Controller/UserController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

use AppBundle\Entity\Users;

class UserController extends Controller
{
    /**
     * Matches /blog exactly
     *
     * @Route("/blog", name="blog_list")
     */
    public function listAction()
    {
        // ...
		
		 $number = random_int(0, 100);

		 /*
        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
		*/
		
		$users = $this->getDoctrine()->getRepository(Users::class)->findAll(); //->find(12);		
		
        return $this->render('users.html.twig',['users' => $users]);


    }

    /**
     * Matches /blog/*
     *
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function showAction($slug)
    {
        // $slug will equal the dynamic part of the URL
        // e.g. at /blog/yay-routing, then $slug='yay-routing'

        // ...
				echo "ok userssssss" ;

    }
}