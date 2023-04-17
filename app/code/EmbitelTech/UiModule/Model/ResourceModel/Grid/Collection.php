<?php
namespace EmbitelTech\UiModule\Model\ResourceModel\Grid;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'article_id';
    /**
     * Define resource model.
     */
    protected function _construct()
    {
        $this->_init('EmbitelTech\UiModule\Model\Grid', 'EmbitelTech\UiModule\Model\ResourceModel\Grid');
    }
}