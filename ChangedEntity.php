<?php
/*
 * (c) 2011 SimpleThings GmbH
 *
 * @package SimpleThings\EntityAudit
 * @author Benjamin Eberlei <eberlei@simplethings.de>
 * @link http://www.simplethings.de
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
 */

namespace SimpleThings\EntityAudit;

class ChangedEntity
{
    private $className;
    private $id;
    private $mode;
    private $entity;
    
    public function __construct($className, array $id, $mode, $entity)
    {
        $this->className = $className;
        $this->id = $id;
        $this->mode = $mode;
        $this->revision = $revision;
        $this->auditReader = $reader;
    }
    
    /**
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     *
     * @return array
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }
    
    /**
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * @return object
     */
    public function getEntity()
    {
        return $this->entity;
    }
}