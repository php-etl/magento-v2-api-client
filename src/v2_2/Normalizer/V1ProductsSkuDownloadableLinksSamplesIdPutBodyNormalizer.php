<?php

namespace Kiboko\Magento\v2_2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\v2_2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class V1ProductsSkuDownloadableLinksSamplesIdPutBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\v2_2\\Model\\V1ProductsSkuDownloadableLinksSamplesIdPutBody';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\v2_2\\Model\\V1ProductsSkuDownloadableLinksSamplesIdPutBody';
    }
    /**
     * @return mixed
     */
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Kiboko\Magento\v2_2\Model\V1ProductsSkuDownloadableLinksSamplesIdPutBody();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('sample', $data)) {
            $object->setSample($this->denormalizer->denormalize($data['sample'], 'Kiboko\\Magento\\v2_2\\Model\\DownloadableDataSampleInterface', 'json', $context));
        }
        if (\array_key_exists('isGlobalScopeContent', $data)) {
            $object->setIsGlobalScopeContent($data['isGlobalScopeContent']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['sample'] = $this->normalizer->normalize($object->getSample(), 'json', $context);
        if (null !== $object->getIsGlobalScopeContent()) {
            $data['isGlobalScopeContent'] = $object->getIsGlobalScopeContent();
        }
        return $data;
    }
}
