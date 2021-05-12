<?php 

	/**
	 * 
	 */
	class Post extends CI_Model
	{
		public function all()
		{
			  
			  $r = $this->db->query("SELECT * FROM proyectos");

			  return $r->result();
		}

		public function proyecto($id)
		{
			  
			  $r = $this->db->query("SELECT * FROM proyectos WHERE '".$id."'");

			  return $r->result();
		}

		public function insert($post = null)
		{
		    			
			if($post != null){		
				
				$nombre = $post['nombre'];
				$precio = $post['precio'];
				$estado = $post['estado'];

				$SQL = "INSERT INTO proyectos(
				nombre,
				precio,
				estado
				) VALUES (
				'".$nombre."',
				'".$precio."',
				'".$estado."')";

				if($this->db->query($SQL)){
					return true;
				}else{

				}

			}

			return false;

		}

		public function update($post = null)
		{
		    			
			if($post != null){		
				
				$id = $post['id'];
				$nombre = $post['nombre'];
				$precio = $post['precio'];
				$estado = $post['estado'];

				$SQL = "UPDATE proyectos SET 
				nombre= '".$nombre."',
				precio= '".$precio."',
				estado= '".$estado."'
				WHERE id = '".$id."'";

				if($this->db->query($SQL)){
					return true;
				}else{

				}

			}

			return false;

		}

		public function delete($id = '')
		{

			if($id != null){	

				$SQL = "DELETE FROM proyectos WHERE id = '".$id."' LIMIT 1";

				if($this->db->query($SQL)){
						return true;
					}else{

					}

			}

			return false;

		}

	

	}

?>