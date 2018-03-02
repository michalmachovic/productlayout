<?php

namespace Gateway3D\ProductLayout\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
 
/**
 * @codeCoverageIgnore
 */
class InstallData implements InstallDataInterface
{
	/**
	 * EAV setup factory
	 *
	 * @var EavSetupFactory
	 */
	private $eavSetupFactory;
 
	/**
	 * Init
	 *
	 * @param EavSetupFactory $eavSetupFactory
	 */
	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
 
	/**
	 * {@inheritdoc}
	 */
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
		/** @var EavSetup $eavSetup */
		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);

		$eavSetup
			->addAttribute(
				\Magento\Catalog\Model\Product::ENTITY,
				'g3d_product_layout',
				[
					'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_STORE,
					'group' => 'Gateway3D Product Layout',
					'input' => 'select',
					'label' => 'Product Layout',
					'required' => false,
					'sort_order' => 15,
					'used_in_product_listing' => true,
                	'backend' => '',
                	'source' => 'Gateway3D\ProductLayout\Model\Config\Source\Options',
                	'visible_on_front' => true,
                	'option' => [ 
                    	'values' => [],
               		]
                ]
			);
			
	}
}