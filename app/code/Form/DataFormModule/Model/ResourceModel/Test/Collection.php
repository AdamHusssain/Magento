<?php
namespace Form\DataFormModule\Model\ResourceModel\Test;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Form\DataFormModule\Model\Test',
            'Form\DataFormModule\Model\ResourceModel\Test'
        );
    }
}
