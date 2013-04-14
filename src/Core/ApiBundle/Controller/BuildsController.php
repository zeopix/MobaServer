<?php

namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


/**
 * @Route("/builds")
 */
class BuildsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function listAction()
    {
    	$hero = intval($this->getRequest()->get('hero'));
    	
    	if(!$hero){
    		die("no resposne");
    	}
        $request = $this->getRequest();
    	$limit = $request->get("limit",10);
        $first=$request->get("start",0);
    	$builds = $this->getEm()->createQuery('SELECT b FROM CoreDataBundle:Build b WHERE b.hero = :hero and b.title is not null')->setParameter('hero',$hero)->setFirstResult($first)->setMaxResults($limit)->getResult();
    	
    	$serialized = $this->getSerializer()->serialize($builds, 'json');
        return $this->createApiResponse($serialized);
    }
}
