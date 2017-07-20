<?php
/**
 * @see https://github.com/dotkernel/frontend/ for the canonical source repository
 * @copyright Copyright (c) 2017 Apidemia (https://www.apidemia.com)
 * @license https://github.com/dotkernel/frontend/blob/master/LICENSE.md MIT License
 */

declare(strict_types=1);

namespace Workshop\Sample;

use Dot\Mapper\Factory\DbMapperFactory;
use Frontend\App\Entity\UserMessageEntity;
use Frontend\App\Factory\ContactFormFactory;
use Frontend\App\Form\ContactForm;
use Frontend\App\Form\UserMessageFieldset;
use Frontend\App\Listener\UserMessageMapperEventListener;
use Frontend\App\Mapper\UserMessageDbMapper;
use Frontend\App\Service\UserMessageService;
use Frontend\App\Service\UserMessageServiceInterface;
use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Class ConfigProvider
 * @package Frontend\App
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            //'dependencies' => $this->getDependencies(),

            'templates' => $this->getTemplates(),

        ];
    }




    public function getTemplates(): array
    {
        return [
            'paths' => [
                'app' => [__DIR__ . '/../templates/app']

            ],
        ];
    }


}
