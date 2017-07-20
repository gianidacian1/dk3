<?php
namespace Workshop\Sample\Controller;

use Dot\Controller\AbstractActionController;
use Dot\AnnotatedServices\Annotation\Service;
use Dot\AnnotatedServices\Annotation\Inject;
use Psr\Http\Message\ResponseInterface;
use Workshop\Sample\Service\SampleService;
use Workshop\Sample\Service\SampleServiceInterface;
use Zend\Diactoros\Response\HtmlResponse;

/**
 * @Service
 */
class SampleController extends AbstractActionController
{
    protected $service;
    /**
     * @Inject ({SampleService::class})
     */
    public function __construct(SampleServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * @return ResponseInterface
     */
    public function indexAction():ResponseInterface
    {
        $data['test'] = $this->service->getSample(1);
        var_dump($data);exit;
       return new HtmlResponse($this->template('app::test'));
    }
}