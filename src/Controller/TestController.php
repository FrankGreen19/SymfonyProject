<?php

namespace App\Controller;

use App\Entity\Recording;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/test", methods={"GET"})
     */
    public function index(): Response
    {
        $result['status'] = "";
        $result['color'] = "";

        return $this->render('test/index.html.twig', [
            'controller_name' => 'Тест',
            'result' => $result
        ]);
    }

    /**
     * @Route("/test", methods={"POST"})
     */
    public function post(): Response
    {
        $result['status'] = "Успешно!";
        $result['color'] = "#91ff97";

        if ($_POST['result']) {
            $entityManager = $this->getDoctrine()->getManager();

            $recording = new Recording(
                $_POST['p1'],
                $_POST['p3'],
                $_POST['p5'],
                $_POST['p6'],
                $_POST['p7'],
                $_POST['p8'],
                $_POST['p9'],
                $_POST['p10'],
                $_POST['p11'],
                $_POST['result']
            );

            $entityManager->persist($recording);
            $entityManager->flush();
        } else {
            $result['status'] = "Пустое значение результата";
            $result['color'] = "#fd8585";
        }

        return $this->render('test/index.html.twig', [
            'controller_name' => 'Тест',
            'result' => $result
        ]);
    }
}
