<?php

namespace App\Controller\Admin;

use App\Entity\Type;
use App\Form\TypeType;
use App\Repository\TypeRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class TypeController extends AbstractController
{
    /**
     * @Route("/admin/type", name="admin_types")
     */
    public function index(TypeRepository $repository)
    {
        $types = $repository->findAll();
        return $this->render('admin/type/inscription.html.twig', [
            'types' => $types,
        ]);
    }

    /**
     * @Route("/admin/type/create", name="ajoutType")
     * @Route("/admin/type{id}", name="modifType", methods="GET|POST")
     */
    public function ajoutEtModif(Type $type = null , Request $request, ManagerRegistry $managerRegistry)
    {
        if (!$type){
            $type = new type();
        }

        $form = $this->createForm(TypeType::class, $type);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $modif = $type->getId() !== null;
            $registry = $managerRegistry->getManager();
            $registry->persist($type);
            $registry->flush();
            $this->addFlash("success",($modif)? "La modification a été effectuée" : "L'ajout a été effectué");
            return $this->redirectToRoute("admin_types");
        }

        return $this->render('admin/type/ajoutEtModif.html.twig', [
            'type' => $type,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/admin/type/{id}", name="supType", methods="delete")
     */
    public function suppression(Type $type, Request $request, ManagerRegistry $managerRegistry)
    {
        if ($this->isCsrfTokenValid("SUP". $type->getId(),$request->get('_token'))){

            $em = $managerRegistry->getManager();
            $em->remove($type);
            $em->flush();
            $this->addFlash("success","La suppression a été effectuée");
            return $this->redirectToRoute("admin_types");
        }

    }
}
