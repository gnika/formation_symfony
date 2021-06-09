<?php
// src/Controller/FilmController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    public function list()
    {

            return $this->render('blog/index.html.twig');
    }

    public function show()
    {
        return $this->render('blog/login.html.twig');
    }
}