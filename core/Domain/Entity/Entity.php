<?php
// core/Domain/Entity/Entity.php
namespace TDDIntro\Domain\Entity;

abstract class Entity
{
    protected $id;

    public function getId()
    {
        return $this->id;
    }
}
