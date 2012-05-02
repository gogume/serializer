<?php

/*
 * Copyright 2011 Johannes M. Schmitt <schmittjoh@gmail.com>
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace JMS\SerializerBundle\Tests\Fixtures;

use JMS\SerializerBundle\Annotation\Groups;
use JMS\SerializerBundle\Annotation\XmlValue;
use JMS\SerializerBundle\Annotation\XmlAttribute;
use JMS\SerializerBundle\Annotation\XmlList;
use JMS\SerializerBundle\Annotation\XmlMap;
use JMS\SerializerBundle\Annotation\Since;
use JMS\SerializerBundle\Annotation\Until;
use JMS\SerializerBundle\Annotation\VirtualProperty;

class ObjectWithVirtualXmlProperties
{

    /**
     *
     * @VirtualProperty("foo")
     * @Groups({"attributes"})
     * @XmlAttribute
     */
    public function getVirualXmlAttributeValue()
    {
        return 'bar';
    }

    /**
     *
     * @Groups({"values"})
     * @VirtualProperty("xml-value")
     * @XmlValue
     */
    public function getVirualXmlValue()
    {
        return 'xml-value';
    }
    
    /**
     *
     * @Groups({"list"})
     * @VirtualProperty("list")
     * @XmlList(inline = true, entry = "val")
     */
    public function getVirualXmlList()
    {
        return array('One','Two');
    }

    /**
     *
     * @Groups({"map"})
     * @VirtualProperty("map")
     * @XmlMap(keyAttribute = "key")
     */
    public function getVirualXmlMap()
    {
        return array(
            'key-one'   => 'One',
            'key-two'   => 'Two'
        );
    }
    
    /**
     *
     * @Groups({"versions"})
     * @VirtualProperty("low")
     * @Until("8")
     */
    public function getVirualLowValue()
    {
        return 1;
    }
    
    /**
     *
     * @Groups({"versions"})
     * @VirtualProperty("hight")
     * @Since("8")
     */
    public function getVirualHighValue()
    {
        return 8;
    }

}