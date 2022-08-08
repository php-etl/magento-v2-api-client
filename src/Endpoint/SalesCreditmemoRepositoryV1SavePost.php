<?php

namespace Kiboko\Magento\V2\Endpoint;

class SalesCreditmemoRepositoryV1SavePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     * Performs persist operations for a specified credit memo.
     *
     * @param \Kiboko\Magento\V2\Model\V1CreditmemoPostBody $salesCreditmemoRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1CreditmemoPostBody $salesCreditmemoRepositoryV1SavePostBody)
    {
        $this->body = $salesCreditmemoRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/creditmemo';
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
     * @throws \Kiboko\Magento\V2\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesDataCreditmemoInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\SalesDataCreditmemoInterface', 'json');
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesCreditmemoRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
