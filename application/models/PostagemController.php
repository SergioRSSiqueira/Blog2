<?php
    class PostagemController extends CI_Controller {
        
        public function index(){
            $parametros['titulo'] = 'Postagens';
            $parametros['postagens'] =  $this->Postagem->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/index',$parametros);
            $this->load->view('rodape');
        }
    
     	public function visualizar(){
            $parametros['titulo'] = 'Postagens';
            $parametros['postagens'] =  $this->Postagem->get();
            $this->load->view('cabecalho',$parametros);
            $this->load->view('postagem/visualizar',$parametros);
            $this->load->view('rodape');
        }
    }