<?php

namespace Kiboko\Magento\V2\Endpoint;

class DownloadableSampleRepositoryV1SavePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $sku;
    /**
     * Update downloadable sample of the given product
     *
     * @param string $sku
     * @param \Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $downloadableSampleRepositoryV1SavePostBody
     */
    public function __construct(string $sku, \Kiboko\Magento\V2\Model\V1ProductsSkuDownloadableLinksSamplesPostBody $downloadableSampleRepositoryV1SavePostBody)
    {
        $this->sku = $sku;
        $this->body = $downloadableSampleRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(array('{sku}'), array($this->sku), '/V1/products/{sku}/downloadable-links/samples');
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
     * @throws \Kiboko\Magento\V2\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\DownloadableSampleRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
