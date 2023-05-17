<?php
/**
 * Created by PhpStorm.
 * User: pedrotentugal
 * Date: 06/04/18
 * Time: 13:08
 */

namespace App\Controller;

//USado para return response
use Symfony\Component\HttpFoundation\Response;
//Usado para controllers
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//Usado para routing anotations
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends Controller
{
    /**
     * @Route("/")
     */
    public function index(){
        //return new Response( '<html><body>Hello world</body></html>');
        $number = mt_rand(0, 100);
        return $this->render('home/homepage.html.twig', array(
            'number' => $number
        ));
    }
}