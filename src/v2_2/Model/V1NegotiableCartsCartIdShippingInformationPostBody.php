<?php

namespace Kiboko\Magento\v2_2\Model;

class V1NegotiableCartsCartIdShippingInformationPostBody
{
    /**
     * Interface ShippingInformationInterface
     *
     * @var CheckoutDataShippingInformationInterface
     */
    protected $addressInformation;
    /**
     * Interface ShippingInformationInterface
     *
     * @return CheckoutDataShippingInformationInterface
     */
    public function getAddressInformation(): CheckoutDataShippingInformationInterface
    {
        return $this->addressInformation;
    }
    /**
     * Interface ShippingInformationInterface
     *
     * @param CheckoutDataShippingInformationInterface $addressInformation
     *
     * @return self
     */
    public function setAddressInformation(CheckoutDataShippingInformationInterface $addressInformation): self
    {
        $this->addressInformation = $addressInformation;
        return $this;
    }
}
