<?php
/**
 * Created by PhpStorm.
 * User: nbilleau
 * Date: 09/09/15
 * Time: 11:33
 */
namespace Iad\Bundle\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BusinessTrainingServiceController extends Controller
{

    public function sayAction()
    {
       return new Response($this->get('say_hello')->say());
    }

}