<?php

 abstract class MyORM {

  protected $pdo;
  
  protected $table = '';
  
  protected static $tableName = '';

  public $id ='';

  public $attributes = array();
  
  public $fieldsList = array();
  
  public function __construct($pdo)
  {
    $this->pdo = $pdo;
    $this->id = $this->fieldsList[0];


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

    $value_of_id = $this-> __get($this->id);
    $sth = $this->pdo->prepare('DELETE FROM '.$this->table.' WHERE '. $this->id.'=:'.$this->id);
    $sth->execute(array($this->id => $value_of_id));
    
  }
  
     public function update()
    {
       $fields='';
    
       $i = 1;
      foreach($this->attributes as $key=>$value)
    {
      if($key!= '$this->id' )$fields.=$key.'=:'.$key;  
      
      if($i<count($this->attributes) && $key!= '$this->id')
      {
        $fields.=', ';  
      }
      
      $i++;
    }
    $query='UPDATE '.$this->table.' SET '.$fields.' WHERE '.$this->id.' =:'.$this->id;
   // echo $query;
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
   // echo $query;
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
  public static function find_first_with_fields ($param = array(), $fields = array())
  {
     $class = get_called_class();
   
    $table = $class::$tableName;
    if(count($fields>0)){
         $star = '';
         $i=0;
         $n = sizeof($fields);
        foreach ($fields as $key ) {
          $star .= ($i==$n-1) ? $key.' ' : $key.', ';
        $i++;
        }
        $query = "SELECT ". $star ." FROM ".$table;
    }
    else {
    $query = "SELECT * FROM ".$table;
    }

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
   // echo $query;
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
   public static function find_all_with_fields($params = array(), $fields = array(), $offset = 0, $limit = 1000)
  {
    $class = get_called_class();
    $table = $class::$tableName;
   
    if(count($fields>0)){
         $star = '';
         $i=0;
         $n = sizeof($fields);
        foreach ($fields as $key) {
          $star .= ($i==$n-1) ? $key.' ' : $key.', ';
          $i++;
        }
        $query = "SELECT ". $star ." FROM ".$table;
    }
    else {
    $query = "SELECT * FROM ".$table;
    }
    if(isset($params))
    {
      $where = ' WHERE ';
      $i = 0;
      foreach($params as $key=>$value)
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
    
    $query .= " " ."Limit  " .$limit. " offset ".$offset.";";
     //echo $query;
    $pdo = new PDOConfig();
    
    $sth = $pdo->prepare($query);
    $sth->setFetchMode(PDO::FETCH_CLASS, $class, array($pdo));
    
    $sth->execute((isset($params))?$params:null);
    
    $result=array();
    
    while($obj = $sth->fetch())
    {  
       $result[]=$obj;
    }
    
    return $result;
    
  }
   public static function find_all_with_fields_where_in ($params = array(), $fields = array(), $what_in = 0, $limit = 1000)
  {
    $class = get_called_class();
    $table = $class::$tableName;
   
    if(count($fields>0)){
         $star = '';
         $i=0;
         $n = sizeof($fields);
        foreach ($fields as $key) {
          $star .= ($i==$n-1) ? $key.' ' : $key.', ';
          $i++;
        }
        $query = "SELECT ". $star ." FROM ".$table;
    }
    else {
    $query = "SELECT * FROM ".$table;
    }
    if (isset($params)){
      $where = ' WHERE '.$what_in.' IN ( ';
      $i = 0;
      $n = sizeof($params);
      foreach($params as $key=>$value)
      {
        $where .= ($i == $n-1)? $key.')': $key.', ';
        
        
        $i++;
      }
      $query .= $where;



    }
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
   
    
    
    
    $query .= " " ."Limit  " .$limit;
    //echo $query;
    $pdo = new PDOConfig();
    
    $sth = $pdo->prepare($query);
    $sth->setFetchMode(PDO::FETCH_CLASS, $class, array($pdo));
    
    $sth->execute((isset($params))?$params:null);
    
    $result=array();
    
    while($obj = $sth->fetch())
    {  
       $result[]=$obj;
    }
    
    return $result;
    
  }
  
}
?>