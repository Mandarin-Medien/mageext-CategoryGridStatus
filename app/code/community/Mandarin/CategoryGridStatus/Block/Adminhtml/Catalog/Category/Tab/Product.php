<?php

class Mandarin_CategoryGridStatus_Block_Adminhtml_Catalog_Category_Tab_Product extends Mage_Adminhtml_Block_Catalog_Category_Tab_Product
{
    protected function _prepareCollection()
    {
        parent::_prepareCollection();

        $collection = $this->getCollection()
            ->addAttributeToSelect('status')
            ->clear()
            ->load();

        return $this;
    }

    protected function _prepareColumns()
    {
        parent::_prepareColumns();

        $this->addColumnAfter('status', array(
            'header'    => Mage::helper('catalog')->__('Status'),
            'width'     => '70',
            'index'     => 'status',
            'type'      => 'options',
            'options'   => Mage::getSingleton('catalog/product_status')->getOptionArray(),
        ), 'sku');
        $this->sortColumnsByOrder();

        return $this;
    }
}
