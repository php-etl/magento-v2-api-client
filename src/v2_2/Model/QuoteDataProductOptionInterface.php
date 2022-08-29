<?php

namespace Kiboko\Magento\v2_2\Model;

class QuoteDataProductOptionInterface
{
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
     *
     * @var QuoteDataProductOptionExtensionInterface
     */
    protected $extensionAttributes;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
     *
     * @return QuoteDataProductOptionExtensionInterface
     */
    public function getExtensionAttributes(): QuoteDataProductOptionExtensionInterface
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ProductOptionInterface
     *
     * @param QuoteDataProductOptionExtensionInterface $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes(QuoteDataProductOptionExtensionInterface $extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
