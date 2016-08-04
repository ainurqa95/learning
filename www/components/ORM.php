<?php


  class PDOConfig extends PDO 
{
  private $engine;

  private $host;
   
  private $database;
   
  private $user;
   
  private $pass;

  public function __construct(){

  $this->engine = 'mysql';

  $this->host = 'localhost';

  $this->database = 'myshop';

  $this->user = 'root';

  $this->pass = 'root';

  $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;

  parent::__construct( $dns, $this->user, $this->pass );

  }
  
  
  
}
abstract class MyORM {

  protected $pdo;
  
  protected $table = '';
  
  protected static $tableName = '';

  protected $id ='';

  public $attributes = array();
  
  public $fieldsList = array();
  
  public function __construct($pdo)
  {
    $this->pdo = $pdo;

  }
  
  public function __set($name, $value)
  {
    foreach($this->fieldsList as $field)
    {
      if($field == $name)
      {
        $this->attributes[$name] = $value;
      }
    }
  }
  
  public function __get($name)
  {
    if(isset($this->attributes[$name]))
    {
      return $this->attributes[$name];
    }
  }
  
  public function delete()
  {
    $sth = $this->pdo->prepare('DELETE FROM '.$this->table.' WHERE id=:id');
    $sth->execute(array('id'=>$this->id));
  }
  
     public function update()
    {
       $fields='';
    
       $i = 1;
      foreach($this->attributes as $key=>$value)
    {
      if($key!='Products_idProducts')$fields.=$key.'=:'.$key;  
      
      if($i<count($this->attributes) && $key!='Products_idProducts')
      {
        $fields.=', ';  
      }
      
      $i++;
    }
    $query='UPDATE '.$this->table.' SET '.$fields.' WHERE Products_idProducts=:Products_idProducts';
  //  echo $query;
    //print_r($this->attributes);
    $sth = $this->pdo->prepare($query);
    $sth->execute($this->attributes);

     }

     public function insert()
  {
    $fields='';
    $values='';
    
    $i = 1;
    foreach($this->attributes as $key=>$value)
    {
      $fields.=$key;  
      $values.=':'.$key;
      
      if($i<count($this->attributes))
      {
        $fields.=', ';  
        $values.=', ';
      }
      
      $i++;
    }
    
    $query='INSERT INTO '.$this->table.' ('.$fields.') VALUES ('.$values.')';
    //echo $query;
    $sth = $this->pdo->prepare($query);
    $sth->execute($this->attributes);
    
    $this->id=$this->pdo->lastInsertId();
  }
  
    public static function find($params = array())
  {
    $class = get_called_class();
    $table = $class::$tableName;
   
    $query = "SELECT * FROM ".$table;

    if(isset($params['where']))
    {
      $where = ' WHERE ';
      $i = 0;
      foreach($params['where'] as $key=>$value)
      {
        $where .= ($i == 0)?' ':' AND ';
        $where .= $key.' = :'.$key;
        
        $i++;
      }
      $query .= $where;
      
    }
    //echo $query;
    
    if(isset($params['condition']))
    {
      $query .= ' '.$params['condition'];
    }
    
    $pdo = new PDOConfig();
    
    $sth = $pdo->prepare($query);
    $sth->setFetchMode(PDO::FETCH_CLASS, $class, array($pdo));
    
    $sth->execute((isset($params['where']))?$params['where']:null);
    
    $result=array();
    
    while($obj = $sth->fetch())
    {  
       $result[]=$obj;
    }
    
    return $result;
    
  }
  
  public static function findFirst($param = array())
  {
    
    $class = get_called_class();
   
    $table = $class::$tableName;
    
    $query = "SELECT * FROM ".$table;

    if(count($param) > 0)
    {
      $where = ' WHERE ';
      $i = 0;
      foreach($param as $key=>$value)
      {
        $where .= ($i == 0)?' ':' AND ';
        $where .= $key.' = :'.$key;
        
        $i++;
      }
      $query .= $where;
    }
    

    if(isset($params['condition']))
    {
      $query .= ' '.$params['condition'];
    }
    $pdo = new PDOConfig();
    
    $obj = new $class($pdo);
    
    $sth = $pdo->prepare($query);
    $sth->setFetchMode(PDO::FETCH_INTO, $obj);
    
    $sth->execute($param);
    
    foreach ($sth as $a) {
        $obj = $a;

      return $obj;
    }
    
  }
  
}
     class UsersTable extends MyORM {

           protected $table = 'users';

           protected static $tableName = 'users';

           public $fieldsList = array('idusers', 'login', 'email', 'password', 'name', 'second_name', 'third_name' , 'address', 'phone', 'index', 'date_reg', 'is_active');
  

 /*
        public function update()
    {
       $fields='';
    
       $i = 1;
      foreach($this->attributes as $key=>$value)
    {
      if($key!='Products_idProducts')$fields.=$key.'=:'.$key;  
      
      if($i<count($this->attributes) && $key!='Products_idProducts')
      {
        $fields.=', ';  
      }
      
      $i++;
    }
    $query='UPDATE '.$this->table.' SET '.$fields.' WHERE Products_idProducts=:Products_idProducts and Objects_idObjects=:Objects_idObjects' ;
  //  echo $query;
    //print_r($this->attributes);
    $sth = $this->pdo->prepare($query);
    $sth->execute($this->attributes);

     }
 
     public function insert()
  {
    $fields='';
    $values='';
    
    $i = 1;
    foreach($this->attributes as $key=>$value)
    {
      $fields.=$key;  
      $values.=':'.$key;
      
      if($i<count($this->attributes))
      {
        $fields.=', ';  
        $values.=', ';
      }
      
      $i++;
    }
    
    $query='INSERT INTO '.$this->table.' ('.$fields.') VALUES ('.$values.')';
    
    $sth = $this->pdo->prepare($query);
    $sth->execute($this->attributes);
    
    //$this->idOrders=$this->pdo->lastInsertId();
    //$this->Objects_idObjects=$this->pdo->lastInsertId();
  }
 */
  
  }


?>