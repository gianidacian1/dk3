<?php
namespace Workshop\Sample;

use Dot\Controller\AbstractActionController;
use Dot\AnnotatedServices\Annotation\Service;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;

/**
 * @Service
 */
class SampleController extends AbstractActionController
{
    /**
     * @return ResponseInterface
     */
    public function indexAction():ResponseInterface
    {
       return new HtmlResponse($this->template('app::test'));
    }
}