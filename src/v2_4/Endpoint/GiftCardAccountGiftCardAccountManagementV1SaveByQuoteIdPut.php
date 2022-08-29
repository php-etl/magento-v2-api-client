<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Add gift card to the cart.
     *
     * @param int $cartId
     * @param \Kiboko\Magento\v2_4\Model\V1CartsCartIdGiftCardsPutBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody
     */
    public function __construct(int $cartId, \Kiboko\Magento\v2_4\Model\V1CartsCartIdGiftCardsPutBody $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody)
    {
        $this->cartId = $cartId;
        $this->body = $giftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/{cartId}/giftCards');
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
     * @throws \Kiboko\Magento\v2_4\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException
     * @throws \Kiboko\Magento\v2_4\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\GiftCardAccountGiftCardAccountManagementV1SaveByQuoteIdPutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
