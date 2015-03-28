<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ContatoJuridico
 *
 * @author Fernando Rodrigues
 */

include_once 'Contato.php';

class ContatoJuridico extends Contato {
    
    private $_cnpj_contato;
    
    public function __construct($nome = null, $telefone = null, $endereco = null) {
        parent::__construct($nome, $telefone, $endereco, $foto);
    }
    
    public function setCnpjContato() {
        
    }
    
    public function getCnpjContato() {
        
    }
    
}
