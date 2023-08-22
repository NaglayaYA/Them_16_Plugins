<?php

namespace Perspective\RestrictAddToCart\Plugin\Model\Checkout\Cart;


use Magento\Framework\Exception\LocalizedException;


class RestrictAddToCart

{

 public function beforeAddProduct($subject, $productInfo, $requestInfo = null)

 {


 try {


        $productId = $productInfo->getId();


        /*

        if ($productId == 1) {

            throw new LocalizedException(__('Could not add Product to Cart'));

          }

         */

        if ($productInfo->getFinalPrice() < 50) {

          throw new LocalizedException(__('Could not add Product to Cart'));

        }


 } catch (\Exception $e) {

 throw new LocalizedException(__($e->getMessage()));

 }


 return [$productInfo, $requestInfo];

 }

}