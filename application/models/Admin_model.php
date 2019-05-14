<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
        }
        
        function Login($tUsuario, $tContrasena){
		$this->db->where("tUsuario", $tUsuario);
		$this->db->where("tContrasena", $tContrasena);
		$resultados = $this->db->get("SisUsuarios");
		if ($resultados->num_rows()>0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
		 
	public function guardarNoticia($param){
		$fecha = date("Y/m/d H:i");
                $campos = array(
                        "tNombre"		=> $param["tNombre"],
                        "tDescripcion"	=> $param["tDescripcion"],
                        "fhFecha"		=> $fecha,
                        "tPortada"		=> $param["userfile"],
                        "tEnlace"		=> $param["tEnlace"],
						"tCodEstatus" 	=> "NU"
                );
                
                return $this->db->insert("BitNoticias", $campos);
        }
        
        public function guardarUsuario($param){
		$fecha = date("Y/m/d H:i");
        $campos = array(
                        "tNombre"	        => $param["tNombre"],
                        "tApellidoPaterno"	=> $param["tApellidoPaterno"],
                        "tApellidoMaterno"	=> $param["tApellidoMaterno"],
                        "tTelefono"	        => $param["tTelefono"],
                        "fhFechaNacimiento"	=> $param["fhFechaNacimiento"],
                        "eCodSexo"	        => $param["eCodSexo"],
                        "eCodEstado"	    => $param["eCodEstado"],
                        "eCodMunicipio"	    => $param["eCodMunicipio"],
                        "tCiudad"	        => $param["tCiudad"],
                        "tDomicilio"	    => $param["tDomicilio"],
                        "tCodigoPostal"	    => $param["tCodigoPostal"],
                        "tUsuario"	        => $param["tUsuario"],
                        "tCorreo"	        => $param["tCorreo"],
                        "tContrasena"	    => md5($param["tContrasena"]),
                        "tEstatus"	        => 'AC',
                        "fhFechaRegistro"	=> $fecha
                );
                
                return $this->db->insert("SisUsuarios", $campos);
        }
	
		public function guardarEmpresa($param){
		$fecha = date("Y/m/d H:i");
        $campos = array(
                        "tNombre"	        => $param["tNombre"],
                        "tSiglas"	        => $param["tSiglas"],
                        "tTelefono"	        => $param["tTelefono"],
                        "eCodEstado"	    => $param["eCodEstado"],
                        "eCodMunicipio"	    => $param["eCodMunicipio"],
                        "tDomicilio"	    => $param["tDomicilio"],
                        "tCodigoPostal"	    => $param["tCodigoPostal"],
                        "tEstatus"	        => 'AC',
                        "fhFecha"			=> $fecha
                );
                
                return $this->db->insert("CatEmpresas", $campos);
        }
        
        public function guardarOperador($param){
		$fecha = date("Y/m/d H:i");
        $campos = array(
                "eCodGrupoSanguineo"    => $param["eCodGrupoSanguineo"],
                "eCodEstado"            => $param["eCodEstado"],
                "eCodMunicipio"         => $param["eCodMunicipio"],
                "eCodSexo"              => $param["eCodSexo"],
                "tCodEstatus"           => "NU",
                "tNombre"	        	=> $param["tNombre"],
                "tApellidoPaterno"		=> $param["tApellidoPaterno"],
                "tApellidoMaterno"		=> $param["tApellidoMaterno"],
                "tCorreo"	        	=> $param["tCorreo"],
                "tTelefono"	        	=> $param["tTelefono"],
                "tTelefonoEmergencia"	=> $param["tTelefonoEmergencia"],
                "tCurp"					=> $param["tCurp"],
                "tCiudad"	        	=> $param["tCiudad"],
                "tDomicilio"	        => $param["tDomicilio"],
                "tCodigoPostal"	        => $param["tCodigoPostal"],
                "fhFechaNacimiento"     => $param["fhFechaNacimiento"],
                "fhFechaRegistro"		=> $fecha,
				"tEmpresa"				=> $param["tEmpresa"],
				"tNumeroSeguro" 		=> $param["tNumeroSeguro"],
				"tCargo" 				=> $param["tCargo"],
				"tTipoLicencia"			=> $param["tTipoLicencia"],
				"tNumeroLicencia" 		=> $param["tNumeroLicencia"],
				"fhFechaVencimiento"	=> $param["fhFechaVencimiento"],
				"tCodSindicalizado" 	=> $param["tCodSindicalizado"]
                );
                return $this->db->insert("BitOperadores", $campos);
        }
	
		public function GenerarCredencial($param){
		$fecha = date("Y/m/d H:i");
        $campos = array(
                "eCodOperador"   		=> $param["eCodOperador"],
                "fhFechaCreacion"		=> $fecha
                );
                return $this->db->insert("BitCredenciales", $campos);
        }
	
		public function CambiarEstatusOperador($id){
			$select = "UPDATE BitOperadores SET tCodEstatus = 'AC' WHERE eCodOperador =".$id;
            $query = $this->db->query($select);
            return $query;
		}
	
		public function BajaOperador($id){
			$select = "UPDATE BitOperadores SET tCodEstatus = 'IN' WHERE eCodOperador =".$id;
            $query = $this->db->query($select);
            return $query;
		}
	
		public function cargarOperadores(){
			$select = "SELECT 
					bo.tCodSindicalizado,
					bo.eCodOperador, 
					bo.tCodEstatus,
					bo.tNombre AS NombreOperador, 
					bo.tApellidoPaterno AS ApellidoPaterno, 
					bo.tApellidoMaterno AS ApellidoMaterno, 
					bo.tCorreo AS Correo, 
					bo.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio
					FROM BitOperadores bo
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = bo.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = bo.eCodEstado
					WHERE tCodEstatus = 'AC' OR tCodEstatus = 'NU' OR tCodEstatus = 'IN' ORDER BY eCodOperador DESC;";
            $query = $this->db->query($select);
            return $query;
        }
	
	public function cargarEmpresas(){
			$select = "SELECT 
					ca.eCodEmpresa, 
					ca.tEstatus,
					ca.tNombre AS Nombre,
					ca.tSiglas AS Siglas,
					ca.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio
					FROM CatEmpresas ca
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = ca.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = ca.eCodEstado
					WHERE tEstatus = 'AC' ORDER BY eCodEmpresa ASC;";
            $query = $this->db->query($select);
            return $query;
        }
	
		public function cargarUsuarios(){
			$select = "SELECT 
					bu.eCodUsuario, 
					bu.tNombre AS NombreUsuario, 
					bu.tApellidoPaterno AS ApellidoPaterno, 
					bu.tApellidoMaterno AS ApellidoMaterno, 
					bu.tCorreo AS Correo, 
					bu.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio
					FROM SisUsuarios bu
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = bu.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = bu.eCodEstado
					WHERE tEstatus = 'AC' ORDER BY eCodUsuario DESC;";
            $query = $this->db->query($select);
            return $query;
        }
	
		public function cargarMensajes(){
			$select = "SELECT * FROM Contacto WHERE tEstatus = 'NU' ORDER BY eCodContacto DESC;";
            $query = $this->db->query($select);
            return $query;
        }
	
		public function cargarCredenciales(){
			$select = "SELECT 
							bc.*,
							bo.tCodSindicalizado,
							bo.tNombre,
							bo.tApellidoPaterno,
							bo.tApellidoMaterno
							FROM BitCredenciales bc 
							LEFT JOIN BitOperadores bo ON bo.eCodOperador = bc.eCodOperador
							ORDER BY eCodCredencial DESC;";
            $query = $this->db->query($select);
            return $query;
        }
	
		public function cargarMensajesLeidos(){
			$select = "SELECT * FROM Contacto WHERE tEstatus = 'LE' ORDER BY eCodContacto DESC;";
            $query = $this->db->query($select);
            return $query;
        }
	
		public function EliminarMensaje($param){
			$select = "UPDATE Contacto SET tEstatus = 'EL' WHERE eCodContacto =".$param;
            $query = $this->db->query($select);
            return $query;
        }
	
		public function EliminarUsuario($param){
			$select = "UPDATE SisUsuarios SET tEstatus = 'EL' WHERE eCodUsuario =".$param;
            $query = $this->db->query($select);
            return $query;
        }
	
		public function cargarNoticias(){
			$select = "SELECT 
					bn.eCodNoticia,
					bn.tNombre AS Asunto,
					bn.tDescripcion AS Descripcion,
					bn.fhFecha AS FechaCreacion,
					bn.tEnlace AS Enlace,
					bn.tCodEstatus
					FROM BitNoticias bn
					WHERE bn.tCodEstatus = 'NU'
					ORDER BY eCodNoticia ASC;";
            $query = $this->db->query($select);
            return $query;
        }
	
		public function EliminarOperador($param){
			$select = "UPDATE BitOperadores SET tCodEstatus = 'EL' WHERE eCodOperador =".$param;
			$query = $this->db->query($select);
		}
	
		public function EliminarNoticia($param){
			$select = "UPDATE BitNoticias SET tCodEstatus = 'EL' WHERE eCodNoticia =".$param;
			$query = $this->db->query($select);
		}
	
		public function MarcarLeido($param){
			$select = "UPDATE Contacto SET tEstatus = 'LE' WHERE eCodContacto =".$param;
			$query = $this->db->query($select);
		}
	
		public function BuscarEmpresa($busqueda){
			$Codigo 	= $busqueda['eCodEmpresa'];
			$Nombre 	= $busqueda['tNombre'];
			$Estado 	= $busqueda['tEstado'];
			$Municipio 	= $busqueda['tMunicipio'];
			$Siglas 	= $busqueda['tSiglas'];
			
			$select = "SELECT 
					ca.eCodEmpresa, 
					ca.tEstatus,
					ca.tNombre AS Nombre,
					ca.tSiglas AS Siglas,
					ca.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio
					FROM CatEmpresas ca
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = ca.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = ca.eCodEstado
					WHERE tEstatus = 'AC'";
			if($Codigo!=""){$select.= " AND ca.eCodEmpresa =".$Codigo;}
			if($Nombre!=""){$select.= " AND ca.tNombre LIKE '%".$Nombre."%'";}
			if($Estado!=""){$select.= " AND ce.tNombre LIKE '%".$Estado."%'";}
			if($Municipio!=""){$select.= " AND cm.tNombre LIKE '%".$Municipio."%'";}
			if($Siglas!=""){$select.= " AND ca.tSiglas LIKE '%".$Siglas."%'";}
			
			
			$query = $this->db->query($select);
			return $query;
		}
	
		public function BuscarOperador($busqueda){
			$Codigo 	= $busqueda['tCodSindicalizado'];
			$Nombre 	= $busqueda['tNombre'];
			$Estado 	= $busqueda['tEstado'];
			$Municipio 	= $busqueda['tMunicipio'];
			$Telefono 	= $busqueda['tTelefono'];
			$Correo 	= $busqueda['tCorreo'];
			$Apellido 	= $busqueda['tApellido'];
			
			$select = "SELECT 
					bo.tCodSindicalizado,
					bo.eCodOperador, 
					bo.tCodEstatus,
					bo.tNombre AS NombreOperador, 
					bo.tApellidoPaterno AS ApellidoPaterno, 
					bo.tApellidoMaterno AS ApellidoMaterno, 
					bo.tCorreo AS Correo, 
					bo.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio
					FROM BitOperadores bo
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = bo.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = bo.eCodEstado
					WHERE tCodEstatus = 'AC' OR tCodEstatus = 'NU' OR tCodEstatus = 'IN'";
			if($Codigo!=""){$select.= " AND bo.tCodSindicalizado LIKE '%".$Codigo."%'";}
			if($Nombre!=""){$select.= " AND bo.tNombre LIKE '%".$Nombre."%'";}
			if($Estado!=""){$select.= " AND ce.tNombre LIKE '%".$Estado."%'";}
			if($Municipio!=""){$select.= " AND cm.tNombre LIKE '%".$Municipio."%'";}
			if($Apellido!=""){$select.= " AND bo.tApellidoPaterno LIKE '%".$Apellido."%' OR bo.tApellidoMaterno LIKE '%".$Apellido."%'";}
			if($Correo!=""){$select.= " AND bo.tCorreo LIKE '%".$Correo."%'";}
			if($Telefono!=""){$select.= " AND bo.tTelefono LIKE '%".$Telefono."%'";}
			
			
			$query = $this->db->query($select);
			return $query;
		}
	
		public function BuscarUsuario($busqueda){
			$Codigo 	= $busqueda['eCodUsuario'];
			$Nombre 	= $busqueda['tNombre'];
			$Estado 	= $busqueda['tEstado'];
			$Municipio 	= $busqueda['tMunicipio'];
			$Telefono 	= $busqueda['tTelefono'];
			$Correo 	= $busqueda['tCorreo'];
			$Apellido 	= $busqueda['tApellido'];
			
			$select = "SELECT 
					bu.eCodUsuario, 
					bu.tNombre AS NombreUsuario, 
					bu.tApellidoPaterno AS ApellidoPaterno, 
					bu.tApellidoMaterno AS ApellidoMaterno, 
					bu.tCorreo AS Correo, 
					bu.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio,
					bu.tEstatus
					FROM SisUsuarios bu
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = bu.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = bu.eCodEstado
					WHERE
					bu.tEstatus = 'AC'";
			if($Codigo!=""){$select.= " AND bu.eCodUsuario =".$Codigo;}
			if($Nombre!=""){$select.= " AND bu.tNombre LIKE '%".$Nombre."%'";}
			if($Estado!=""){$select.= " AND ce.tNombre LIKE '%".$Estado."%'";}
			if($Municipio!=""){$select.= " AND cm.tNombre LIKE '%".$Municipio."%'";}
			if($Apellido!=""){$select.= " AND bu.tApellidoPaterno LIKE '%".$Apellido."%' OR bu.tApellidoMaterno LIKE '%".$Apellido."%'";}
			if($Correo!=""){$select.= " AND bu.tCorreo LIKE '%".$Correo."%'";}
			if($Telefono!=""){$select.= " AND bu.tTelefono LIKE '%".$Telefono."%'";}
			$select.= " ORDER BY eCodUsuario DESC";
			
			
			$query = $this->db->query($select);
			return $query;
		}
	
		public function InformacionOperador($busqueda){
			
			$select = "SELECT 
					bo.*,
					bo.tCodSindicalizado,
					bo.eCodOperador,
					bo.tNombre AS NombreOperador, 
					bo.tApellidoPaterno AS ApellidoPaterno, 
					bo.tApellidoMaterno AS ApellidoMaterno, 
					bo.tCorreo AS Correo, 
					bo.tTelefono AS Telefono, 
					ce.tNombre AS Estado, 
					cm.tNombre AS Municipio,
					bo.tEmpresa,
					bo.tNumeroLicencia,
					cs.tNombre AS Estatus,
					csa.tNombre AS GrupoSanguineo,
					cse.tNombre AS Sexo
					FROM BitOperadores bo
					LEFT JOIN CatMunicipios cm ON cm.eCodMunicipio = bo.eCodMunicipio
					LEFT JOIN CatEstados ce ON ce.eCodEstado = bo.eCodEstado
					LEFT JOIN CatEstatus cs ON cs.tCodEstatus = bo.tCodEstatus
					LEFT JOIN CatSanguineo csa ON csa.eCodSangre = bo.eCodGrupoSanguineo
					LEFT JOIN CatSexo cse ON cse.eCodSexo = bo.eCodSexo
					WHERE bo.tCodEstatus = 'AC' OR bo.tCodEstatus = 'NU' OR bo.tCodEstatus = 'IN' AND bo.eCodOperador =".$busqueda;
			
			$query = $this->db->query($select);
			return $query;
		}
	
		public function ContarOperadores(){
			$select = "SELECT COUNT(*) FROM BitOperadores;";
			$query = $this->db->query($select);
		}
	
		public function ContarUsuarios(){
			$select = "SELECT COUNT(*) FROM SisUsuarios;";
			$query = $this->db->query($select);
		}
		
		public function ContarNoticias(){
			$select = "SELECT COUNT(*) FROM SisNoticias;";
			$query = $this->db->query($select);
		}
	
		public function ConsultarSanguineo(){
			$select = "SELECT * FROM CatSanguineo;";
			$query = $this->db->query($select);
		}
	
		public function EditarOperador($param){
			
			$campos = array(
                "eCodGrupoSanguineo"    => $param["eCodGrupoSanguineo"],
                "eCodEstado"            => $param["eCodEstado"],
                "eCodMunicipio"         => $param["eCodMunicipio"],
                "eCodSexo"              => $param["eCodSexo"],
                "tNombre"	        	=> $param["tNombre"],
                "tApellidoPaterno"		=> $param["tApellidoPaterno"],
                "tApellidoMaterno"		=> $param["tApellidoMaterno"],
                "tCorreo"	        	=> $param["tCorreo"],
                "tTelefono"	        	=> $param["tTelefono"],
                "tTelefonoEmergencia"	=> $param["tTelefonoEmergencia"],
                "tCurp"					=> $param["tCurp"],
                "tCiudad"	        	=> $param["tCiudad"],
                "tDomicilio"	        => $param["tDomicilio"],
                "tCodigoPostal"	        => $param["tCodigoPostal"],
                "fhFechaNacimiento"     => $param["fhFechaNacimiento"],
				"tEmpresa"				=> $param["tEmpresa"],
				"tNumeroSeguro" 		=> $param["tNumeroSeguro"],
				"tCargo" 				=> $param["tCargo"],
				"tTipoLicencia"			=> $param["tTipoLicencia"],
				"tNumeroLicencia" 		=> $param["tNumeroLicencia"],
				"fhFechaVencimiento"	=> $param["fhFechaVencimiento"]
                );
			
				return $this->db->update('BitOperadores', $campos);
		}
}