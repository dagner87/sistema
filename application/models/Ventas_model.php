<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ventas_model extends CI_Model {

	public function getVentas($id_almacen){
		$this->db->select("v.*,c.nombre_cli,tc.nombre as tipocomprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.id_cliente = c.id_cliente");
		$this->db->where("tc.id",1);
		$this->db->where("v.id_almacen",$id_almacen);
		$this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.id");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}

	public function getVentasGeneral(){
		$this->db->select("v.*,c.nombre_cli,tc.nombre as tipocomprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.id_cliente = c.id_cliente");
		$this->db->where("tc.id",1);
		$this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.id");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}


	/*--------------entradas a almacen------*/

	public function getEntradas_Almacen($id_almacen){
		$this->db->select(" ent_prov.id_entrada,
						    DATE_FORMAT(ent_prov.fecha_entrada,'%d/%m/%Y') as fecha_entrada,
							prod.items,
							ent_prov.cantidad,
							prod.nombre_producto");
		$this->db->from("entrada_productos ent_prov");
		$this->db->join("producto  prod ","prod.id_producto  = ent_prov.id_producto");
		$this->db->where("ent_prov.id_almacen",$id_almacen);
		//$this->db->order_by("fecha_entrada","desc");

		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}
	/*--------------fin entradas a almacen------*/

	public function getProd_Almacen($id_almacen){
		$this->db->select("ped_prov.id_pedido_prov,      ped_prov.nombre_producto,ped_prov.cantidad_solicitada,pa.estado_pagado,pa.fecha_key");
		$this->db->from("pedido_proveedor ped_prov");
		$this->db->join("paq_ped_prov  paq_ped ","ped_prov.id_pedido_prov  = paq_ped.id_pedido_prov");
		$this->db->join("paquete pa","paq_ped.id_paquete = pa.id_paquete ");
		$this->db->where("ped_prov.estado_entregado",1);
		$this->db->where("ped_prov.id_almacen",$id_almacen);
		
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}
	public function getVentasbyDate($fechainicio,$fechafin){
		$this->db->select("v.*,c.nombre,tc.nombre as tipocomprobante");
		$this->db->from("ventas v");
		$this->db->join("clientes c","v.cliente_id = c.id");
		$this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.id");
		$this->db->where("v.fecha >=",$fechainicio);
		$this->db->where("v.fecha <=",$fechafin);
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}

	public function getMovientosbyMes($id_producto,$id_cliente,$id_almacen,$mes){
		$this->db->select("DATE_FORMAT(fecha,'%d/%m/%Y') as fecha,cantidad_entrada,cantidad_salida,saldo,direccion");
		$this->db->from("movi_al_cli mov");
		$this->db->join("distribucion_guia dg","mov.idventa = dg.id");
		$this->db->where("MONTH(fecha)",$mes);
		$this->db->where("id_producto",$id_producto);
		$this->db->where("id_cliente",$id_cliente);
		$this->db->where("id_almacen",$id_almacen);
		$this->db->order_by("MONTH(fecha)","ASC");
		
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}


	public function getMovbyRango($fechainicio,$fechafin,$id_producto){
		$this->db->select("DATE_FORMAT(fecha,'%d/%m/%Y') as fecha,cantidad_entrada,cantidad_salida,saldo,direccion");
		$this->db->from("movi_al_cli mov");
		$this->db->join("distribucion_guia dg","mov.idventa = dg.id");
		$this->db->where("mov.fecha >=",$fechainicio);
		$this->db->where("mov.fecha <=",$fechafin);
		$this->db->where("mov.id_producto",$id_producto);
		$this->db->order_by("MONTH(fecha)","ASC");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}




	public function getVenta($id){
		$this->db->select("v.*,c.nombre_cli,c.direccion_cli,c.telefono_cli,c.numero as documento,tc.nombre as tipocomprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.id_cliente = c.id_cliente");
		$this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.id");
		$this->db->where("v.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}



	public function getDetalle($id){
		$this->db->select("dt.*,p.items,p.nombre_producto");
		$this->db->from("detalle_venta dt");
		$this->db->join("producto p","dt.producto_id = p.id_producto");
		$this->db->where("dt.venta_id",$id);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getComprobantes($id){

		$this->db->where("id",$id);
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
	}

	public function getGuias(){
		$this->db->where("id",2);
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->result();
	}

	public function getDatosGuia($id){
		$this->db->where("id",$id);
		$resultados = $this->db->get("tipo_comprobante");
		return $resultados->row();
	}

	public function getAlCliGuias($id){
		$this->db->select("v.*,c.nombre_cli,c.direccion_cli,c.telefono_cli,c.numero as documento,tc.nombre as tipocomprobante,dist_g.contacto,dist_g.telefono,dist_g.direccion");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.id_cliente = c.id_cliente");
		$this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.id");
		$this->db->join("distribucion_guia dist_g","v.id = dist_g.id");
		$this->db->where("v.id",$id);
		$resultado = $this->db->get();
		return $resultado->row();
	}

	public function getDetalleGuias($id){
		$this->db->select("dt.*,p.items,p.nombre_producto");
		$this->db->from("detalle_venta dt");
		$this->db->join("producto p","dt.producto_id = p.id_producto");
		$this->db->where("dt.venta_id",$id);
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function getComprobante($idcomprobante){
		$this->db->where("id",$idcomprobante);
		$resultado = $this->db->get("tipo_comprobante");
		return $resultado->row();
	}

/*-------------stock de productos de almacen_clientes-----*/

	public function getProductos_stockAlmacenCli($id_almacen){
		$this->db->where("id_almacen",$id_almacen);
		$this->db->join("producto p","alcli.id_producto = p.id_producto");
		$this->db->join("cliente c","alcli.id_cliente = c.id_cliente");
		$resultados = $this->db->get("almacen_clientes alcli");
		return $resultados->result();
	}
	
public function updateStockAlCli_restar($data){
		$this->db->where("id_almacen",$data['id_cliente']);
		$this->db->where("id_almacen",$data['id_almacen']);
		$this->db->where("id_producto",$data['id_producto']);
		$this->db->from("almacen_clientes");
		$resultados = $this->db->get();
		if($resultados->num_rows() > 0){
			//si exite le sumo la cantidad al stock
	     $this->db->where("id_almacen",$data['id_cliente']);
		 $this->db->where("id_almacen",$data['id_almacen']);
		 $this->db->where("id_producto",$data['id_producto']);
		 $this->db->set('stock', 'stock - "'.$data["stock"].'"', FALSE);
		 $this->db->update("almacen_clientes");

        }
	}
public function getSalidasAlCli($id_almacen){
		$this->db->select("v.*,c.nombre_cli,tc.nombre as tipocomprobante");
		$this->db->from("ventas v");
		$this->db->join("cliente c","v.id_cliente = c.id_cliente");
		$this->db->where("tc.id",2); // guias de remision
		$this->db->where("v.id_almacen",$id_almacen); // 
		$this->db->join("tipo_comprobante tc","v.tipo_comprobante_id = tc.id");
		$resultados = $this->db->get();
		if ($resultados->num_rows() > 0) {
			return $resultados->result();
		}else
		{
			return false;
		}
	}
public function getProductos_stockAlmacen($id_almacen){
		$this->db->where("id_almacen",$id_almacen);
		$resultados = $this->db->get("productos_stock");
		return $resultados->result();
	}	

/*-----------productos en stock por almacen-----------*/
	public function get_stockAlCli($id_almacen){
		$this->db->where("id_almacen",$id_almacen);
		$resultados = $this->db->get("almacen_clientes");
		return $resultados->result();
	}


	

	public function save_detalleEntradas($data){
		return $this->db->insert("entrada_productos",$data);
	}


	public function updateStock($data){
		
		$this->db->where("id_producto",$data['id_producto']);
		$this->db->where("id_almacen",$data['id_almacen']);
		$this->db->from("productos_stock");
		$resultados = $this->db->get();
		
		if($resultados->num_rows() > 0){

          $this->db->where("id_producto",$data['id_producto']);
          $this->db->where("id_almacen",$data['id_almacen']);
		  $this->db->set('stock', 'stock + "'.$data["stock"].'"', FALSE);
		  $this->db->update("productos_stock");

        }else{

         $row =	$this->datosproducto($data['id_producto']);

        	$data_insert = array( 
		        		           'id_producto' => $data['id_producto'],
		        		           'codigo'      => $row->items,
		        		           'nombre'      => $row->nombre_producto,
		        		           'stock'       => $data["stock"],
		        		           'id_categoria'=> $row->id_categoria,
		        		           'id_almacen'  => $data['id_almacen'],
		        		           'estado'      => 1
        		                );

         
          	$this->db->insert("productos_stock",$data_insert);
        }
	}

	public function updateStock_restar($data){
		
		$this->db->where("id_producto",$data['id_producto']);
		$this->db->where("id_almacen",$data['id_almacen']);
		$this->db->from("productos_stock");
		$resultados = $this->db->get();
		if($resultados->num_rows() > 0){
			//si exite le sumo la cantidad al stock
	      $this->db->where("id_producto",$data['id_producto']);
          $this->db->where("id_almacen",$data['id_almacen']);
		  $this->db->set('stock', 'stock - "'.$data["stock"].'"', FALSE);
		  $this->db->update("productos_stock");

        }
	}

	

	  public function datosproducto($id_producto){
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->get('producto');
        if($query->num_rows() > 0){
          return $query->row();
        }else{
          return false;
        }
    } 


	public function getproductos($valor){
		$this->db->select("id,codigo,nombre as label,precio,stock");
		$this->db->from("productos_stock");
		$this->db->like("id",$valor);
		$resultados = $this->db->get();
		return $resultados->result_array();
	}

	public function save_venta($data){
		return $this->db->insert("ventas",$data);
	}

	public function lastID(){
		return $this->db->insert_id();
	}
	/*----------guarda los datos de donde fueron las guias-------*/
	public function save_datosGuia($data){
		return $this->db->insert("distribucion_guia",$data);
	}

	public function updateComprobante($idcomprobante,$data){
		$this->db->where("id",$idcomprobante);
		$this->db->update("tipo_comprobante",$data);

	}

	public function save_detalle($data){
		$this->db->insert("detalle_venta",$data);
	}



	public function years(){
		$this->db->select("YEAR(fecha) as year");
		$this->db->from("ventas");
		$this->db->group_by("year");
		$this->db->order_by("year","desc");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function montos($year){
		$this->db->select("MONTH(fecha) as mes, SUM(total) as monto");
		$this->db->from("ventas");
		$this->db->where("fecha >=",$year."-01-01");
		$this->db->where("fecha <=",$year."-12-31");
		$this->db->group_by("mes");
		$this->db->order_by("mes");
		$resultados = $this->db->get();
		return $resultados->result();
	}

	public function montos_consumo($year,$id_producto,$id_almacen){
		$this->db->select("MONTH(fecha) as mes, SUM(cantidad_salida) as monto");
		$this->db->from("movi_al_cli");
		$this->db->where("fecha >=",$year."-01-01");
		$this->db->where("fecha <=",$year."-12-31");
		$this->db->where("id_producto",$id_producto);
		$this->db->where("id_almacen",$id_almacen);
		$this->db->group_by("mes");
		$this->db->order_by("mes");
		$resultados = $this->db->get();
		return $resultados->result();
	}

}