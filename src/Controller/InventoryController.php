<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class InventoryController extends AbstractController
{
    public function index(Request $request): Response
    {
        return $this->render('item/index.html.twig', [
            'content' => 'hello-world',
            'page_title' => 'Dauntless App'
        ]);
    }

    public function create(Request $request): Response
    {
        return $this->render('item/index.html.twig', [
            'content' => 'Create hello-world',
            'page_title' => 'Add an item'
        ]);
    }
}