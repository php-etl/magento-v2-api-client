<?php

namespace Kiboko\Magento\v2_2\Model;

class V1ProductsAttributeSetsAttributeSetIdGroupsPutBody
{
    /**
     * Interface AttributeGroupInterface
     *
     * @var EavDataAttributeGroupInterface
     */
    protected $group;
    /**
     * Interface AttributeGroupInterface
     *
     * @return EavDataAttributeGroupInterface
     */
    public function getGroup(): EavDataAttributeGroupInterface
    {
        return $this->group;
    }
    /**
     * Interface AttributeGroupInterface
     *
     * @param EavDataAttributeGroupInterface $group
     *
     * @return self
     */
    public function setGroup(EavDataAttributeGroupInterface $group): self
    {
        $this->group = $group;
        return $this;
    }
}
