<?php

namespace Kiboko\Magento\V2\Endpoint;

class DownloadableLinkRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $sku;
    protected $id;
    /**
     * Update downloadable link of the given product (link type and its resources cannot be changed)
     *
     * @param string $sku
     * @param string $id
     * @param \Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksIdPutBody $downloadableLinkRepositoryV1SavePutBody
     */
    public function __construct(string $sku, string $id, \Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksIdPutBody $downloadableLinkRepositoryV1SavePutBody)
    {
        $this->sku = $sku;
        $this->id = $id;
        $this->body = $downloadableLinkRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}', '{id}'), array($this->sku, $this->id), '/V1/products/{sku}/downloadable-links/{id}');
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
     * @throws \Kiboko\Magento\V2\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\DownloadableLinkRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
