<?php

use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
//To Solve File REST_Controller not found
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contacto
 *
 * @author john.cristobal
 */
class Api extends REST_Controller {
 
    public function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->model("Producto_model");
    }
    
    //validar usuarios
    public function validate_post(){
        $data = json_decode(file_get_contents("php://input"));
        //$name = $this->input->post("correo");
        $this->response($data->correo, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
    
    //recuperar productos
    public function productos_get(){
        $datos = $this->Producto_model->getProductos();
        $this->response($datos, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
    
    //shopNext90?
    
    function index(){
        echo "hola";
    }
    
    public function polizanueva_get(){
        // create a new user and respond with a status/errors
        $this->response("hi", REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
    
    public function index_get()
    {
        $users = [
            ['id' => 1, 'name' => 'Johna', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
            ['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];

        $id = $this->get('id');
        $this->response($users, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        // respond with information about a user
    }
 
    public function crear_put()
    {
        //postman => crear and set put on it 
        // create a new user and respond with a status/errors
        $this->response("ceando", REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
 
    function metodo_post()
    {
        //postman => metodo and set post on it 
        // update an existing user and respond with a status/errors
        $this->response("post", REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
    }
 
    function user_delete()
    {
        // delete a user and respond with a status/errors
    }
}
