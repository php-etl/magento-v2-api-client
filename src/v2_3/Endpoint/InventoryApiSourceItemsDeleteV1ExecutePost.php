<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class InventoryApiSourceItemsDeleteV1ExecutePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Delete Multiple Source item data
     *
     * @param \Kiboko\Magento\v2_3\Model\V1InventorySourceItemsDeletePostBody $inventoryApiSourceItemsDeleteV1ExecutePostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1InventorySourceItemsDeletePostBody $inventoryApiSourceItemsDeleteV1ExecutePostBody)
    {
        $this->body = $inventoryApiSourceItemsDeleteV1ExecutePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/inventory/source-items-delete';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return $this->getSerializedBody($serializer);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsDeleteV1ExecutePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsDeleteV1ExecutePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsDeleteV1ExecutePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\InventoryApiSourceItemsDeleteV1ExecutePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}