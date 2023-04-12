<?php
namespace Form\DataFormModule\Model\ResourceModel;
class Test extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('detail_save', 'id');   //here "detail_save" is table name and "id" is the primary key of custom table
    }
}
