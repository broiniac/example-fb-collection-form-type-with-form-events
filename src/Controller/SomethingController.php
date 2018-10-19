<?php

namespace App\Controller;

use App\Entity\Something;
use App\Form\SomethingType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class SomethingController extends AbstractController
{
    /**
     * @Route("/", name="something")
     */
    public function index(Request $request)
    {
        $something = new Something();

        $form = $this->createForm(SomethingType::class, $something);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                dump($form->getData());
                die;
            }

            $this->addFlash('error', 'Something went wrong :)');
        }

        return $this->render('something/index.html.twig', [
            'controller_name' => 'SomethingController',
            'form' => $form->createView(),
        ]);
    }
}
