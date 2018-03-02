<?php 
namespace Gateway3D\ProductLayout\Model\Config\Source;
 
use Magento\Eav\Model\ResourceModel\Entity\Attribute\OptionFactory;
use Magento\Framework\DB\Ddl\Table;
 
class Options extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{ 
    /**
     * Get all options
     *
     * @return array
     */
    public function getAllOptions()
    {
        $this->_options = [ 
            ['label'=>'', 'value'=>''],
            ['label'=>'Print on Demand / No Personalisation', 'value'=>'1'],
            ['label'=>'Personalise button', 'value'=>'2'],
            ['label'=>'Straight to Iframe', 'value'=>'3'],
            ['label'=>'Enquiry Only', 'value'=>'4'],
            ['label'=>'No Preview', 'value'=>'5'],
            ['label'=>'Delayed Preview', 'value'=>'6']
        ];
        return $this->_options;
    }
 
    /**
     * Get a text for option value
     *
     * @param string|integer $value
     * @return string|bool
     */
    public function getOptionText($value)
    {
        foreach ($this->getAllOptions() as $option) {
            if ($option['value'] == $value) {
                return $option['label'];
            }
        }
        return false;
    }
}