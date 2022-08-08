<?php

namespace Kiboko\Magento\V2\Endpoint;

class SalesRuleCouponRepositoryV1SavePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     * Save a coupon.
     *
     * @param \Kiboko\Magento\V2\Model\V1CouponsPostBody $salesRuleCouponRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1CouponsPostBody $salesRuleCouponRepositoryV1SavePostBody)
    {
        $this->body = $salesRuleCouponRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/coupons';
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
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\SalesRuleDataCouponInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesRuleCouponRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
