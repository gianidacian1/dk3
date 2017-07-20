<?php
namespace Workshop\Sample\Service;

use Dot\Mapper\Mapper\MapperManager;
use Dot\Mapper\Mapper\MapperManagerAwareInterface;
use Dot\Mapper\Mapper\MapperManagerAwareTrait;
use Workshop\Sample\Entity\SampleEntity;
use Dot\AnnotatedServices\Annotation\Service;
use Dot\AnnotatedServices\Annotation\Inject;

/**
 * Class SampleService
 * @Service
 */
class SampleService implements SampleServiceInterface, MapperManagerAwareInterface
{
use MapperManagerAwareTrait;

    public function getSample($id)
    {
        $mapper = $this->getMapperManager()->get(SampleEntity::class);
        return $mapper->get($id);
    }

    public function getSampleList()
    {
        // TODO: Implement getSampleList() method.
    }
}