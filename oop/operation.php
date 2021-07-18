<?php
class Database
{
   private $lhost = "localhost";
   private $user = "root";
   private $pass = "";
   private $db = "db_oop";
   private $mysqli = "";
   private $result = array();
   function __construct()
   {
      if ($this->mysqli = new mysqli($this->lhost, $this->user, $this->pass, $this->db)) {
         return true;
      } else {
         array_push($this->faults, $this->mysqli->connect_error . "lINE no: " . __LINE__);
         return false;
      }
   }
   function only_selection($sql, $table)
   {
      $query = "SELECT $sql FROM $table";
      $result = $this->mysqli->query($query);
      if ($result->num_rows > 0) {
         $this->result = $result->fetch_all(MYSQLI_ASSOC);
        return true;
      } else {
         array_push($this->result, $this->mysqli->error);
         return false;
      }
   }
   // special selection with condition 
   function special_selection($columns, $table, $join =null, $condition = null, $order = null, $limit = null, $offset = null)
   {
      if ($this->tableExist($table)) {
         $query = "SELECT $columns FROM $table";
         if ($join != null) {
            $query .= " JOIN $join";
         }
         if ($condition != null) {
            $query .= " WHERE $condition";
         }
         if ($order != null) {
            $query .= " order by $order";
         }
         if ($limit != null) {
            $query .= " limit $limit";
         }
         if ($offset != null) {
            $query .= " offset $offset";
         }
         echo $query;
         $result = $this->mysqli->query($query);
         if ($result->num_rows > 0) {
            $this->result = $result->fetch_all(MYSQLI_ASSOC);
            return true;
         } else {
            array_push($this->result, $this->mysqli->error . "lINE no: " . __LINE__);
            return false;
         }
      }
   }
   // function to insert the data 
   function insert($table, $col, $values)
   {
      if ($this->tableExist($table)) {
         $query = "INSERT INTO $table($col) VALUES($values)";
         $result = $this->mysqli->query($query);
         if ($result) {
            return true;
         } else {
            array_push($this->result, $this->mysqli->error . "Query is Failed on LINE : " . __LINE__);
            return false;
         }
      }
   }
   private function tableExist($table)
   {
      $sql = "SHOW TABLES FROM $this->db LIKE '$table'";
      if ($this->mysqli->query($sql)) {
         return true;
      } else {
         array_push($this->result, $this->mysqli->error . "lINE no: " . __LINE__);
         return false;
      }
   }
   // function  for get results 
   public function getResults()
   {
      $val = $this->result;
      $this->result = "";
      return $val;
   }
   function __destruct()
   {
      if (isset($this->mysqli)) {
         $this->mysqli->close();
         return true;
      } else {
         return false;
      }
   }
}
