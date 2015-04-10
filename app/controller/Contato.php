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
abstract class Contato {
    
    protected $_nome_contato;
    protected $_telefone_contato;
    protected $_endereco_contato;
    protected $_foto_contato;

    public function __construct($nome = null, $telefone = null, $endereco = null, $foto = null) {       
        $this->_nome_contato = $nome;
        $this->_telefone_contato = $telefone;
        $this->_endereco_contato = $endereco;
        $this->_foto_contato = $foto;        
    }
    
    public function setNomeContato() {
        
    }
    
    public function getNomeContato() {
        
    }
    
    public function setTelefoneContato() {
        
    }
    
    public function getTelefoneContato() {
        
    }
    
    public function setEnderecoContato() {
        
    }
    
    public function getEnderecoContato() {
        
    }
    
    public abstract function cadastrar();
    
    public abstract function listar();
    
}
