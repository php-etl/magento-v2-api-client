<?php

namespace Kiboko\Magento\v2_1\Endpoint;

class CmsBlockRepositoryV1GetByIdGet extends \Kiboko\Magento\v2_1\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_1\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_1\Runtime\Client\EndpointTrait;
    protected $blockId;
    /**
     * Retrieve block.
     *
     * @param int $blockId
     */
    public function __construct(int $blockId)
    {
        $this->blockId = $blockId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{blockId}'), array($this->blockId), '/V1/cmsBlock/{blockId}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return array(array(), null);
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException
     * @throws \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\v2_1\Model\CmsDataBlockInterface|\Kiboko\Magento\v2_1\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\CmsDataBlockInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetByIdGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\v2_1\Exception\CmsBlockRepositoryV1GetByIdGetInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_1\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
