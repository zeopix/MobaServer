<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/abilities")
 */
class AbilitiesController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        $abilities = $this->getEm()->getRepository('CoreDataBundle:Abilities')->findAll();
        $serialized = $this->getSerializer()->serialize($abilities, 'json');
        return $this->createApiResponse($serialized);
    }
}
