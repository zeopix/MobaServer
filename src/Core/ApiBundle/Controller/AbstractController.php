<?php
namespace Core\ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;


class AbstractController extends Controller {

    protected $encoders;
    protected $normalizers;
    protected $serializer=false;
    protected $em=false;

    protected function getSerializer(){
        if(!$this->serializer){
            $this->encoders = array(new XmlEncoder(), new JsonEncoder());
            $this->normalizers = array(new GetSetMethodNormalizer());
            $this->serializer = new Serializer($this->normalizers, $this->encoders);
        }
        return $this->serializer;
    }

    /**
     * Devuelve una respuesta tipo Api.
     *
     * @param mixed   $response       Objeto Respuesta (Array,Object)
	 *
     * @return Response
     *
     */
    protected function createApiResponse($response)
    {
        $callback = $this->getRequest()->query->get('callback');
        $isJsonp = isset($callback) ? true : false;
        $callback = !$isJsonp ? $response : $callback . "(" . $response . ")";
        return new \Symfony\Component\HttpFoundation\Response($callback);
    }

    protected function getEm(){
        if(!$this->em){
            $this->em = $this->getDoctrine()->getEntityManager();
        }
        return $this->em;
    }



}
