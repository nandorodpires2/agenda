<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Contato
 *
 * @author Fernando Rodrigues
 */
class Contato extends Db {
    
    protected $_table = "contato";
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getContatos() {
        
        $select = $this->select();
        $select .= $this->where("contato_ativo = 1");
        
        var_dump($this->toString());
        
    }
    
}
