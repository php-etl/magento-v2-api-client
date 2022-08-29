<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class QuoteCouponManagementV1SetPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $couponCode;
    /**
     * Adds a coupon by code to a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param string $couponCode The coupon code data.
     */
    public function __construct(int $cartId, string $couponCode)
    {
        $this->cartId = $cartId;
        $this->couponCode = $couponCode;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{couponCode}'), array($this->cartId, $this->couponCode), '/V1/carts/{cartId}/coupons/{couponCode}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\QuoteCouponManagementV1SetPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
