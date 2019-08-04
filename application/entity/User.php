<?php

namespace app\entity;

/**
 * @Entity
 * @Table(name="User",options={"comment":"用户表"})
 */
class User{

    /**
     * @var int
     *
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    protected $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=32, options={"comment": "用户名称"})
     */
    protected $name;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }


}