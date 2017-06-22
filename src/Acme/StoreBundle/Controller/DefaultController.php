<?php

namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\StoreBundle\Document\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\GetSetMethodNormalizer;
use Symfony\Component\Serializer\Serializer;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('AcmeStoreBundle:Default:index.html.twig');
    }

    public function createAction() {
        $product = new Product();
        $product->setName('A Foo Bar');
        $product->setPrice('19.99');

        $dm = $this->get('doctrine_mongodb')->getManager();

        $dm->persist($product);
        $dm->flush();

        return new Response('Created product id ' . $product->getId());
    }

    public function showAction() {
        $product = $this->get('doctrine_mongodb')
                ->getRepository('AcmeStoreBundle:Product')
                ->findAll();

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

    public function updateAction($id) {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $product = $dm->getRepository('AcmeStoreBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException('No product found for id ' . $id);
        }

        $product->setName('New product name!');
        $dm->flush();

        return $this->redirectToRoute('homepage');
    }

}
