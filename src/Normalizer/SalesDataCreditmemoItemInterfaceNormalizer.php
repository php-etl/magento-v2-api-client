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

class SalesDataCreditmemoItemInterfaceNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null): bool
    {
        return $type === 'Kiboko\\Magento\\V2\\Model\\SalesDataCreditmemoItemInterface';
    }
    public function supportsNormalization($data, $format = null): bool
    {
        return is_object($data) && get_class($data) === 'Kiboko\\Magento\\V2\\Model\\SalesDataCreditmemoItemInterface';
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
        $object = new \Kiboko\Magento\V2\Model\SalesDataCreditmemoItemInterface();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('additional_data', $data)) {
            $object->setAdditionalData($data['additional_data']);
        }
        if (\array_key_exists('base_cost', $data)) {
            $object->setBaseCost($data['base_cost']);
        }
        if (\array_key_exists('base_discount_amount', $data)) {
            $object->setBaseDiscountAmount($data['base_discount_amount']);
        }
        if (\array_key_exists('base_discount_tax_compensation_amount', $data)) {
            $object->setBaseDiscountTaxCompensationAmount($data['base_discount_tax_compensation_amount']);
        }
        if (\array_key_exists('base_price', $data)) {
            $object->setBasePrice($data['base_price']);
        }
        if (\array_key_exists('base_price_incl_tax', $data)) {
            $object->setBasePriceInclTax($data['base_price_incl_tax']);
        }
        if (\array_key_exists('base_row_total', $data)) {
            $object->setBaseRowTotal($data['base_row_total']);
        }
        if (\array_key_exists('base_row_total_incl_tax', $data)) {
            $object->setBaseRowTotalInclTax($data['base_row_total_incl_tax']);
        }
        if (\array_key_exists('base_tax_amount', $data)) {
            $object->setBaseTaxAmount($data['base_tax_amount']);
        }
        if (\array_key_exists('base_weee_tax_applied_amount', $data)) {
            $object->setBaseWeeeTaxAppliedAmount($data['base_weee_tax_applied_amount']);
        }
        if (\array_key_exists('base_weee_tax_applied_row_amnt', $data)) {
            $object->setBaseWeeeTaxAppliedRowAmnt($data['base_weee_tax_applied_row_amnt']);
        }
        if (\array_key_exists('base_weee_tax_disposition', $data)) {
            $object->setBaseWeeeTaxDisposition($data['base_weee_tax_disposition']);
        }
        if (\array_key_exists('base_weee_tax_row_disposition', $data)) {
            $object->setBaseWeeeTaxRowDisposition($data['base_weee_tax_row_disposition']);
        }
        if (\array_key_exists('description', $data)) {
            $object->setDescription($data['description']);
        }
        if (\array_key_exists('discount_amount', $data)) {
            $object->setDiscountAmount($data['discount_amount']);
        }
        if (\array_key_exists('entity_id', $data)) {
            $object->setEntityId($data['entity_id']);
        }
        if (\array_key_exists('discount_tax_compensation_amount', $data)) {
            $object->setDiscountTaxCompensationAmount($data['discount_tax_compensation_amount']);
        }
        if (\array_key_exists('name', $data)) {
            $object->setName($data['name']);
        }
        if (\array_key_exists('order_item_id', $data)) {
            $object->setOrderItemId($data['order_item_id']);
        }
        if (\array_key_exists('parent_id', $data)) {
            $object->setParentId($data['parent_id']);
        }
        if (\array_key_exists('price', $data)) {
            $object->setPrice($data['price']);
        }
        if (\array_key_exists('price_incl_tax', $data)) {
            $object->setPriceInclTax($data['price_incl_tax']);
        }
        if (\array_key_exists('product_id', $data)) {
            $object->setProductId($data['product_id']);
        }
        if (\array_key_exists('qty', $data)) {
            $object->setQty($data['qty']);
        }
        if (\array_key_exists('row_total', $data)) {
            $object->setRowTotal($data['row_total']);
        }
        if (\array_key_exists('row_total_incl_tax', $data)) {
            $object->setRowTotalInclTax($data['row_total_incl_tax']);
        }
        if (\array_key_exists('sku', $data)) {
            $object->setSku($data['sku']);
        }
        if (\array_key_exists('tax_amount', $data)) {
            $object->setTaxAmount($data['tax_amount']);
        }
        if (\array_key_exists('weee_tax_applied', $data)) {
            $object->setWeeeTaxApplied($data['weee_tax_applied']);
        }
        if (\array_key_exists('weee_tax_applied_amount', $data)) {
            $object->setWeeeTaxAppliedAmount($data['weee_tax_applied_amount']);
        }
        if (\array_key_exists('weee_tax_applied_row_amount', $data)) {
            $object->setWeeeTaxAppliedRowAmount($data['weee_tax_applied_row_amount']);
        }
        if (\array_key_exists('weee_tax_disposition', $data)) {
            $object->setWeeeTaxDisposition($data['weee_tax_disposition']);
        }
        if (\array_key_exists('weee_tax_row_disposition', $data)) {
            $object->setWeeeTaxRowDisposition($data['weee_tax_row_disposition']);
        }
        if (\array_key_exists('extension_attributes', $data)) {
            $object->setExtensionAttributes($this->denormalizer->denormalize($data['extension_attributes'], 'Kiboko\\Magento\\V2\\Model\\SalesDataCreditmemoItemExtensionInterface', 'json', $context));
        }
        return $object;
    }
    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getAdditionalData()) {
            $data['additional_data'] = $object->getAdditionalData();
        }
        $data['base_cost'] = $object->getBaseCost();
        if (null !== $object->getBaseDiscountAmount()) {
            $data['base_discount_amount'] = $object->getBaseDiscountAmount();
        }
        if (null !== $object->getBaseDiscountTaxCompensationAmount()) {
            $data['base_discount_tax_compensation_amount'] = $object->getBaseDiscountTaxCompensationAmount();
        }
        $data['base_price'] = $object->getBasePrice();
        if (null !== $object->getBasePriceInclTax()) {
            $data['base_price_incl_tax'] = $object->getBasePriceInclTax();
        }
        if (null !== $object->getBaseRowTotal()) {
            $data['base_row_total'] = $object->getBaseRowTotal();
        }
        if (null !== $object->getBaseRowTotalInclTax()) {
            $data['base_row_total_incl_tax'] = $object->getBaseRowTotalInclTax();
        }
        if (null !== $object->getBaseTaxAmount()) {
            $data['base_tax_amount'] = $object->getBaseTaxAmount();
        }
        if (null !== $object->getBaseWeeeTaxAppliedAmount()) {
            $data['base_weee_tax_applied_amount'] = $object->getBaseWeeeTaxAppliedAmount();
        }
        if (null !== $object->getBaseWeeeTaxAppliedRowAmnt()) {
            $data['base_weee_tax_applied_row_amnt'] = $object->getBaseWeeeTaxAppliedRowAmnt();
        }
        if (null !== $object->getBaseWeeeTaxDisposition()) {
            $data['base_weee_tax_disposition'] = $object->getBaseWeeeTaxDisposition();
        }
        if (null !== $object->getBaseWeeeTaxRowDisposition()) {
            $data['base_weee_tax_row_disposition'] = $object->getBaseWeeeTaxRowDisposition();
        }
        if (null !== $object->getDescription()) {
            $data['description'] = $object->getDescription();
        }
        if (null !== $object->getDiscountAmount()) {
            $data['discount_amount'] = $object->getDiscountAmount();
        }
        $data['entity_id'] = $object->getEntityId();
        if (null !== $object->getDiscountTaxCompensationAmount()) {
            $data['discount_tax_compensation_amount'] = $object->getDiscountTaxCompensationAmount();
        }
        if (null !== $object->getName()) {
            $data['name'] = $object->getName();
        }
        $data['order_item_id'] = $object->getOrderItemId();
        if (null !== $object->getParentId()) {
            $data['parent_id'] = $object->getParentId();
        }
        if (null !== $object->getPrice()) {
            $data['price'] = $object->getPrice();
        }
        if (null !== $object->getPriceInclTax()) {
            $data['price_incl_tax'] = $object->getPriceInclTax();
        }
        if (null !== $object->getProductId()) {
            $data['product_id'] = $object->getProductId();
        }
        $data['qty'] = $object->getQty();
        if (null !== $object->getRowTotal()) {
            $data['row_total'] = $object->getRowTotal();
        }
        if (null !== $object->getRowTotalInclTax()) {
            $data['row_total_incl_tax'] = $object->getRowTotalInclTax();
        }
        if (null !== $object->getSku()) {
            $data['sku'] = $object->getSku();
        }
        if (null !== $object->getTaxAmount()) {
            $data['tax_amount'] = $object->getTaxAmount();
        }
        if (null !== $object->getWeeeTaxApplied()) {
            $data['weee_tax_applied'] = $object->getWeeeTaxApplied();
        }
        if (null !== $object->getWeeeTaxAppliedAmount()) {
            $data['weee_tax_applied_amount'] = $object->getWeeeTaxAppliedAmount();
        }
        if (null !== $object->getWeeeTaxAppliedRowAmount()) {
            $data['weee_tax_applied_row_amount'] = $object->getWeeeTaxAppliedRowAmount();
        }
        if (null !== $object->getWeeeTaxDisposition()) {
            $data['weee_tax_disposition'] = $object->getWeeeTaxDisposition();
        }
        if (null !== $object->getWeeeTaxRowDisposition()) {
            $data['weee_tax_row_disposition'] = $object->getWeeeTaxRowDisposition();
        }
        if (null !== $object->getExtensionAttributes()) {
            $data['extension_attributes'] = $this->normalizer->normalize($object->getExtensionAttributes(), 'json', $context);
        }
        return $data;
    }
}
