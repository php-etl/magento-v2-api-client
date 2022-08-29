<?php

namespace Kiboko\Magento\v2_3\Endpoint;

class SharedCatalogSharedCatalogRepositoryV1SavePost extends \Kiboko\Magento\v2_3\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_3\Runtime\Client\Endpoint
{
    /**
     * Create or update Shared Catalog service.
     *
     * @param \Kiboko\Magento\v2_3\Model\V1SharedCatalogPostBody $sharedCatalogSharedCatalogRepositoryV1SavePostBody 
     */
    public function __construct(\Kiboko\Magento\v2_3\Model\V1SharedCatalogPostBody $sharedCatalogSharedCatalogRepositoryV1SavePostBody)
    {
        $this->body = $sharedCatalogSharedCatalogRepositoryV1SavePostBody;
    }
    use \Kiboko\Magento\v2_3\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'POST';
    }
    public function getUri() : string
    {
        return '/V1/sharedCatalog';
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
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostUnauthorizedException
     * @throws \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_3\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return json_decode($body);
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_3\Exception\SharedCatalogSharedCatalogRepositoryV1SavePostInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_3\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}