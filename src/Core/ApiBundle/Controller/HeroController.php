<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/heros")
 */
class HeroController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
    	$heros = $this->getEm()->getRepository('CoreDataBundle:Hero')->findAll();
    	$serialized = $this->getSerializer()->serialize($heros, 'json');
        return $this->createApiResponse($serialized);
    }
}
