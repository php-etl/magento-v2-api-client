<?php

namespace Kiboko\Magento\V2\Endpoint;

class SalesRuleRuleRepositoryV1SavePut extends \Kiboko\Magento\V2\Runtime\Client\BaseEndpoint implements \Kiboko\Magento\V2\Runtime\Client\Endpoint
{
    use \Kiboko\Magento\V2\Runtime\Client\EndpointTrait;
    protected $ruleId;
    /**
     * Save sales rule.
     *
     * @param string $ruleId
     * @param \Kiboko\Magento\V2\Model\V1SalesRulesRuleIdPutBody $salesRuleRuleRepositoryV1SavePutBody
     */
    public function __construct(string $ruleId, \Kiboko\Magento\V2\Model\V1SalesRulesRuleIdPutBody $salesRuleRuleRepositoryV1SavePutBody)
    {
        $this->ruleId = $ruleId;
        $this->body = $salesRuleRuleRepositoryV1SavePutBody;
    }
    public function getMethod(): string
    {
        return 'PUT';
    }
    public function getUri(): string
    {
        return str_replace(array('{ruleId}'), array($this->ruleId), '/V1/salesRules/{ruleId}');
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
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException
     * @throws \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException
     *
     * @return null|\Kiboko\Magento\V2\Model\SalesRuleDataRuleInterface|\Kiboko\Magento\V2\Model\ErrorResponse
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (200 === $status) {
            return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\SalesRuleDataRuleInterface', 'json');
        }
        if (400 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutBadRequestException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (401 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutUnauthorizedException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        if (500 === $status) {
            throw new \Kiboko\Magento\V2\Exception\SalesRuleRuleRepositoryV1SavePutInternalServerErrorException($serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json'));
        }
        return $serializer->deserialize($body, 'Kiboko\\Magento\\V2\\Model\\ErrorResponse', 'json');
    }
    public function getAuthenticationScopes(): array
    {
        return array();
    }
}
