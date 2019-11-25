<?php 
	namespace App\Http\Controllers;

	use App\Http\Controllers\Controller;
	use App\User;

	class paginasController extends Controller
	{
	    public function index()
	    {
	        return view('index');
	    }
	    public function info_evento()
	    {
	        return view('info_evento');
	    }
	    public function confirmar_datos()
	    {
	        return view('confirmar_datos');
	    }
	    public function registro_completo()
	    {
	        return view('registro_completo');
	    }
	    public function supervisor()
	    {
	    	return view('supervisor');
	    }



	    public function login()
	    {
	        return view('login');
	    }
	    public function adminindex()
	    {
	        return view('adminindex');
	    }
	    public function crear_evento()
	    {
	        return view('crear_evento');
	    }
	    public function lista_usuarios()
	    {
	        return view('lista_usuarios');
	    }
	    public function crear_verificador()
	    {
	        return view('crear_verificador');
	    }
	}