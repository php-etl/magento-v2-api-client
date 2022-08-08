<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogAttributeSetManagementV1CreatePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     * Create attribute set from data
     *
     * @param \Kiboko\Magento\V2\Model\V1ProductsAttributeSetsPostBody $catalogAttributeSetManagementV1CreatePostBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1ProductsAttributeSetsPostBody $catalogAttributeSetManagementV1CreatePostBody)
    {
        $this->body = $catalogAttributeSetManagementV1CreatePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/attribute-sets';
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
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\EavDataAttributeSetInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\EavDataAttributeSetInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CatalogAttributeSetManagementV1CreatePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CatalogAttributeSetManagementV1CreatePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
