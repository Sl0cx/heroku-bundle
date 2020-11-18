<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
 /*   public function (): Response
    {
    	$entityManager = $this->getDoctrine()->getManager();

    	$user = new User();
    	$user->setusername('Slocx');
    	$user->setpassword('admin');

    	$entityManager->persist($user);
    	
    	$entityManager->flush();

        return new Response('Saved a new user with id'.$user->getId());
    }*/

    public function notifications ():Response
    {
        $userFirstName = 'simon';
        $userNotifications = ['test', 'test2'];

        return $this->render('user/notifications.html.twig', [
            'user_first_name' => $userFirstName,
            'notifications' => $userNotifications,
        ]);
    }
}
