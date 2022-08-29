<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class QuoteCartManagementV1PlaceOrderPut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Places an order for a specified cart.
     *
     * @param int $cartId The cart ID.
     * @param \Kiboko\Magento\v2_3\Model\V1CartsCartIdOrderPutBody $quoteCartManagementV1PlaceOrderPutBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_3\Model\V1CartsCartIdOrderPutBody $quoteCartManagementV1PlaceOrderPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $quoteCartManagementV1PlaceOrderPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/order');
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
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\QuoteCartManagementV1PlaceOrderPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
