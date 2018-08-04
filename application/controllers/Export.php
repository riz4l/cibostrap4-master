<?php defined('BASEPATH') OR exit('no direct script access allowed');

	class  Export extends CI_Controller	{

		public function __Construct()
		{
			parent::__Construct();

				$this->load->model('Export_model','Mdl');
		}	

		public function index()
		{
			$user_data['link_export'] = 'active';
            $user_data['agama'] = $this->Mdl->get_agama();
			$user_data['query'] = $this->Mdl->get_all_data();
			$this->load->view('header',$user_data);
			$this->load->view('export/data',$user_data);
			$this->load->view('footer');
		}

		public function excel_file()
		{
    	    $user_data['judul'] = 'Example excel export';
    	    $user_data['query'] = $this->Mdl->get_all_data();
    	    $this->load->view('export/export_excel',$user_data);
		}

        public function excel_filter_jk()
        {
            $user_data['judul'] = 'Example excel export';
            $jk = $this->input->post('jenis_kelamin');
            $user_data['query'] = $this->Mdl->get_export_byjk($jk);
            $this->load->view('export/export_excel',$user_data);
        }

		public function pdf_file(){
        $pdf = new FPDF('L','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(280,7,'DATA LIST USER',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(280,7,'EXPORT PDF EXAMPLE',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(35,6,'NAMA',1,0);
        $pdf->Cell(50,6,'TEMPAT/TANGGAL LAHIR',1,0);
        $pdf->Cell(35,6,'JENIS KELAMIN',1,0);
        $pdf->Cell(27,6,'AGAMA',1,0);
        $pdf->Cell(35,6,'NO TELEPHONE',1,0);
        $pdf->Cell(35,6,'EMAIL',1,0);
        $pdf->Cell(55,6,'ALAMAT',1,1);
        $pdf->SetFont('Arial','',10);
        $agama = $this->input->post('agama');
        if(isset($_POST['agama'])){
        $data_project = $this->Mdl->get_export_agama($agama);
        }else{
        $data_project = $this->Mdl->get_all_data();   
        }
        $no = 0;
        foreach ($data_project as $row){
        	$no++;
            $pdf->Cell(10,6,$no,1,0);
            $pdf->Cell(35,6,$row->nama,1,0);
            $pdf->Cell(50,6,$row->tempat_lahir.'/'.$row->tanggal_lahir,1,0);
            $pdf->Cell(35,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(27,6,$row->agama,1,0); 
            $pdf->Cell(35,6,$row->no_telephone,1,0);
            $pdf->Cell(35,6,$row->email,1,0);
            $pdf->Cell(55,6,$row->alamat,1,1);
        }
        $pdf->Output();
        }


	}