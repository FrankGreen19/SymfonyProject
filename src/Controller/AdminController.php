<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Recording;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin/", name="admin")
     */
    public function index(): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery("SELECT r FROM App\Entity\Recording r");
        $recordings = $query->getResult();

        return $this->render('admin/index.html.twig', [
            'data' => $recordings,
            'recording' => '',
            'controller_name' => 'Админ-панель',
        ]);
    }

    /**
     * @Route("/admin/edit/{id}", name="edit")
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $query = $entityManager->createQuery("SELECT r FROM App\Entity\Recording r WHERE r.id = $id");
        $recording = $query->getResult();


        return $this->render('admin/edit.html.twig', [
            'recording' => $recording,
            'controller_name' => 'Запись №' . $id,
        ]);
    }

    /**
     * @Route("/admin/update", methods={"POST"})
     */
    public function update(): Response
    {
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
        $recording->setId($_POST['id']);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->merge($recording);
        $entityManager->flush();

        return $this->redirect("/admin");
    }

    /**
     * @Route("/admin/delete/{id}", methods={"GET"})
     * @param int $id
     * @return Response
     */
    public function delete(int $id): Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->remove($entityManager->find("App\Entity\Recording", $id));
        $entityManager->flush();

        return $this->redirect("/admin");
    }
}
