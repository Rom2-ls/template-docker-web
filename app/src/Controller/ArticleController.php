<?php
// src/Controller/ArticleController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ArticleController extends AbstractController
{
    #[Route(
        path: '/articles/{_locale}/search.{_format}',
        locale: 'en',
        format: 'html',
        requirements: [
            '_locale' => 'en|fr',
            '_format' => 'html|xml',
        ],
    )]
    public function search(): Response
    {
    }
}