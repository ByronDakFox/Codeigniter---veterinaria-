<?php namespace App\Controllers;

use App\Models\UserModelLogin;
use App\Models\UserModelRegistro;
use App\Models\UserModelMascota;

class Home extends BaseController
{

	public $session=null;
	public static $ver;

	public function __construct()
	{
		helper('form');
		$this->session = \Config\Services::session();
	}

	public function guarda()
	{
		$request=\Config\Services::request();
		$data=array(

		);
	}

	public function login()
	{
		echo "<script>if (window.history.replaceState) { // verificamos disponibilidad
			window.history.replaceState(null, null, window.location.href);
		}</script>";
		$u=$_POST['usuario'];
		$c=$_POST['clave'];

		$consulta=new UserModelLogin();
		$users=$consulta->login($u,$c);
		
		$this->session->set($users);
		$numero=$this->session->get('ids');
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2);

		$this->session->set($users2);
		if(isset($_SESSION['nombre'])){
			return view('Layouts/header').view('Layouts/aside',$this->session->get()).view('Layouts/body').view('Layouts/footer');
		}else{
			return view('Layouts/Error/Error404');
		}
	}

	public function generarDatos()
	{
		$u=$_POST['usuario'];
		$c=$_POST['clave'];

		$consulta=new UserModelLogin();
		$users=$consulta->login($u,$c);
		if(count($users)==1){
			foreach($users as $usuario){
		$vardata=[
			'id'=>$usuario['usu_id'],
			'nombre'=>$usuario['usu_nombre'],
			'email'=>$usuario['usu_email'],
			'login'=>true,
			];
		}
			$this->session->set($vardata);
			return view('Layouts/header').view('Layouts/aside').view('Layouts/body').view('Layouts/footer');
	}else{
		return view('Layouts/Error/Error404');	
	}
		
	}

	public function leerDatos()
	{
		if(isset($_SESSION['nombre'])){
		$numero=$this->session->get('ids');
		echo "-->".$numero."<br>";
		echo $this->session->get('nombre')."<br>";
		echo $this->session->get('email')."<br>";
		echo $this->session->get('login')."<br>";
		}else{
			echo "sin datos";
		}
	}
	public function quitarDatos()
	{
		$this->session->remove('email');
	}

	public function destruirDatos()
	{

		$_SESSION = [];

    if (ini_get('session.use_cookies')) {

        $params = session_get_cookie_params();
        setcookie(session_name(),
                  '',
                  time() - 42000,
                  $params['path'],
                  $params['domain'],
                  $params['secure'],
                  $params['httponly']);
    }
		$this->session->destroy();
		return view('Layouts/Login/login');
	}
	public function index()
	{
		return view('Layouts/Login/login');
	}

	public function inicio()
	{
		if(isset($_SESSION['nombre'])){
			$numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 
		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/body').view('Layouts/footer');
		}else{
			return view('Layouts/Login/login');
		}
	}

	public function Historial()
	{
		if(isset($_SESSION['nombre'])){
		

			$consulta=new UserModelRegistro();
		    $users=$consulta->historialmascota();
		    $users=array('users'=>$users);

			$numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 
			
		 return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/Historial',$users).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	}
	}

	public function citas_medicas()
	{
		//agendarCita
		$consulta=new UserModelRegistro();
		$users=$consulta->citas();
		$users=array('users'=>$users);
		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 
		if(isset($_SESSION['nombre'])){
			
		 return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/citas',$users).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	}
}

	public function citas_Agendas()
	{
		$dip=$_POST['cupId'];
		$fech=$_POST['fechaCita'];
		$dia=$_POST['horaCita'];
		$consulta=new UserModelRegistro();
		$users=$consulta->citas();
		$users=array('users'=>$users);

		$user=$consulta->insertCitas($dip,$fech,$dia);
		//agendarCita
		    $numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 
		if(isset($_SESSION['nombre'])){
			
		 return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/agendarCita',$users).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	}

	}

	public function ActualizarHistorial()
	{
	 if(isset($_SESSION['nombre'])){
		$id=$_POST['Ids'];
		$nm=$_POST['nombreId2'];
		$esp=$_POST['esteId'];
		$vc=$_POST['vacunId'];
		$obs=$_POST['observid'];

		$consulta=new UserModelRegistro();
		$users=$consulta->actualizarHistory($id,$nm,$esp,$vc,$obs);
		$users=$consulta->historialmascota();
		$users=array('users'=>$user);
		
		//
		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 

		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/Historial',$users).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	  }
	}

	public function registro()
	{
		if(isset($_SESSION['nombre'])){
		$consulta=new UserModelRegistro();
		$users=$consulta->SalidaR();
		$users=array('users'=>$users);
		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 


			return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/Registro',$users).view('Layouts/Logica/footer');
		}else{
			return view('Layouts/Login/login');
		}
	}

	public function registroDueno_Mascota()
	{
		
		if(isset($_SESSION['nombre'])){
		$masc=$_POST['mascId'];
		$prop=9;
		$consultas=new UserModelMascota();
		$users=$consultas->mostarMascota();
		$users=array('users'=>$users);
		$consultas2=new UserModelRegistro();
		$users3=$consultas2->insertDestino($masc,$prop);

		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 
		

			return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/mascotaDueno',$users).view('Layouts/Logica/footer');
		}else{
			return view('Layouts/Login/login');
		}
	}

	public function ingresoDatos()
	{
		if(isset($_SESSION['nombre'])){
			$numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 

	   return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/ingresoDatos').view('Layouts/Logica/footer');
	   
	}else{
		return view('Layouts/Login/login');
	}

	}

	public function ingresoDatosMascotas()
	{
		if(isset($_SESSION['nombre'])){
			$numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2);
			

	   return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/ingresoMascota').view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	}

	}

	public function selectProp()
	{
		echo"<script>if (window.history.replaceState){ 
			window.history.replaceState(null, null, window.location.href);
		}</script>";
		if(isset($_SESSION['nombre'])){
		$consulta=new UserModelRegistro();
		$users=$consulta->selectDatos();
		$users=array('users'=>$users);
		
		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 

	   return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/RegistroPropietario',$users).view('Layouts/Logica/footer');
	   }else{
		return view('Layouts/Login/login');
	}

	}

	public function mascotasMostrar()
	{
	 if(isset($_SESSION['nombre'])){
		$consulta=new UserModelMascota();
		$users=$consulta-> mostarMascota();
		$users=array('users'=>$users); 

		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 
		
	   return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/mascotaRegistro',$users).view('Layouts/Logica/footer');
	 }else{
		return view('Layouts/Login/login');
	  }
	}
	

	public function insertProp()
	{
	 if(isset($_SESSION['nombre'])){

		$nom=$_POST['nombreId'];
		$ape=$_POST['apellidoId'];
		$ced=$_POST['rucId2'];
		$cedId=$_POST['rucId'];
		$em=$_POST['inputEmail4'];
		$dire=$_POST['inputAddress'];
		$tel=$_POST['telfId'];
		$cell=$_POST['telCId'];

		$consulta=new UserModelRegistro();
		$user=$consulta->insertarProp($nom,$ape,$ced,$cedId,$dire,$em,$tel,$cell);
		//$user=array('users'=>$user);

		    $numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 
	  
		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/body').view('Layouts/footer');
	}else{
		return view('Layouts/Login/login');
	  }
	}

	public function ActualizarDatos()
	{
	 if(isset($_SESSION['nombre'])){
		$id=$_POST['Ids'];
		$ced=$_POST['cedulaIds'];
		$nom=$_POST['nombresIds'];
		$ape=$_POST['apellidosIds'];
		$em=$_POST['emailsIds'];
		$dire=$_POST['direccionsIds'];
		$fijo=$_POST['fijoIds'];
		$cell=$_POST['cellIds'];

		$consulta=new UserModelRegistro();
		$user=$consulta->actualizar($id,$ced,$nom,$ape,$em,$dire,$fijo,$cell);
		$user=$consulta->selectDatos();
		$user=array('users'=>$user);
		
		//
		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 

		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/RegistroPropietario',$user).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	  }
	}

	public function eliminaDatos(){
		if(isset($_SESSION['nombre'])){
		$id2=$_POST['idsp'];
		$consulta=new UserModelRegistro();
		$consulta-> eliminarDatos($id2);
		$user=$consulta->selectDatos();
		$user=array('users'=>$user);

		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 

		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/RegistroPropietario',$user).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	  }
	}

	static $nomruta='';
	public function cargar_archivos() {

		$file=$this->request->getFile('mi_archivo');
		//static $nomruta='';
		if($file->getSize()>0){
		   //echo '<br>Nombre'.$file->getName();
		   $file->move('./public/upload',$file->getName());
		   $nomruta=$file->getName();
	  
		}
		echo $nomruta;
		/*$numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 
		
		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/ingresoMascota').view('Layouts/Logica/footer');
       */
	}
	
	public function insertMascota()
	{
		$consulta=new UserModelMascota();
        $file=$this->request->getFile('foto');

		$nom=$_POST['nombresId2'];
		$e=$_POST['edadId'];
		$f=$_POST['fechaN'];
		$sx=$_POST['sexoId'];
		$esp=$_POST['escpecieId2'];
		$rz=$_POST['RazaId'];
		$cl=$_POST['colorId'];
		$est=$_POST['esterId'];
		$vc=$_POST['vacunaId'];
		$ob=$_POST['comentarios'];
		
		

		if($file->getSize()>0){
			//echo '<br>Nombre'.$file->getName();
			$file->move('./public/upload',$file->getName());
			$fot=$file->getName();
	   
		 }else{
			$fot='sin imagen';
		 }

		
		   $user=$consulta->insertarMasc($nom,$e,$f,$sx,$esp,$rz,$cl,$est,$vc,$fot,$ob);
	  
		
		
		  $numero=$this->session->get('ids');
			$consulta=new UserModelLogin();
			$users2=$consulta->rutas($numero);
			$users2=array('users'=>$users2); 
			
	   return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/ingresoMascota').view('Layouts/Logica/footer');
	
	}

	/*public function formularios(){
		$consulta=new UserModelRegistro();
		
		$cedu='0401838925';
		$users=$consulta->buscarCedula('0401838925');
		//$numero=$this->session->get('idsc');
		$numeros=$this->session->set($users);

		echo "->".$numeros;
		

	}
	*/
	
	public function ActualizarMasct()
	{
	 if(isset($_SESSION['nombre'])){

		//$file=$this->request->getFile('fotos');
		$id=$_POST['Ids'];
		$nm=$_POST['nombreId2'];
		$e=$_POST['edadId'];
		$f=$_POST['fechaN'];
		$sx=$_POST['sexoId'];
		$esp=$_POST['especId'];
		$rz=$_POST['rzaId'];
		$cl=$_POST['colrId'];


		/*if($file->getSize()>0){
			//echo '<br>Nombre'.$file->getName();
			$file->move('./public/upload',$file->getName());
			$fot=$file->getName();
	   
		 }else{
			$fot='sin imagen';
		 }*/

		$consulta=new UserModelMascota();
		$user=$consulta->actualizarMascota($id,$nm,$e,$f,$sx,$esp,$rz,$cl);
		$user=$consulta->mostarMascota();
		$user=array('users'=>$user);

		$numero=$this->session->get('ids');
		$consulta=new UserModelLogin();
		$users2=$consulta->rutas($numero);
		$users2=array('users'=>$users2); 

		return view('Layouts/header').view('Layouts/aside',$users2).view('Layouts/Logica/mascotaRegistro',$user).view('Layouts/Logica/footer');
	}else{
		return view('Layouts/Login/login');
	  }
	}


	/*echo "<script>if (window.history.replaceState) { // verificamos disponibilidad
		window.history.replaceState(null, null, window.location.href);
	}</script>";*/


	//--------------------------------------------------------------------

}
