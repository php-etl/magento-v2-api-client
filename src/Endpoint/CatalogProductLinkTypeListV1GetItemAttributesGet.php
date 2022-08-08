<?php

namespace Kiboko\Magento\V2\Endpoint;

class CatalogProductLinkTypeListV1GetItemAttributesGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $type;
    /**
     * Provide a list of the product link type attributes
     *
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this->type = $type;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{type}'), array($this->type), '/V1/products/links/{type}/attributes');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    public function getExtraHeaders(): array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\V2\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CatalogDataProductLinkAttributeInterface[]|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CatalogDataProductLinkAttributeInterface[]', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CatalogProductLinkTypeListV1GetItemAttributesGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
