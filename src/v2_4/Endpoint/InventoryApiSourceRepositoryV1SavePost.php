<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class InventoryApiSourceRepositoryV1SavePost extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    /**
     * Save Source data
     *
     * @param \Kiboko\Magento\v2_4\Model\V1InventorySourcesPostBody $inventoryApiSourceRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\v2_4\Model\V1InventorySourcesPostBody $inventoryApiSourceRepositoryV1SavePostBody)
    {
        $this->body = $inventoryApiSourceRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/inventory/sources';
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
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiSourceRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\InventoryApiSourceRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiSourceRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\InventoryApiSourceRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
