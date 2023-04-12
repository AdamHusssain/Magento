<?php
namespace Form\DataFormModule\Model;
use Magento\Framework\Model\AbstractModel;
class Test extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Form\DataFormModule\Model\ResourceModel\Test');
    }
}
