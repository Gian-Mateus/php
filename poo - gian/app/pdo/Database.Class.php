<?php
namespace app\pdo;

abstract class Database{
    abstract protected function connect();

    abstract public function insert($sql);
    abstract public function update($sql);
    abstract public function delete($sql);
    abstract public function select($sql);

}


?>