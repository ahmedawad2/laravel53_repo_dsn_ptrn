<?php

namespace App\Repositories;

use Parse\ParseClient;
use Parse\ParseQuery;

class MongoRepository implements RepositoryInterface
{
    protected $className;

    public function __construct($className)
    {
        ParseClient::initialize('myAppId', null, 'KSJFKKJ3K4JK3J4K3JUWE89ISDJHFSJDFS');
        ParseClient::setServerURL('http://localhost:1337', 'parse');
        $this->className = $className;
    }

    public function all()
    {
        $query = new ParseQuery($this->className);
        $query = $query->find();
        return $query;
    }

    public function find($id)
    {
        $query = new ParseQuery($this->className);
        $query = $query->find($id);
        return $query;
    }
}