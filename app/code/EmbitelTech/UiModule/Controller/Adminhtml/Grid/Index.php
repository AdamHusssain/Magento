<?php 
namespace EmbitelTech\UiModule\Controller\Adminhtml\Grid; 

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\Registry;
use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\Model\View\Result\ForwardFactory;


class Index extends Action {
	/**
	 * @see _isAllowed()
	 */
    const ACTION_RESOURCE = 'EmbitelTech_UiModule::uimodule';

	/**
	 * @var Registry
	 */

	 protected $coreRegistry;

	 /**
	  * @var pageFactory
	  */

	  protected $resultPageFactory;

	  /**
	   * @var ForwardFactory;
	   *
	   */

	  /**
	   * @param Registry $registry
	   * @param pageFactory $resultPageFactory
	   * @param ForwardFactory $resultForwardFactory
	   * @param Context $context
	   */

	   public function __construct(
			Registry $registry,
			pageFactory $resultPageFactory,
			ForwardFactory $resultForwardFactory,
			Context $context
	    )
		{
			$this -> coreRegistry = $registry;
			$this -> resultPageFactory = $resultPageFactory;
			$this -> resultForwardFactory = $resultForwardFactory;
			parent::__construct($context);
		}

		/**
		 * @return \Magento\Framework\View\Result\Page
		 */

		 public function execute(){ 
		 $resultPage = $this->resultPageFactory->create();
		 $resultPage -> addBreadCrumb(__('New Sample'), __('New Sample'));
		 $resultPage ->getConfig()->getTitle()->prepend(__('New Sample'));
        return $resultPage;
		 }
	}
