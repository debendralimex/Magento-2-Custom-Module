<?php
namespace Limex\HelloMagento\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'post_id';
	protected $_eventPrefix = 'limex_hellomagento_post_collection';
	protected $_eventObject = 'post_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('Limex\HelloMagento\Model\Post', 'Limex\HelloMagento\Model\ResourceModel\Post');
	}

}
