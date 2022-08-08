<?php

namespace Kiboko\Magento\V2\Endpoint;

class SalesOrderAddressRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $parent_id;
    /**
     * Performs persist operations for a specified order address.
     *
     * @param string $parentId
     * @param \Kiboko\Magento\V2\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody
     */
    public function __construct(string $parentId, \Kiboko\Magento\V2\Model\V1OrdersParentIdPutBody $salesOrderAddressRepositoryV1SavePutBody)
    {
        $this->parent_id = $parentId;
        $this->body = $salesOrderAddressRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{parent_id}'), array($this->parent_id), '/V1/orders/{parent_id}');
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
     * @throws \Kiboko\Magento\V2\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataOrderAddressInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderAddressInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesOrderAddressRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
