<?php
class Produk extends CI_Controller
{
        function __construct()
        {
                parent::__construct();
                
                $this->load->model('m_produk');
                $this->load->helper('text');
                $this->load->helper('date');
                
        }


        function index()
        {
                $x['data'] = $this->m_produk->get_produk();
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_produk', $x);
                $this->load->view('member/templates/footer');
        }
        
        function detail_produk($id_produk)
        {
                $x['detil'] = $this->m_produk->get_detil_produk($id_produk);
                // print_r($x);
                $this->load->view('member/templates/header');
                $this->load->view('member/pages/v_detilProduk', $x);
                $this->load->view('member/templates/footer');
        }

      


      
}
