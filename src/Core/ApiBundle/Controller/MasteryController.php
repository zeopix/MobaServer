<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/masteries")
 */
class MasteryController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        $masteries = $this->getEm()->getRepository('CoreDataBundle:Mastery')->findAll();
        $serialized = $this->getSerializer()->serialize($masteries, 'json');
        return $this->createApiResponse($serialized);
    }
}
