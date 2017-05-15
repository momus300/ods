<?php

namespace AppBundle\Controller;

use Doctrine\ORM\QueryBuilder;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class PanelController extends Controller
{
    public function showAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $brands = $em->getRepository('AppBundle:Brands')->findAll();
        return $this->render('@App/panel/show.html.twig', ['brands' => $brands]);
    }

    public function activitiesAction(Request $request)
    {
        $activities = [];
        if ($request->isMethod('post')) {
            $param = $request->get('test');
            $em = $this->getDoctrine()->getManager();

            $qb = $em->createQueryBuilder();

//            $activities = $em->getRepository('AppBundle:Activities')->findBy(['code' => $param]);
        }
        return $this->render('@App/panel/acrivities.html.twig', ['activities' => $activities]);
    }
}
