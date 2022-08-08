<?php

namespace Kiboko\Magento\V2\Endpoint;

class QuoteGuestCartItemRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $cartId;
    protected $itemId;
    /**
     * Add/update the specified cart item.
     *
     * @param string $cartId
     * @param string $itemId
     * @param \Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody $quoteGuestCartItemRepositoryV1SavePutBody
     */
    public function __construct(string $cartId, string $itemId, \Kiboko\Magento\V2\Model\V1GuestCartsCartIdItemsItemIdPutBody $quoteGuestCartItemRepositoryV1SavePutBody)
    {
        $this->cartId = $cartId;
        $this->itemId = $itemId;
        $this->body = $quoteGuestCartItemRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{cartId}', '{itemId}'), array($this->cartId, $this->itemId), '/V1/guest-carts/{cartId}/items/{itemId}');
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
     * @throws \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException
     *
     * @return null|\Kiboko\Magento\V2\Model\QuoteDataCartItemInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\QuoteDataCartItemInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\QuoteGuestCartItemRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
