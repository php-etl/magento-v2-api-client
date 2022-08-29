<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    /**
     * Estimate shipping
     *
     * @param \Kiboko\Magento\v2_3\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1GiftregistryMineEstimateShippingMethodsPostBody $giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody)
    {
        $this->body = $giftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/giftregistry/mine/estimate-shipping-methods';
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
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\QuoteDataShippingMethodInterface[]|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\QuoteDataShippingMethodInterface[]', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\GiftRegistryShippingMethodManagementV1EstimateByRegistryIdPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
