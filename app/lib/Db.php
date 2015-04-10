<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Db
 *
 * @author Fernando Rodrigues
 */
class Db extends App {
    
    /**
     *
     * @var type 
     */
    protected $_table = "";    

    /**
     *
     * @var type 
     */
    private $_conn;
    
    private $_select;
    
    /**
     * 
     */
    public function __construct() {
        $this->_conn = Registry::get("conn");              
    }
    
    /**
     * 
     */
    public function select() {
        $this->_select = "Select ";        
        $this->_select .= $this->getColumns(); 
        $this->_select .= " from " . $this->_table;
    }
    
    public function innerJoin() {
        
    }
    
    public function leftJoin() {
        
    }
    
    public function rightJoin() {
        
    }
    
    public function where($where) {
        $this->_select .= " where ( " . $where . " )";
    }
    
    public function order() {
        
    }
    
    public function limit() {
        
    }

    /**
     * 
     */
    public function fetchRow($select = null) {
        
    }
    
    /**
     * 
     */
    public function fetchAll($select = null) {
        
    }
    
    private function getColumns(array $coluns = null) {        
        $sql = "SHOW COLUMNS FROM " . $this->_table;
        $results = $this->query($sql);
        $columns = array();        
        foreach ($results as $key => $result) {
            $columns[] = $result->Field;
        }
        
        return implode(", ", $columns);
    }
    
    private function query($sql) {
        $query = mysqli_query($this->_conn, $sql);        
        $datas = array();
        while ($ls = mysqli_fetch_object($query)) {
            $datas[] = $ls;
        }
        return $datas;
    }
    
    public function toString() {
        return $this->_select;;
    }    
    
}
