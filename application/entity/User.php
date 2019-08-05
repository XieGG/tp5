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
     * @Column(name="username", type="string", length=32, options={"comment": "账号"})
     */
    protected $username;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=64, options={"comment": "密码"})
     */
    protected $password;

    /**
     * @var string
     *
     * @Column(name="mobile", type="string", length=11, options={"comment": "手机号"})
     */
    protected $mobile;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=32, options={"comment": "用户名称"})
     */
    protected $name;

    /**
     * @var string
     *
     * @Column(name="photo", type="string", length=255, options={"comment": "头像"})
     */
    protected $photo;

    /**
     * @var string
     *
     * @Column(name="create_time", type="string", length=64, options={"comment": "创建时间"})
     */
    protected $createTime;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }

    public function getMobile()
    {
        return $this->mobile;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setCreate($createTime)
    {
        $this->createTime = $createTime;
    }

    public function getCreate()
    {
        return $this->createTime;
    }

}