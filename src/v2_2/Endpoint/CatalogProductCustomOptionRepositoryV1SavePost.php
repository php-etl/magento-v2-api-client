<?php

namespace Kiboko\Magento\v2_2\Endpoint;

class CatalogProductCustomOptionRepositoryV1SavePost extends \Kiboko\Magento\v2_2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_2\Runtime\Client\EndpointTrait;
    /**
     * Save Custom Option
     *
     * @param \Kiboko\Magento\v2_2\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\v2_2\Model\V1ProductsOptionsPostBody $catalogProductCustomOptionRepositoryV1SavePostBody)
    {
        $this->body = $catalogProductCustomOptionRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/products/options';
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
     * @throws \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_2\Model\CatalogDataProductCustomOptionInterface|\Kiboko\Magento\v2_2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\CatalogDataProductCustomOptionInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_2\Exception\CatalogProductCustomOptionRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
