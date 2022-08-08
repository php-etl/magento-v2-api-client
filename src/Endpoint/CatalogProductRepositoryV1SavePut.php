<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogProductRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Create product
     *
     * @param string $sku
     * @param \Kiboko\Magento\V2\Model\V1ProductsSkuPutBody $catalogProductRepositoryV1SavePutBody
     */
    public function __construct(string $sku, \Kiboko\Magento\V2\Model\V1ProductsSkuPutBody $catalogProductRepositoryV1SavePutBody)
    {
        $this->sku = $sku;
        $this->body = $catalogProductRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/products/{sku}');
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
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CatalogDataProductInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
