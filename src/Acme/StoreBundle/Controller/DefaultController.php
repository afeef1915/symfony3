<?php

namespace Acme\StoreBundle\Controller;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('AcmeStoreBundle:Default:index.html.twig');
    }

    public function createAction(Request $request) {
        $product = new Product();
        $data = json_decode(file_get_contents('php://input'), true);
        
        $product->setName($data['name']['name']);
        $product->setPrice($data['name']['price']);
        // $product->setName($data['name']);
        //$product->setPrice($data['price']);
        $dm = $this->get('doctrine_mongodb')->getManager();

        $dm->persist($product);
        $dm->flush();
        //die("data saved successfully");
        return new Response('Created product id ' . $product->getId());
    }

    public function showAction() {
        $product = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:Product')
                ->findAll();
       // print_r($product);die;
        //echo json_encode($product);
        //die;
        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response($serializer->serialize($product, 'json'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
        // do something, like pass the $product object into a template
    }

    public function showByIdAction($id) {
        $product = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:Product')
                ->find($id);

        $encoders = array(new JsonEncoder());
        $normalizers = array(new GetSetMethodNormalizer());
        $serializer = new Serializer($normalizers, $encoders);

        $response = new Response($serializer->serialize($product, 'json'));
        $response->headers->set('Content-Type', 'application/json');
        return $response;
        // do something, like pass the $product object into a template
    }

    public function updateAction($id,Request $request) {
        
       
        $data = json_decode(file_get_contents('php://input'), true);
       
       
        $dm = $this->get('doctrine_mongodb')->getManager();
        $product = $dm->getRepository('AcmeStoreBundle:Product')->find($id);
      
       
        if (!$product) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }

        $product->setName($data['name']);
        $product->setPrice($data['price']);
        $dm->flush();
        die("data Updated succesffullu");
        //return $this->redirectToRoute('homepage');
    }

      public function deleteAction($id,Request $request) {
        
     
        $data = json_decode(file_get_contents('php://input'), true);
       // var_dump($data);die;
       
        $dm = $this->get('doctrine_mongodb')->getManager();
        $product = $dm->getRepository('AcmeStoreBundle:Product')->find($id);
      
       
        if (!$product) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }
        //$em = $this->getDoctrine()->getEntityManager();
        $dm->remove($product);
        $dm->flush();
//        $product->setName($data['name']);
//        $product->setPrice($data['price']);
//        $dm->flush();
        die("data deleted successfully");
        //return $this->redirectToRoute('homepage');
    }

}
