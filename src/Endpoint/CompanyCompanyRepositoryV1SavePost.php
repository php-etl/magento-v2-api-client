<?php

namespace Kiboko\Magento\V2\Endpoint;

class CompanyCompanyRepositoryV1SavePost extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    /**
     * Create or update a company account.
     *
     * @param \Kiboko\Magento\V2\Model\V1CompanyPostBody $companyCompanyRepositoryV1SavePostBody
     */
    public function __construct(\Kiboko\Magento\V2\Model\V1CompanyPostBody $companyCompanyRepositoryV1SavePostBody)
    {
        $this->body = $companyCompanyRepositoryV1SavePostBody;
    }
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/V1/company/';
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
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePostBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePostUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataCompanyInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CompanyDataCompanyInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePostBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyCompanyRepositoryV1SavePostUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
