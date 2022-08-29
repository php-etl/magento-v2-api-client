<?php

namespace Kiboko\Magento\v2_4\Model;

class QuoteDataShippingAssignmentInterface
{
    /**
     * Interface ShippingInterface
     *
     * @var QuoteDataShippingInterface
     */
    protected $shipping;
    /**
     *
     *
     * @var QuoteDataCartItemInterface[]
     */
    protected $items;
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
     *
     * @var mixed
     */
    protected $extensionAttributes;
    /**
     * Interface ShippingInterface
     *
     * @return QuoteDataShippingInterface
     */
    public function getShipping(): QuoteDataShippingInterface
    {
        return $this->shipping;
    }
    /**
     * Interface ShippingInterface
     *
     * @param QuoteDataShippingInterface $shipping
     *
     * @return self
     */
    public function setShipping(QuoteDataShippingInterface $shipping): self
    {
        $this->shipping = $shipping;
        return $this;
    }
    /**
     *
     *
     * @return QuoteDataCartItemInterface[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
    /**
     *
     *
     * @param QuoteDataCartItemInterface[] $items
     *
     * @return self
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
     *
     * @return mixed
     */
    public function getExtensionAttributes()
    {
        return $this->extensionAttributes;
    }
    /**
     * ExtensionInterface class for @see \Magento\Quote\Api\Data\ShippingAssignmentInterface
     *
     * @param mixed $extensionAttributes
     *
     * @return self
     */
    public function setExtensionAttributes($extensionAttributes): self
    {
        $this->extensionAttributes = $extensionAttributes;
        return $this;
    }
}
