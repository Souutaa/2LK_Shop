<?php

namespace app\models;

use PDO;

class Brand
{
    protected $id;
    protected $name;
    protected $delete_at;

    // GET METHODS
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDeleteAt()
    {
        return $this->delete_at;
    }

    // SET METHODS
    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setDeleteAt($delete_at)
    {
        $this->delete_at = $delete_at;
    }

    //CRUD
    public function create(array $data)
    {

    }

    public function read(int $id)
    {

    }

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }
}
