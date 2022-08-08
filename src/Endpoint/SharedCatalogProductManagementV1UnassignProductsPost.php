<?php

namespace Kiboko\Magento\V2\Endpoint;

class SharedCatalogProductManagementV1UnassignProductsPost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $id;
    /**
     * Remove the specified products from the shared catalog.
     *
     * @param int $id
     * @param \Kiboko\Magento\V2\Model\V1SharedCatalogIdUnassignProductsPostBody $sharedCatalogProductManagementV1UnassignProductsPostBody
     */
    public function __construct(int $id, \Kiboko\Magento\V2\Model\V1SharedCatalogIdUnassignProductsPostBody $sharedCatalogProductManagementV1UnassignProductsPostBody)
    {
        $this->id = $id;
        $this->body = $sharedCatalogProductManagementV1UnassignProductsPostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{id}'), array($this->id), '/V1/sharedCatalog/{id}/unassignProducts');
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
     * @throws \Kiboko\Magento\V2\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SharedCatalogProductManagementV1UnassignProductsPostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
