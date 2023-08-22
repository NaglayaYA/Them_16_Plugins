<?php
namespace Perspective\Them16ex1ChangeCourse\Plugin;

class ChangeCourse
{
    /**
     * @var \Magento\Directory\Model\CurrencyFactory
     */
    private $_currencyFactory;

    public function __construct(
        \Magento\Directory\Model\CurrencyFactory $currencyFactory
    )
    {
        $this->_currencyFactory = $currencyFactory;
        
    }

    private function _convertPrice($price)
    {
        $rate = $this->_currencyFactory->create()
            ->load("USD")
            ->getAnyRate("USD");

        $rateTemp = $rate * 0.1;
        $rate = $rateTemp + $rate;
        $convertedPrice = $price * $rate;

        return $convertedPrice;
    }

    public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        $result = $this->_convertPrice($result);
        return $result;
    }
}