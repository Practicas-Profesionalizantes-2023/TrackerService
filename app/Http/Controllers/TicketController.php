<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use App\Models\EquipmentModel;
use App\Models\TicketModel;
use App\Models\UserModel;

class TicketController extends TicketModel
{
    public function index()
    {
        return view('tickets');
    }

    public function listvalorticket()
    {
        var_dump($this->ListVT());
        exit;
    }

    public function insertarvalorticket()
    {
        // simulacion valores que te vienen por el formulario
        $valor_servicio = '100';
        $valor_repuesto = '200';
        $valor_ticket_total = '300';
        // Fin simulacion

        if (!empty($valor_servicio) && !empty($valor_repuesto) && !empty($valor_ticket_total)) {
            // cargar los atributos en TicketModel
            $this->valor_servicios = $valor_servicio;
            $this->valor_repuestos = $valor_repuesto;
            $this->valor_ticket_total = $valor_ticket_total;
            // fin

            $this->InsertVT();
            exit;
        }
    }

    public function editarvalorticket()
    {
        $id_valor_ticket = '3';
        $valor_servicio = '400';
        $valor_repuesto = '200';
        $valor_ticket_total = '600';

        if (!empty($id_valor_ticket) && !empty($valor_servicio) && !empty($valor_repuesto) && !empty($valor_ticket_total)) {
            $this->id_valor = $id_valor_ticket;

            if (!empty($this->OneVT())) {
                $this->valor_servicios = $valor_servicio;
                $this->valor_repuestos = $valor_repuesto;
                $this->valor_ticket_total = $valor_ticket_total;

                $this->EditVT();
            } else {
                echo 'fijate que no existe esa id';
            }
        }
        exit;
    }

    public function eliminartvaloricket()
    {

        $id_valor_ticket = '1';
        if (!empty($id_valor_ticket)) {
            $this->id_valor = $id_valor_ticket;
            $this->DeleteVT();
            exit;
        }
    }

    //estados_tickets

    public function listestadoticket()
    {
        var_dump($this->ListET());
        exit;
    }

    public function insertaretadoticket()
    {
        // simulacion valores que te vienen por el formulario
        $estad_ticket_descripcion = $_POST['nuevo-estado'];
        // Fin simulacion

        if (!empty($estad_ticket_descripcion)) {
            // cargar los atributos en TicketModel
            $this->estado_ticket_descripcion = $estad_ticket_descripcion;
            // fin

            $this->InsertET();
            redirect('/ticket');
        }
    }

    public function editarestadoticket()
    {
        $id_estado_ticket = '5';
        $estad_ticket_descripcion = 'ccccc';

        if (!empty($id_estado_ticket) && !empty($estad_ticket_descripcion)) {
            $this->id_estado_ticket = $id_estado_ticket;

            if (!empty($this->OneET())) {
                $this->estado_ticket_descripcion = $estad_ticket_descripcion;

                $this->EditET();
            } else {
                echo 'fijate que no existe esa id';
            }
        }
        exit;
    }

    public function eliminarvalorticket()
    {

        $id_estado_ticket = '6';
        if (!empty($id_estado_ticket)) {
            $this->id_estado_ticket = $id_estado_ticket;
            $this->DeleteET();
            exit;
        }
    }

    //prioridades

    public function listprioridadticket()
    {
        var_dump($this->ListPrioridad());
        exit;
    }

    public function insertarprioridadticket()
    {
        // simulacion valores que te vienen por el formulario
        $priorida_descripcion = $_POST['nueva-descripcion'];
        // Fin simulacion

        if (!empty($priorida_descripcion)) {
            // cargar los atributos en TicketModel
            $this->prioridad_descripcion = $priorida_descripcion;
            // fin

            $this->InsertPrioridad();
            redirect('/ticket');
        }
    }

    public function editarprioridadticket()
    {
        $id_prioridad = '4';
        $priorida_descripcion = 'fijate';

        if (!empty($id_prioridad) && !empty($priorida_descripcion)) {
            $this->id_prioridad = $id_prioridad;

            if (!empty($this->OnePrioridad())) {
                $this->prioridad_descripcion = $priorida_descripcion;

                $this->EditPrioridad();
            } else {
                echo 'fijate que no existe esa id';
            }
        }
        exit;
    }

    public function eliminarprioridadticket()
    {

        $id_prioridad = '4';
        if (!empty($id_prioridad)) {
            $this->id_prioridad = $id_prioridad;
            $this->DeletePrioridad();
            exit;
        }
    }

    public function listarticket()
    {
        var_dump($this->ListT());
        exit;
    }

    public function delete()
    {
        if (!isset($_GET["id_ticket"])) {
            $this->id_ticket = $_GET["id_ticket"];
            $this->DeleteT();
            redirect('/ticket/');
        }
    }

    public function edit()
    {

        /**
         * Array(
            [fecha_creacion] => 2023-10-01
            [fecha_cierre] => 2023-10-02
            [tiempo_garanti] => 2023-10-04
            [ticket_descripcion] => fdafdsafsdf
            [editar_valor] => 43143
            [editar_prioridad] => alta
            [editar_modelo] => Tone Free FN4
            [editar_estado] => asignado
            [editar_nombre] => Maeve
            [editar_email] => 4321@example.com
            [id_ticket] => 
            [Editar] => Editar
            )
         */

        $this->id_ticket = $_POST['id_ticket'];

        $this->ticket_fecha_creacion = $_POST['fecha_creacion'];
        $this->ticket_fecha_cierre = $_POST['fecha_cierre'];
        $this->ticket_tiempo_garantia = $_POST['tiempo_garanti'];
        $this->ticket_descripcion = $_POST['ticket_descripcion'];
        $this->valor_ticket_total = $_POST['editar_valor'];
        $this->prioridad_descripcion = $_POST['editar_prioridad'];
        $this->estado_ticket_descripcion = $_POST['editar_estado'];

        //----- Cliente Model Buscar si existe el email enviado en el formulario
        $cliente_model = new ClientModel;
        $cliente_model->email = $_POST['editar_email'];
        $datos_cliente = $cliente_model->OneClientByEmail();

        if(empty($datos_cliente))
        {
            echo 'no esta en la base de datos';
            redirect('/ticket/');
        }
        else
        {
            $this->id_cliente = $datos_cliente[0]->id_cliente;
        }
        //----- FIN Cliente Model

        $usuario_model = new UserModel;
        $usuario_model->usr_email = $_POST['editar_email_usuario'];
        $datos_email=$usuario_model->OneUserByEmail();

        if(empty($datos_email))
        {
            echo'no esta en la base de datos';
            redirect('/ticket/');
        }
        else
        {
           $this->id_usuario = $datos_email[0]->id_usuario;
        }

        $equipo_model = new EquipmentModel;
        $equipo_model->modelo_equipo_descripcion = $_POST['editar_modelo'];
        $datos_model = $equipo_model->OneModel();

        if(empty($datos_model)){
            echo 'no esta en la base de datos';
            redirect('/ticket/');
        }
        else
        {
           $this->id_modelo_equipo = $datos_model[0]->id_modelo;
        }
        
        
        //$_POST['Editar'];

        exit;
    }
}
