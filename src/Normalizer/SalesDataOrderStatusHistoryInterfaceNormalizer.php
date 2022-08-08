<?php

namespace Kiboko\Magento\V2\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use Kiboko\Magento\V2\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class SalesDataOrderStatusHistoryInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderStatusHistoryInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\SalesDataOrderStatusHistoryInterface';
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
        $object = new \Kiboko\Magento\V2\Model\SalesDataOrderStatusHistoryInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('comment', $data)) {
            $object->setComment($data['comment']);
        }
        if (\array_key_exists('created_at', $data)) {
            $object->setCreatedAt($data['created_at']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('entity_name', $data)) {
            $object->setEntityName($data['entity_name']);
        }
        if (\array_key_exists('is_customer_notified', $data)) {
            $object->setIsCustomerNotified($data['is_customer_notified']);
        }
        if (\array_key_exists('is_visible_on_front', $data)) {
            $object->setIsVisibleOnFront($data['is_visible_on_front']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('status', $data)) {
            $object->setStatus($data['status']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($data['extension_attributes']);
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['comment'] = $object->getComment();
        if (null !== $object->getCreatedAt()) {
            $data['created_at'] = $object->getCreatedAt();
        }
        if (null !== $object->getEntityId()) {
            $data['entity_id'] = $object->getEntityId();
        }
        if (null !== $object->getEntityName()) {
            $data['entity_name'] = $object->getEntityName();
        }
        $data['is_customer_notified'] = $object->getIsCustomerNotified();
        $data['is_visible_on_front'] = $object->getIsVisibleOnFront();
        $data['parent_id'] = $object->getParentId();
        if (null !== $object->getStatus()) {
            $data['status'] = $object->getStatus();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $object->getExtensionAttributes();
        }
        return $data;
    }
}
