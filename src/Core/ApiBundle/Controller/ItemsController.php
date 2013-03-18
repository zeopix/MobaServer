<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/items")
 */
class ItemsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
        $items = $this->getEm()->getRepository('CoreDataBundle:Items')->findAll();
        $serialized = $this->getSerializer()->serialize($items, 'json');
        return $this->createApiResponse($serialized);
    }
}
