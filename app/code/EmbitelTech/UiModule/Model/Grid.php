<?php
namespace EmbitelTech\UiModule\Model;

use EmbitelTech\UiModule\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'EmbitelTech_UiModule';

    /**
     * @var string
     */
    protected $_cacheTag = 'EmbitelTech_UiModule';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'EmbitelTech_UiModule';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('EmbitelTech\UiModule\Grid\Model\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    public function getArticleId()
    {
        return $this->getData(self::article_id);
    }

    /**
     * Set EntityId.
     */
    public function setArticleId($articleId)
    {
        return $this->setData(self::article_id, $articleId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getTitle()
    {
        return $this->getData(self::TITLE);
    }

    /**
     * Set Title.
     */
    public function setTitle($title)
    {
        return $this->setData(self::TITLE, $title);
    }
}
