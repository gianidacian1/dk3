<?php
namespace Workshop\Sample\Mapper;

use Dot\Mapper\Mapper\AbstractDbMapper;
use Dot\Mapper\Mapper\MapperInterface;

class SampleDbMapper extends AbstractDbMapper implements MapperInterface
{
    protected $table ='sample';

    public function get($primaryKey, array $options = array())
    {
        return parent::get($primaryKey, $options);
    }
}