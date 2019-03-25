<?php

namespace App;

use App\Config;

class Db
{
    protected $dbh;

    public function __construct()
    {
        $config = Config::getInstance();

        $this->dbh = new \PDO(
            'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']
        );

        //Данная строчка внесена, чтобы справиться с ошибкой PDO при подстановке параметров в запросы с LIMIT
        $this->dbh->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    }

    public function query($sql, $params = [], $class = null)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);

        if (null === $class){
            $sth->setFetchMode(\PDO::FETCH_ASSOC);
        }else {
            $sth->setFetchMode(\PDO::FETCH_CLASS, $class);
        }
        return $sth->fetchAll();
    }

    public function execute($sql, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }

    public function lastInsertId()
    {
        return $this->dbh->lastInsertId();
    }
}
