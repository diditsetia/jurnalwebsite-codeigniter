<?php
	
	/**
	* 
	*/
	class Webmodel extends CI_Model
	
	{

		public function uraianperbaikan($dataperbaikan,$where)
		{
			$this->db->where($where);
			$this->db->update('artikel', $dataperbaikan);
		}

		public function jurnalterpopuler($number,$offset)
		{
			$this->db->where('status','post');
            $this->db->order_by('view', 'desc');
            $query = $this->db->get('artikel',$number,$offset);
            $populer = $query->result_array();
            return $populer;
		}

		public function fungsipencarian($kategori,$cari)
		{

			$this->db->like('judul_artikel',$cari);
			if ($kategori != '') {
				$this->db->where('id_kategori',$kategori);
			}
			$this->db->where('status','post');
			$query = $this->db->get('artikel');
			$pencarian = $query->result_array();
			return $pencarian ;
    	}

    	public function carikata($cari)
    	{   

		 	$this->db->like('abstrak',$cari);
		 	$this->db->where('status','post');
			$query = $this->db->get('artikel');
			$carikata = $query->row();
			return $carikata;

    	}

		public function registeruser($data)
		{
			$this->db->insert('user',$data);
		}
		public function liked ($id, $ip)
		{

			$this->db->where(array('id_artikel' => $id, 'ip' => $ip));
			$query = $this->db->get('like');
			if ($query->num_rows() != 0) {
				
				return true;
			} else {

				return false;
			}
		}
		public function like($data)
		{
			
			$query = $this->db->insert('like',$data);

			if ($query) {
				
				return true;
			}else {
				return false;
			}

		}

		public function getLikes($id)
		{
			
		$this->db->where('id_artikel',$id);
	    $query = $this->db->get('like');
	    $data = $query->num_rows();
	    return $data;

		}

		public function unlike($id)
		{
				
			$this->db->where('id_artikel',$id);
			$query = $this->db->delete('like');

			if ($query) {
				return true;
			}else {
				return false;
			}
		}


		public function pengunjunghariini()
		{
			$tanggal	= date('Y-m-d H:i:s');
			$this->db->where('tanggal',$tanggal);
			$this->db->group_by('ip');
			$query = $this->db->get('statistik');
			$datahariini =$query->num_rows();
			print_r($datahariini);
		}

		public function totalpengunjung()
		{
 				
			 // hitung total pengunjung
			  $this->db->select('COUNT(hits)');
			  $query = $this->db->get('statistik',0);
			  $total = $query->result_array();
			  return $total;

		}

		public function pengunjungonline()
		{
			$bataswaktu       = time() - 300;
   			// hitung pengunjung online
   			$this->db->where('online' > $bataswaktu);
   			$query = $this->db->get('statistik');
   			$pengunjungonline = $query->num_rows();
   			print_r($pengunjungonline);
   			die();
   			return $pengunjungonline;

		}


		public function insert_artikel($data)
		{
			$this->db->insert('artikel',$data);
		}

		public function insertkomentar($komentardata)
		{
			$this->db->insert('komentar',$komentardata);
		}

		public function tampildata($number,$offset)

		{
			$iduser = $this->session->userdata('id');
			$this->db->where('id_user',$iduser);
			$this->db->where('status','post');
			$this->db->or_where('status','Waiting');

			$q = $this->db->get('artikel',$number,$offset);
			$data = $q->result_array();
			return $data;
		}

		public function jumlahdatapost()
		{
			$this->db->where('status','post');
			$query = $this->db->get('artikel');
			$datajurnalpost = $query->num_rows();
			return $datajurnalpost; 
		}

		public function jumlahdata()
		{
			$this->db->where('status','post'); 
			$this->db->or_where('status','Waiting');
			$this->db->or_where('status','drafredaksi');
			$query = $this->db->get('artikel');
			$dataartikel = $query->num_rows();
			return $dataartikel;	
		}

		public function jumlah_data()
		{
			 return $this->db->get('artikel')->num_rows();
		}

		public function hapuspenulisbaru($id)
		{
			$this->db->where('id_user',$id);
			$this->db->delete('user');

		}

		public function hapus($id)
		{
			$this->db->where('id_artikel',$id);
			 $this->db->delete('artikel');
		}

		public function tampiljurnal($id)
		{

			$this->db->where('id_artikel',$id);
			$query = $this->db->get('artikel');
			$datajurnal	= $query->row();

			return $datajurnal;
		}

		public function tampildatawaiting($number,$offset)
		{
			$this->db->where('status','post'); 
			$this->db->or_where('status','Waiting');
			$this->db->or_where('status','drafredaksi');
			$query = $this->db->get('artikel',$number,$offset);
			$dataartikel = $query->result_array();
			return $dataartikel;

		}

		public function tampilwaitingreviewer($number,$offset)
		{
			$this->db->where('status','waitingriview');
			$this->db->or_where('status','waitingfinal');
			$query = $this->db->get('artikel',$number,$offset);
			$datareview = $query->result_array();
			return $datareview;
		}
		public function tampilwaitingreview($number,$offset)
		{
			$this->db->where('status','waitingriview');
			$query = $this->db->get('artikel',$number,$offset);
			$datareview = $query->result_array();
			return $datareview;
		}

		public function tampildatasave($number,$offset)
		{
			$this->db->where('status','draf');
			$this->db->or_where('status','final');
			$query = $this->db->get('artikel',$number,$offset);
			$datasave = $query->result_array();
			return $datasave;
		}

		public function tampildatafinalrevisi($number,$offset)
		{
			$this->db->where('status','revisifinal');
			$this->db->or_where('status','siappost');
			$this->db->or_where('status','waitingfinal');
			$query = $this->db->get('artikel',$number,$offset);
			$saverevisi = $query->result_array();
			return $saverevisi;
		}

		public function tampilpenulisbaru()
		{
			$this->db->where('status','belumaktif');
			$query = $this->db->get('user');
			$penulisbaru = $query->result_array();
			return $penulisbaru;
		}

		public function tampilkomentar($data)
		{
			      

		  $this->db->select('komentar.no_komentar,
		             		 komentar.nama,
		             	     komentar.isi_komentar,
		             		 komentar.tanggal,
		             		 artikel.id_artikel,
		             		 artikel.judul_artikel'
		             						   			)
		             		 ->join('artikel','komentar.id_artikel = artikel.id_artikel')
		             		 ->where('komentar.id_artikel',$data);
		             		 $query=$this->db->get('komentar')->result_array();
		             		 return $query;           						
			
		}

		public function fungsicarikategori($data)
		{
			$this->db->where('status','post');
			$this->db->like('id_kategori',$data) ;
			$query = $this->db->get('artikel');
			$pencarian = $query->result_array();
			return $pencarian ;
		}
		public function tampiljurnalpost($number,$offset)
		{
			$this->db->where('status','post');
			$query = $this->db->get('artikel',$number,$offset);
			$datajurnalpost = $query->result_array();
			return $datajurnalpost; 
		}

		public function tampiljurnalpopuler()
		{
			
            $this->db->where('status','post');
            $this->db->order_by('view', 'desc');
            $query = $this->db->get('artikel');
            $populer = $query->result_array();
       
			return $populer;
		}

		public function readmorejurnal($id)
		{
			$this->db->where('id_artikel',$id);
			$query = $this->db->get('artikel');
			$datareadmore = $query->row();

			return $datareadmore;
		}

		public function tampildatariview()
		{	

			$query = $this->db->get('artikel');
			$dataartikel = $query->result_array();
			return $dataartikel;
		}

		public function tampildatarevisi()
		{
			$this->db->where('status','revisi');
			$query = $this->db->get('artikel');
			$datarevisi = $query->result_array();
			return $datarevisi;
		}



		public function editdrafjurnal($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		public function editrevisijurnal($where,$table)
		{
			return $this->db->get_where($table,$where);
		}

		public function updateartikel($dataartikel,$where)
		{
			$this->db->where($where);
			$this->db->update('artikel', $dataartikel);
		}

		public function updateaktifuser($id)
		{
			$this->db->where('id_user',$id);
			$this->db->set('status','aktif');
			$this->db->update('user');
		}

		public function updateartikelreview($id)
		{
			$this->db->where('id_artikel',$id);
			$this->db->set('status','revisi');
			$this->db->update('artikel');
		}

		public function statussiappost($id)
		{
			$this->db->where('id_artikel',$id);
			$this->db->set('status','siappost');
			$this->db->update('artikel');
		}

		public function revisilagi($id)
		{
			$this->db->where('id_artikel',$id);
			$this->db->set('status','revisi');
			$this->db->update('artikel');
		}

		public function editjurnal($idnya,$table)

		{
			return $this->db->get_where($table,$idnya);		
		}

		
	
	}

