<?php namespace App\Models;

use CodeIgniter\Model;

class UserModelRegistro extends Model
{
    public function SalidaR(){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario a');
		$builder->select('a.pro_id, a.pro_cedula, a.pro_nombres, a.pro_apellidos,a.pro_celular,c.masc_id, c.masc_nombre, c.masc_raza');
		$builder->join('tbl_dueno b','a.pro_id=b.pro_id');
		$builder->join('tbl_mascotas c','b.masc_id=c.masc_id');
        //$builder->where('ciu_id',1);
        $query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}

	public function selectDatos(){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario a');
		$builder->select('a.pro_id, a.pro_cedula, a.pro_nombres, a.pro_apellidos,a.pro_celular, a.pro_correo, a.pro_direccion, a.pro_telefonoF, a.pro_celular');
        $query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}



	public function historialmascota(){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_mascotas a');
		$builder->select('a.masc_id, a.masc_nombre, a.masc_edad, a.masc_fechaN, a.masc_sexo, a.masc_especie, a.masc_raza, a.masc_color,a.masc_esterilizado,a.masc_vacunas,a.masc_observacion');
        $query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}

	public function actualizarHistory($id,$nm,$esp,$vc,$obs){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_mascotas');
		$builder->where('masc_id',$id);
		$builder->set('masc_nombre',$nm);
		$builder->set('masc_esterilizado',$esp);
		$builder->set('masc_vacunas',$vc);
		$builder->set('masc_observacion',$obs);
		$builder->update();
	}

	public function insertarProp($nom,$ape,$ced,$cedId,$dire,$em,$tel,$ce){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario');
		$data = [
			'pro_nombres' => $nom,
			'pro_apellidos'  => $ape,
			'pro_cedula'  => $ced,
			'iden_id'  => $cedId,
			'pro_direccion'  => $dire,
			'pro_correo'  => $em,
			'pro_telefonoF'  => $tel,
			'pro_celular'  => $ce,
	];
	
		$builder->insert($data);
		$query=$builder->get();	
	}

	public function insertDestino($masc,$prop){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_dueno');
		$data = [
			'masc_id' => $masc,
			'pro_id'  => $prop,
	];
		$builder->insert($data);
		$query=$builder->get();	
	}

	public function buscarCedula($cedu){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario a');
		$builder->select('a.pro_id,a.pro_cedula');
		$builder->where('a.pro_cedula',$cedu);
		$query=$builder->get();
		$users=$query->getResultArray();
		foreach($users as $user){
			
			$resp=[
				'idsc'=>$user['pro_id'],
			];

	}
	return $resp;
	}


	public function actualizar($id,$ced,$nom,$ape,$em,$dire,$fijo,$cell){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario');
		$builder->where('pro_id',$id);
		$builder->set('pro_cedula',$ced);
        $builder->set('pro_nombres',$nom);
        $builder->set('pro_apellidos',$ape);
        $builder->set('pro_correo',$em);
		$builder->set('pro_direccion',$dire);
		$builder->set('pro_telefonoF',$fijo);
		$builder->set('pro_celular',$cell);
		$builder->update();
	}

	public function eliminarDatos($id2){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario');
		$builder->where('pro_id',$id2);
		$builder->delete();
	}


	public function citas(){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_propietario a');
		$builder->select('a.pro_id, a.pro_cedula, a.pro_nombres, a.pro_apellidos,a.pro_celular,c.masc_id, c.masc_nombre, c.masc_raza, d.cita_fecha, d.cita_hora');
		$builder->join('tbl_dueno b','a.pro_id=b.pro_id');
		$builder->join('tbl_mascotas c','b.masc_id=c.masc_id');
		$builder->join('tbl_citas d','b.due_id=d.due_id');
        //$builder->where('ciu_id',1);
        $query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}

	public function insertCitas($dip,$fech,$dia){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_citas');
		$data = [
			'due_id' => $dip,
			'cita_fecha'  => $fech,
			'cita_hora'  => $dia,
	];
		$builder->insert($data);
		$query=$builder->get();	
	}


}