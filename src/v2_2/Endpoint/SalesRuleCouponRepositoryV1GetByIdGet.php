<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class SalesRuleCouponRepositoryV1GetByIdGet extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $couponId;
    /**
     * Get coupon by coupon id.
     *
     * @param int $couponId
     */
    public function __construct(int $couponId)
    {
        $this->couponId = $couponId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{couponId}'), array($this->couponId), '/V1/coupons/{couponId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\SalesRuleDataCouponInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\SalesRuleDataCouponInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\SalesRuleCouponRepositoryV1GetByIdGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
