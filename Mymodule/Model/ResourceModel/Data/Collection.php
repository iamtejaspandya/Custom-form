<?php
namespace Tejas\Mymodule\Model\ResourceModel\Data;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Tejas\Mymodule\Model\Data', 'Tejas\Mymodule\Model\ResourceModel\Data');
    }
}