<?php

namespace Kiboko\Magento\v2_4\Endpoint;

class CompanyCompanyRepositoryV1SavePut extends \Kiboko\Magento\v2_4\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\v2_4\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\v2_4\Runtime\Client\EndpointTrait;
    protected $companyId;
    /**
     * Create or update a company account.
     *
     * @param string $companyId
     * @param \Kiboko\Magento\v2_4\Model\V1CompanyCompanyIdPutBody $companyCompanyRepositoryV1SavePutBody
     */
    public function __construct(string $companyId, \Kiboko\Magento\v2_4\Model\V1CompanyCompanyIdPutBody $companyCompanyRepositoryV1SavePutBody)
    {
        $this->companyId = $companyId;
        $this->body = $companyCompanyRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{companyId}'), array($this->companyId), '/V1/company/{companyId}');
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
     * @throws \Kiboko\Magento\v2_4\Exception\CompanyCompanyRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\v2_4\Exception\CompanyCompanyRepositoryV1SavePutUnauthorizedException
     *
     * @return null|\Kiboko\Magento\v2_4\Model\CompanyDataCompanyInterface|\Kiboko\Magento\v2_4\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\CompanyDataCompanyInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CompanyCompanyRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\v2_4\Exception\CompanyCompanyRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\v2_4\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
