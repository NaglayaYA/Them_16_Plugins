<?php
namespace Perspective\Them16price\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Encryption\EncryptorInterface;

class Data extends AbstractHelper
{
    /**
     * @var EncryptorInterface
     */

    protected $encryptor;

    /**
     * @param Context $context
     * @param EncryptorInterface $encryptor
     */
    
    public function __construct(
        Context $context,
        EncryptorInterface $encryptor
    )
    {
        parent::__construct($context);
        $this->encryptor = $encryptor;
    }

    /*
     * @return bool
     */

    public function isEnabled($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->isSetFlag(
            'perspective/general/enabled',
            $scope
        );
    }
     
    /*
     * @return string
     */

    public function getPriceper($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/priceper',
            $scope
        );
    }

     /*
     * @return string
     */

    public function getCategorypr($scope = ScopeConfigInterface::SCOPE_TYPE_DEFAULT)
    {
        return $this->scopeConfig->getValue(
            'perspective/general/category',
            $scope
        );
    }
}