<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/spells")
 */
class SpellController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        $spells = $this->getEm()->getRepository('CoreDataBundle:Spell')->findAll();
        $serialized = $this->getSerializer()->serialize($spells, 'json');
        return $this->createApiResponse($serialized);
    }
}
