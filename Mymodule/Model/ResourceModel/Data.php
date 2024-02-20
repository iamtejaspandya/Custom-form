<?php
namespace Tejas\Mymodule\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Data extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('tejas_form_data', 'id');
    }
}