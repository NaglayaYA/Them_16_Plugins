<?php
namespace Perspective\Them16price\Plugin;

use Perspective\Them16price\Helper\Data;

class PriceDiscount
{
    /**
     * @var Data
     */
    protected $helper;

     public function __construct(
        Data $helper,
    ) {
        $this->helper = $helper;
    }

    public function getProductCategories()
    {
        return $this->helper->getCategorypr();
    }

    public function getPriceReductionPercentage()
    {
        return $this->helper->getPriceper();
    }

    public function getIdArray ()
    {
        $categoryTitle = $this->getProductCategories();
        $categoryTitle = explode(",", $categoryTitle);
        return $categoryTitle;
    } 

     public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
        foreach ($this->getIdArray() as $categoryId)
        {
            if ($subject->getCategoryId() == $categoryId){

                $tempPercent = $this->getPriceReductionPercentage() / 100;
                $Percent = $result * $tempPercent;

                return $result - $Percent;
            }
        }

        return $result;
    } 
}
