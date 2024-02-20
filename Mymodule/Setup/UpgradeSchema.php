<?php

namespace Tejas\Mymodule\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;


class UpgradeSchema implements UpgradeSchemaInterface
{
    public function upgrade(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $installer = $setup;

        $installer->startSetup();
        
        if(version_compare($context->getVersion(), '1.2.1', '<'))
        {
            if (!$installer->tableExists('tejas_form_data'))
            {
                 $table = $installer->getConnection()->newTable(
                 $installer->getTable('tejas_form_data')
                  )->addColumn(
                     'id',
                     \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
                      null,
                     ['identity' => true, 'nullable' => false, 'primary' => true],
                     'Form Id'
                 )->addColumn(
                     'first_name',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     255,
                     ['nullable' => false],
                     'First Name'
                 )->addColumn(
                     'last_name',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     255,
                     ['nullable' => false],
                     'Last Name'
                 )->addColumn(
                     'gender',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'Gender'
                 )->addColumn(
                     'email',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'Email'
                 )->addColumn(
                     'adress1',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'Adress 1'
                 )->addColumn(
                     'adress2',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'Adress 2'
                 )->addColumn(
                     'city',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'City'
                 )->addColumn(
                     'state',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'State'
                 )->addColumn(
                     'zip_code',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '10',
                     ['nullable' => false],
                     'Zip Code'
                 )->addColumn(
                     'feedback',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                     '255',
                     ['nullable' => false],
                     'Feedback'      
                 )->addColumn(
                     'created_at',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                     null,
                     ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT],
                     'Created At'
                 )->addColumn(
                     'update_time',
                     \Magento\Framework\DB\Ddl\Table::TYPE_TIMESTAMP,
                     null,
                     ['nullable' => false, 'default' => \Magento\Framework\DB\Ddl\Table::TIMESTAMP_INIT_UPDATE],
                     'Updated At'
                 )->setComment(
                     'Form Data Table'
                 );

             $installer->getConnection()->createTable($table);
          }
        }
            
        $installer->endSetup();
    }
}