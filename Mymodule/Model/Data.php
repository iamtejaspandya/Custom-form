<?php
namespace Tejas\Mymodule\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Data extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Tejas\Mymodule\Model\ResourceModel\Data');
    }
}