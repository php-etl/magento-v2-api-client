<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $giftCardCode;
    /**
     *
     *
     * @param string $giftCardCode
     */
    public function __construct(string $giftCardCode)
    {
        $this->giftCardCode = $giftCardCode;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{giftCardCode}'), array($this->giftCardCode), '/V1/carts/mine/checkGiftCard/{giftCardCode}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetBadRequestException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\GiftCardAccountGiftCardAccountManagementV1CheckGiftCardGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
