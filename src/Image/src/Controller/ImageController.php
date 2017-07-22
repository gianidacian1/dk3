<?php
namespace Project\Image\Controller;

use Dot\Controller\AbstractActionController;
use Psr\Http\Message\ResponseInterface;
use Zend\Diactoros\Response\HtmlResponse;
//annotation service
use Dot\AnnotatedServices\Annotation\Service;
use Dot\AnnotatedServices\Annotation\Inject;

/**
 * Class ImageController
 * @Service
 */
class ImageController extends AbstractActionController
{
    public function indexAction():ResponseInterface
    {
        return new HtmlResponse('ok');
    }
}