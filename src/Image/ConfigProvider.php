<?php
namespace Project\Image;

class ConfigProvider
{
    public function __invoke()
    {
     return [
       'templates'=> $this->getTemplates()
     ];
    }

    public function getTemplates()
    {
        return [
          'paths'=>['image' => __DIR__. '/../templates/image']
        ];
    }
}
