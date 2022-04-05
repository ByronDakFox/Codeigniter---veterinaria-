<?php namespace App\Models;

use CodeIgniter\Model;

class UserModelLogin extends Model
{
	public function login($u,$c){
		$resp=null;

		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_usuario a');
		$builder->select('a.usu_id, a.usu_nombre, a.usu_email, a.usu_nick,a.usu_password');
		$query=$builder->get();
		$users=$query->getResultArray();

		foreach($users as $user){
			if($user['usu_nick']==$u && $user['usu_password']==$c){
				$resp=[
					'ids'=>$user['usu_id'],
					'nombre'=>$user['usu_nombre'],
					'email'=>$user['usu_email'],
				];
			}
		}
		return $resp;
	}

	public function verificar($u,$c){
	
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_usuario a');
		$builder->select('a.usu_id, a.usu_nombre, a.usu_email, a.usu_nick,a.usu_password');
		$query=$builder->get();
		$users=$query->getResultArray();
	}

	public function nombre($m){
	
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_usuario a');
		$builder->select('a.usu_id, a.usu_nombre, a.usu_email, a.usu_nick,a.usu_password');
		$builder->where('a.usu_id',$m);
		$query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}

	

	public function numero($num){
	
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_usuario a');
		$builder->select('a.usu_id, a.usu_nombre, a.usu_email, a.usu_nick,a.usu_password');
		$builder->where('a.usu_id',$num);
		$query=$builder->get();
		$users=$query->getResultArray();
		foreach($users as $user){
			
				$resp=[
					'ids'=>$user['usu_id'],
				];

		}
		return $resp;
	}

	public function rutas($n){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_usuario a');
		$builder->select('a.usu_id, a.usu_nombre, a.usu_email,c.tipu_nom,e.ruta_nom,e.ruta_ruta');
		$builder->join('tbl_rolusuario b','b.usu_id=a.usu_id');
		$builder->join('tbl_tipo_usuario c','c.tipu_id=b.tipu_id');
		$builder->join('tbl_rolruta d','d.tipu_id=c.tipu_id');
		$builder->join('tbl_ruta e','e.ruta_id=d.ruta_id');
		$builder->where('a.usu_id',$n);
		$query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}
}