<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $cartId;
    /**
     * Add gift card to the cart.
     *
     * @param string $cartId
     * @param \Kiboko\Magento\v2_4\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody
     */
    public function __construct(string $cartId, \Kiboko\Magento\v2_4\Model\V1CartsGuestCartsCartIdGiftCardsPostBody $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody)
    {
        $this->cartId = $cartId;
        $this->body = $giftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}'), array($this->cartId), '/V1/carts/guest-carts/{cartId}/giftCards');
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
     * @throws \Kiboko\Magento\v2_4\Exception\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\GiftCardAccountGuestGiftCardAccountManagementV1AddGiftCardPostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
