<?php namespace App\Models;

use CodeIgniter\Model;

class UserModelMascota extends Model
{
    public function mostarMascota(){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_mascotas a');
		$builder->select('a.masc_id, a.masc_nombre, a.masc_edad, a.masc_fechaN, a.masc_sexo, a.masc_especie, a.masc_raza, a.masc_color,a.masc_esterilizado,a.masc_vacunas,a.masc_foto,a.masc_observacion');
        $query=$builder->get();
		$users=$query->getResultArray();
		return $users;
	}
	
	public function insertarMasc($nm,$e,$f,$sx,$esp,$rz,$cl,$est,$vc,$fi,$ob)
    {
        $db      = \Config\Database::connect();
        $sql="CALL SP_INSERT_MASC(?,?,?,?,?,?,?,?,?,?,?)";
        $query=$db->query($sql,[$nm,$e,$f,$sx,$esp,$rz,$cl,$est,$vc,$fi,$ob]);
        $users=$query->getResultArray();
        return $users;
    }

	public function actualizarMascota($id,$nm,$e,$f,$sx,$esp,$rz,$cl){
		$db      = \Config\Database::connect();
		$builder = $db->table('tbl_mascotas');
		$builder->where('masc_id',$id);
		$builder->set('masc_nombre',$nm);
        $builder->set('masc_edad',$e);
        $builder->set('masc_fechaN',$f);
		$builder->set('masc_sexo',$sx);
		$builder->set('masc_especie',$esp);
		$builder->set('masc_raza',$rz);
		$builder->set('masc_color',$cl);
		//$builder->set('masc_foto',$ft);
		$builder->update();
	}
}