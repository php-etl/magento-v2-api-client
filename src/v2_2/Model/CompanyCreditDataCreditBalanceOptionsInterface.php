<?php

namespace Kiboko\Magento\v2_2\Model;

class CompanyCreditDataCreditBalanceOptionsInterface
{
    /**
     * Purchase order number.
     *
     * @var string
     */
    protected $purchaseOrder;
    /**
     * Order increment.
     *
     * @var string
     */
    protected $orderIncrement;
    /**
     * Currency display.
     *
     * @var string
     */
    protected $currencyDisplay;
    /**
     * Currency base.
     *
     * @var string
     */
    protected $currencyBase;
    /**
     * Purchase order number.
     *
     * @return string
     */
    public function getPurchaseOrder(): string
    {
        return $this->purchaseOrder;
    }
    /**
     * Purchase order number.
     *
     * @param string $purchaseOrder
     *
     * @return self
     */
    public function setPurchaseOrder(string $purchaseOrder): self
    {
        $this->purchaseOrder = $purchaseOrder;
        return $this;
    }
    /**
     * Order increment.
     *
     * @return string
     */
    public function getOrderIncrement(): string
    {
        return $this->orderIncrement;
    }
    /**
     * Order increment.
     *
     * @param string $orderIncrement
     *
     * @return self
     */
    public function setOrderIncrement(string $orderIncrement): self
    {
        $this->orderIncrement = $orderIncrement;
        return $this;
    }
    /**
     * Currency display.
     *
     * @return string
     */
    public function getCurrencyDisplay(): string
    {
        return $this->currencyDisplay;
    }
    /**
     * Currency display.
     *
     * @param string $currencyDisplay
     *
     * @return self
     */
    public function setCurrencyDisplay(string $currencyDisplay): self
    {
        $this->currencyDisplay = $currencyDisplay;
        return $this;
    }
    /**
     * Currency base.
     *
     * @return string
     */
    public function getCurrencyBase(): string
    {
        return $this->currencyBase;
    }
    /**
     * Currency base.
     *
     * @param string $currencyBase
     *
     * @return self
     */
    public function setCurrencyBase(string $currencyBase): self
    {
        $this->currencyBase = $currencyBase;
        return $this;
    }
}
