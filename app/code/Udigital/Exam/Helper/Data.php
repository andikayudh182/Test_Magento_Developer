<?php
namespace Udigital\Exam\Helper;

use Magento\Framework\App\Helper\AbstractHelper;

class Data extends AbstractHelper
{

    public function __construct(
        \Magento\Framework\App\Helper\Context $context
    ) {
        parent::__construct($context);
    }

    public function getIsEnable(){
        return $this->scopeConfig->getValue('udigital_exam/general/enabled', 
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    public function getWordingHidePrice(){
        return $this->scopeConfig->getValue('udigital_exam/general/wording_hide_price', 
                                            \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
}
