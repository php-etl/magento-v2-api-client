<?php

namespace Kiboko\Magento\V2\Endpoint;

class AmazonPaymentAddressManagementV1GetBillingAddressPut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $amazonOrderReferenceId;
    /**
     *
     *
     * @param string $amazonOrderReferenceId
     * @param \Kiboko\Magento\V2\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody
     */
    public function __construct(string $amazonOrderReferenceId, \Kiboko\Magento\V2\Model\V1AmazonBillingAddressAmazonOrderReferenceIdPutBody $amazonPaymentAddressManagementV1GetBillingAddressPutBody)
    {
        $this->amazonOrderReferenceId = $amazonOrderReferenceId;
        $this->body = $amazonPaymentAddressManagementV1GetBillingAddressPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{amazonOrderReferenceId}'), array($this->amazonOrderReferenceId), '/V1/amazon-billing-address/{amazonOrderReferenceId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
