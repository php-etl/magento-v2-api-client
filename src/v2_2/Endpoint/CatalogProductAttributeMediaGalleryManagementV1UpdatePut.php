<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductAttributeMediaGalleryManagementV1UpdatePut extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $entryId;
    /**
     * Update gallery entry
     *
     * @param string $sku
     * @param string $entryId
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsSkuMediaEntryIdPutBody $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody
     */
    public function __construct(string $sku, string $entryId, \Kiboko\Magento\v2_2\Model\V1ProductsSkuMediaEntryIdPutBody $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody)
    {
        $this->sku = $sku;
        $this->entryId = $entryId;
        $this->body = $catalogProductAttributeMediaGalleryManagementV1UpdatePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{entryId}'), array($this->sku, $this->entryId), '/V1/products/{sku}/media/{entryId}');
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductAttributeMediaGalleryManagementV1UpdatePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
