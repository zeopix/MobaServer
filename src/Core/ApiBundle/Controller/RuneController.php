<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/runes")
 */
class RuneController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
    	$runes = $this->getEm()->getRepository('CoreDataBundle:Rune')->findAll();
    	$serialized = $this->getSerializer()->serialize($runes, 'json');
        return $this->createApiResponse($serialized);
    }
}
