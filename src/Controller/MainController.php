<?php

namespace App\Controller;

use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="app_home")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }

    /**
     *@Route("/dashboard", name="app_dashboard")
     */
    public function dashboard()
    {
        return $this->render('main/dashboard.html.twig');
    }

    /**
     *@Route("/new-game", name="app_new_game")
     */
    public function addGame(Request $request)
    {
        
        $finder = new Finder();
        $finder->files()->in(__DIR__ . '/../../public');

        $contents = [];
        
        foreach ($finder as $file) {
            $contents[] = $file->getContents();
        }

        dump($contents); exit;

    }
}
