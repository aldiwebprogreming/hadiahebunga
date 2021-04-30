<?php 
	
	/**
	 * 
	 */
	class Lending extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
		}

		function index(){
			$data['product'] = $this->db->get('tbl_galeri_product')->result_array();
			$this->load->view('Home/lending', $data);
		}


		function pesan(){

			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' =>$this->input->post('phone'),
				'pesan' => $this->input->post('pesan'),
			];

			$input = $this->db->insert('tbl_pesan2', $data);
			if ($input) {
				
				 $this->session->set_flashdata('message', 'swal("Sukses!", "Pesan anda berhasil dikirim", "success");');
	         	 redirect("lending/");
			} else{

				$this->session->set_flashdata('message', 'swal("Gagal!", "Pesan anda gagal dikirim", "error");');
	         	 redirect("lending/");
			} 
		}



		function klik(){
			$ip  = $this->input->ip_address(); // Mendapatkan IP user

			    $date  = date("Y-m-d"); // Mendapatkan tanggal sekarang
			    $waktu = time(); //\
			    $timeinsert = date("Y-m-d H:i:s");

			    // Cek berdasarkan IP, apakah user sudah pernah mengakses hari ini
			$s = $this->db->query("SELECT * FROM tbl_tombol WHERE ip='".$ip."' AND date='".$date."'")->num_rows();
			$ss = isset($s)?($s):0;

			//kalau belum ada simpan data ip
			if($ss == 0){
			$this->db->query("INSERT INTO tbl_tombol(ip, date, hits, online, time) VALUES('".$ip."','".$date."','1','".$waktu."','".$timeinsert."')");
			redirect('https://www.ebunga.com/user/register.html');
			}

			// Jika sudah ada, update
			else{
			$this->db->query("UPDATE tbl_tombol SET hits=hits+1, online='".$waktu."' WHERE ip='".$ip."' AND date='".$date."'");

				redirect('https://www.ebunga.com/user/register.html');
			}
		}
	}


 ?>