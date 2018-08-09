<?php
namespace Limex\HelloMagento\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG = 'limex_hellomagento_post';

	protected $_cacheTag = 'limex_hellomagento_post';

	protected $_eventPrefix = 'limex_hellomagento_post';

	protected function _construct()
	{
		$this->_init('Limex\HelloMagento\Model\ResourceModel\Post');
	}

	public function getIdentities()
	{
		return [self::CACHE_TAG . '_' . $this->getId()];
	}

	public function getDefaultValues()
	{
		$values = [];

		return $values;
	}
}