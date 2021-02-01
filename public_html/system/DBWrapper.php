<?php 

namespace Systems;
require __DIR__.'/../../vendor/a1phanumeric/php-mysql-class/class.DBPDO.php';
        
class DBWrapper {
    private static $db;

    private static function init(){
      if(!isset(self::$db)){
        self::$db = new \DBPDO();
      }    
    }

    public static function table_exists($table_name){
      DBWrapper::init();
      return self::$db->table_exists($table_name);
    }
  
    public static function execute($query, $values = null){
      DBWrapper::init();
      return self::$db->execute($query, $values);
    }
  
    public static function fetch($query, $values = null){
      DBWrapper::init();
      return self::$db->fetch($query, $values);
    }
  
    public static function fetch_All($query, $values = null, $key = null){
      DBWrapper::init();
      return self::$db->fetchAll($query, $values, $key);
    }
  
    public static function lastInsertId(){
      DBWrapper::init();
      return self::$db->lastInsertId();
    }
}
?>