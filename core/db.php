<?php
namespace core;

class db extends \PDO{
    public function __construct(){;
        $conf = \core\conf::all('db_config');
        $dsn = $conf['DSN'];
        $user = $conf['USER'];
        $passwd = $conf['PASSWD'];
        try{
            parent::__construct($dsn,$user,$passwd);
        }catch(\Exception $e){
            echo $e->getMessage();
        }
    }
}