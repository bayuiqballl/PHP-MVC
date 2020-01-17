<?php 

class About extends Controller {
	public function index($nama = 'Bayu', $pekerjaan = 'Progammer', $umur = 20)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = "About Me";
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}
	public function page()
	{
		$data['judul'] = "About Page";
		$this->view('templates/header', $data);
		$this->view('about/page');
		$this->view('templates/footer');
	}
}


