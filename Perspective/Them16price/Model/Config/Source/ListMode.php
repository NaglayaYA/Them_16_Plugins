<?php
namespace Perspective\Them16price\Model\Config\Source;

class ListMode implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
     return [
       ['value' => '4', 'label' => __('Bags')],
       ['value' => '5', 'label' => __('Fitness Equipment')],
       ['value' => '6', 'label' => __('Watches')],
       ['value' => '10', 'label' => __('Video Download')]
     ];
    }
}
