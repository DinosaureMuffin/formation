<?php
/**
 * Created by PhpStorm.
 * User: nbilleau
 * Date: 09/09/15
 * Time: 15:25
 */

namespace Iad\Bundle\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Hip\MandrillBundle\Message;
use Hip\MandrillBundle\Dispatcher;

class MandrillController extends Controller
{
    public function indexAction()
    {
        $dispatcher = $this->get('hip_mandrill.dispatcher');

        $message = new Message();

        $message
            ->setFromEmail('test@iadfrance.fr')
            ->setFromName('formation')
            ->addTo('test@iadfrance.fr')
            ->setSubject('Symfony rules')
            ->setHtml('<html><body><h1>Bonsoir</h1></body></html>');

        $result = $dispatcher->send($message);

        return new Response('<pre>' . print_r($result, true) . '</pre>');

    }

}