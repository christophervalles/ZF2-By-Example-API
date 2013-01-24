<?php

namespace Wall\Model;

use Zend\Db\TableGateway\AbstractTableGateway;
use Zend\Db\Adapter\Adapter;

use Zend\Db\Sql\Sql,
    Zend\Db\Sql\Where;

class UsersTable extends AbstractTableGateway
{
    protected $table = 'users';
    
    public function __construct(Adapter $adapter)
    {
        $this->adapter = $adapter;
        $this->initialize();
    }
    
    public function getUser($id)
    {
        $sql = new Sql($this->adapter);
        $select = $sql->select();
        $select->from($this->table);
        
        $where = new  Where();
        $where->equalTo('id', $id) ;
        $select->where($where);
        
        $statement = $sql->prepareStatementForSqlObject($select);
        $result = $statement->execute();
        
        return $result;
    }
}