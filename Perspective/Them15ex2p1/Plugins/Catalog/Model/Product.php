<?php

namespace Perspective\Them15ex2p1\Plugins\Catalog\Model;

use Perspective\Them15ex2p1\ViewModel\Config;

class Product
{
    /**
     * @var Config
     */
    protected $_viewModel;

    public function __construct(
        Config $viewModel,

    ) {

        $this->_viewModel = $viewModel;
    }

    public function afterGetName(\Magento\Catalog\Model\Product $subject, $name)
    {
        
         {
           if($subject->getData('social')){
            
                $name .= " - SOCIAL!!!";
           }
            
        }

        return $name;
    }
}
