<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class CatalogProductWebsiteLinkRepositoryV1SavePut extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    protected $sku;
    /**
     * Assign a product to the website
     *
     * @param string $sku 
     * @param \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPutBody $catalogProductWebsiteLinkRepositoryV1SavePutBody 
     */
    public function __construct(string $sku, \Kiboko\Magento\v2_3\Model\V1ProductsSkuWebsitesPutBody $catalogProductWebsiteLinkRepositoryV1SavePutBody)
    {
        $this->sku = $sku;
        $this->body = $catalogProductWebsiteLinkRepositoryV1SavePutBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'PUT';
    }
    public function getUri() : string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/products/{sku}/websites');
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
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\CatalogProductWebsiteLinkRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}