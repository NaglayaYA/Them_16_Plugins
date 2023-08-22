<?php
namespace Perspective\Them16ex3Threshold\Plugin;

use Magento\Framework\App\Config\ScopeConfigInterface;

class ChangeThreshold
{
    protected $getProductSalableQty;
    protected $scopeConfig;

    public function __construct(
        
        ScopeConfigInterface $scopeConfig
    ) {
       
        $this->scopeConfig = $scopeConfig;
    }

    public function afterGetSku(\Magento\Catalog\Model\Product $subject, $result)
    {
        return  $subject->getId() . '-' . $result;
    }
}