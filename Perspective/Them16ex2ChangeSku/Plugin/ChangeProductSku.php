<?php

namespace Perspective\Them16ex2ChangeSku\Plugin;

class ChangeProductSku
{
    public function afterGetSku(\Magento\Catalog\Model\Product $subject, $result)
    {
        return  $subject->getId() . '-' . $result;
    }
}
