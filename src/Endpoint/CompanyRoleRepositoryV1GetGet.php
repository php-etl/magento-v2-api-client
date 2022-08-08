<?php

namespace Kiboko\Magento\V2\Endpoint;

class CompanyRoleRepositoryV1GetGet extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $roleId;
    /**
     * Returns the list of permissions for a specified role.
     *
     * @param int $roleId
     */
    public function __construct(int $roleId)
    {
        $this->roleId = $roleId;
    }
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(array('{roleId}'), array($this->roleId), '/V1/company/role/{roleId}');
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
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetGetBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetGetUnauthorizedException
     *
     * @return null|\Kiboko\Magento\V2\Model\CompanyDataRoleInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\CompanyDataRoleInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetGetBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\CompanyRoleRepositoryV1GetGetUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
