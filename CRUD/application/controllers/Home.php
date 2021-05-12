<?php


class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('global/head');
		$this->load->view('global/nav');
		$this->load->view('global/content');
		$this->load->view('global/footer');
	}

	function all(){  
       		
        $this->load->model('post');

		$result = $this->post->all();
	
		echo json_encode($result); 

    } 

    function busqueda(){  
        		
        $id = $this->input->post('id');

		$result = $this->post->proyecto($id);
	
		echo json_encode($result); 

      }

	public function insert($id = ''){

		$post = $this->input->post();

	     	$bool = $this->post->insert($post);

			if($bool == true){
					echo "Guardado Exitoso";
			}else{
					echo "Guardado Fallido";
			}

	}

	public function updat($id = ''){

		$post = $this->input->post();

	     	$bool = $this->post->update($post);

			if($bool == true){
					echo "Actualizacion Exitosa";
			}else{
					echo "Actualizacion Fallida";
			}

	}

	public function delete($id = ''){

		$id = $this->input->post('id');

	     	$bool = $this->post->delete($id);

			if($bool == true){
					echo "Eliminacion Exitosa";
			}else{
					echo "Eliminacion Fallida";
			}

	}

}
