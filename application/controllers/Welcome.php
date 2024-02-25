<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public $input;
	public $MSudi;
	function __construct()
	{
		parent::__construct();
		$this->load->model('MSudi');
	}

	public function index()
    {
        // Check Session Login
        if ($this->session->userdata('Login')) {
           
            $data['content'] = 'beranda'; 
            
            $this->load->view('welcome_message', $data);
        } else {
           
            redirect(site_url('Login'));
        }
    }

	public function kavling()
{
    if ($this->session->userdata('Login')) {
        // Memuat model MSudi
        $this->load->model('MSudi');

        // Mengakses data dari model
        $data['DataBlokKavling'] = $this->MSudi->GetData('blok_kavling');
        $data['content'] = 'file_form/blok_kavling';
        $this->load->view('welcome_message', $data);
    } else {
        redirect(site_url('Login'));
    }
}

public function addDataBlok()
{
    if ($this->session->userdata('Login')) {
        $add['kd_blok'] = $this->input->post('kd_blok');
        $add['nama_blok'] = $this->input->post('nama_blok');
        $add['no_blok'] = $this->input->post('no_blok');

        $this->MSudi->AddData('blok_kavling', $add);

        redirect(site_url('Welcome/kavling'));
    } else {
        redirect(site_url('Login'));
    }
}

public function updateDataBlok()
{
    if ($this->session->userdata('Login')) {
        $a = $this->input->post('kd_blok');
        $update['nama_blok'] = $this->input->post('nama_blok');
        $update['no_blok'] = $this->input->post('no_blok');

        $this->MSudi->UpdateData('blok_kavling', 'kd_blok', $a, $update);

        redirect(site_url('Welcome/kavling'));
    } else {
        redirect(site_url('Login'));
    }
}

public function deleteDataBlok($kd_blok)
{
    if ($this->session->userdata('Login')) {
        $this->load->model('MSudi');
        $this->MSudi->DeleteData('blok_kavling', 'kd_blok', $kd_blok);

        // Redirect ke halaman master setelah penghapusan
        redirect(site_url('Welcome/kavling'));
    } else {
        redirect(site_url('Login'));
    }
}

public function penduduk()
{
    if ($this->session->userdata('Login')) {
        // Memuat model MSudi
        $this->load->model('MSudi');

        // Mengakses data dari model
        $data['DataPenduduk'] = $this->MSudi->GetData('penduduk');
        $data['KodeBlok']    = $this->MSudi->GetblokKavling('penduduk');
        $data['content'] = 'file_form/penduduk';
        $this->load->view('welcome_message', $data);
    } else {
        redirect(site_url('Login'));
    }
}
public function addDataPenduduk()
{
    if ($this->session->userdata('Login')) {
        $add['kd_penduduk'] = $this->input->post('kd_penduduk');
		$add['nik'] = $this->input->post('nik');
		$add['kk'] = $this->input->post('kk');
		$add['foto'] = $this->input->post('foto');
		$add['nama'] = $this->input->post('nama');
		$add['tempat_lahir'] = $this->input->post('tempat_lahir');
		$add['tgl_lahir'] = $this->input->post('tgl_lahir');
		$add['agama'] = $this->input->post('agama');
		$add['status_perkawinan'] = $this->input->post('status_perkawinan');
		$add['status_keluarga'] = $this->input->post('status_keluarga');
		$add['status_pekerjaan'] = $this->input->post('status_pekerjaan');
		$add['status_kewarganegaraan'] = $this->input->post('status_kewarganegaraan');
		$add['kd_blok'] = $this->input->post('kd_blok');
		$add['status_kavling'] = $this->input->post('status_kavling');
		$add['tgl_masuk'] = $this->input->post('tgl_masuk');
		$add['status_huni'] = $this->input->post('status_huni');

        $this->MSudi->AddData('penduduk', $add);
        redirect(site_url('Welcome/penduduk'));
    } else {
        redirect(site_url('Login'));
    }
}

public function updateDataPenduduk()
{
    if ($this->session->userdata('Login')) {
		$kd_penduduk = $this->input->post('kd_penduduk');
		$update['nik'] = $this->input->post('nik');
		$update['kk'] = $this->input->post('kk');
		$update['foto'] = $this->input->post('foto');
		$update['nama'] = $this->input->post('nama');
		$update['tempat_lahir'] = $this->input->post('tempat_lahir');
		$update['tgl_lahir'] = $this->input->post('tgl_lahir');
		$update['agama'] = $this->input->post('agama');
		$update['status_perkawinan'] = $this->input->post('status_perkawinan');
		$update['status_keluarga'] = $this->input->post('status_keluarga');
		$update['status_pekerjaan'] = $this->input->post('status_pekerjaan');
		$update['status_kewarganegaraan'] = $this->input->post('status_kewarganegaraan');
		$update['kd_blok'] = $this->input->post('kd_blok');
		$update['status_kavling'] = $this->input->post('status_kavling');
		$update['tgl_masuk'] = $this->input->post('tgl_masuk');
		$update['status_huni'] = $this->input->post('status_huni');

        $this->MSudi->UpdateData('penduduk', 'kd_penduduk', $kd_penduduk, $update);
        redirect(site_url('Welcome/penduduk'));
    } else {
        redirect(site_url('Login'));
    }
}

public function deleteDataPenduduk($kd_penduduk)
{
    if ($this->session->userdata('Login')) {
        $this->load->model('MSudi');
        $this->MSudi->DeleteData('penduduk', 'kd_penduduk', $kd_penduduk);

        // Redirect ke halaman master setelah penghapusan
        redirect(site_url('Welcome/penduduk'));
    } else {
        redirect(site_url('Login'));
    }
}

	public function suratKeluar()
{
    if ($this->session->userdata('Login')) {
        // Memuat model MSudi
        $this->load->model('MSudi');

        // Mengakses data dari model
        $data['DataSuratKeluar'] = $this->MSudi->GetData('surat_keluar');
        $data['content'] = 'file_form/surat_keluar';
        $this->load->view('welcome_message', $data);
    } else {
        redirect(site_url('Login'));
    }
}
public function addDataSuratKeluar()
{
    if ($this->session->userdata('Login')) {
        $add['kd_surat_keluar'] = $this->input->post('kd_surat_keluar');
        $add['nik'] = $this->input->post('nik');
        $add['nomor_surat'] = $this->input->post('nomor_surat');
        $add['keterangan'] = $this->input->post('keterangan');
        $add['tanggal_surat'] = $this->input->post('tanggal_surat');

        $this->MSudi->AddData('surat_keluar', $add);
        redirect(site_url('Welcome/suratKeluar'));
    } else {
        redirect(site_url('Login'));
    }
}

public function updateDataSuratKeluar()
{
    if ($this->session->userdata('Login')) {
        $kd_surat_keluar = $this->input->post('kd_surat_keluar');
        $update['nik'] = $this->input->post('nik');
        $update['nomor_surat'] = $this->input->post('nomor_surat');
        $update['keterangan'] = $this->input->post('keterangan');
        $update['tanggal_surat'] = $this->input->post('tanggal_surat');

        $this->MSudi->UpdateData('surat_keluar', 'kd_surat_keluar', $kd_surat_keluar, $update);
        redirect(site_url('Welcome/suratKeluar'));
    } else {
        redirect(site_url('Login'));
    }
}

public function deleteDataSuratKeluar($kd_surat_keluar)
{
    if ($this->session->userdata('Login')) {
        $this->load->model('MSudi');
        $this->MSudi->DeleteData('surat_keluar', 'kd_surat_keluar', $kd_surat_keluar);

        // Redirect ke halaman master setelah penghapusan
        redirect(site_url('Welcome/suratKeluar'));
    } else {
        redirect(site_url('Login'));
    }
}

	public function informasi()
{
    if ($this->session->userdata('Login')) {
        // Memuat model MSudi
        $this->load->model('MSudi');

        // Mengakses data dari model
        $data['DataInformasi'] = $this->MSudi->GetData('info_warga');
        $data['content'] = 'file_form/informasi';
        $this->load->view('welcome_message', $data);
    } else {
        redirect(site_url('Login'));
    }
}

public function addDataInformasi()
{
    if ($this->session->userdata('Login')) {
        $add['kd_info'] = $this->input->post('kd_info');
        $add['judul_info'] = $this->input->post('judul_info');
        $add['informasi'] = $this->input->post('informasi');
        $add['tgl_info'] = $this->input->post('tgl_info');

        $this->MSudi->AddData('info_warga', $add);

        redirect(site_url('Welcome/informasi'));
    } else {
        redirect(site_url('Login'));
    }
}

public function updateDataInformasi()
{
    if ($this->session->userdata('Login')) {
        $a = $this->input->post('kd_info');
        $update['judul_info'] = $this->input->post('judul_info');
        $update['informasi'] = $this->input->post('informasi');
        $update['tgl_info'] = $this->input->post('tgl_info');

        $this->MSudi->UpdateData('info_warga', 'kd_info', $a, $update);

        redirect(site_url('Welcome/informasi'));
    } else {
        redirect(site_url('Login'));
    }
}

public function deleteDataInformasi($kd_info)
{
    if ($this->session->userdata('Login')) {
        $this->load->model('MSudi');
        $this->MSudi->DeleteData('info_warga', 'kd_info', $kd_info);

        // Redirect ke halaman master setelah penghapusan
        redirect(site_url('Welcome/informasi'));
    } else {
        redirect(site_url('Login'));
    }
}

public function pesan()
{
    if ($this->session->userdata('Login')) {
        // Memuat model MSudi
        $this->load->model('MSudi');

        // Mengakses data dari model
        $data['DataPesan'] = $this->MSudi->GetData('pesan_warga');
        $data['content'] = 'file_form/pesan_masuk';
        $this->load->view('welcome_message', $data);
    } else {
        redirect(site_url('Login'));
    }
}

public function addDataPesan()
{
    if ($this->session->userdata('Login')) {
        $add['kd_pesan'] = $this->input->post('kd_pesan');
        $add['nik'] = $this->input->post('nik');
        $add['pesan'] = $this->input->post('pesan');
        $add['tgl_pesan'] = $this->input->post('tgl_pesan');

        $this->MSudi->AddData('pesan_warga', $add);

        redirect(site_url('Welcome/pesan'));
    } else {
        redirect(site_url('Login'));
    }
}

public function updateDataPesan()
{
    if ($this->session->userdata('Login')) {
        $a = $this->input->post('kd_pesan');
        $update['nik'] = $this->input->post('nik');
        $update['pesan'] = $this->input->post('pesan');
        $update['tgl_pesan'] = $this->input->post('tgl_pesan');

        $this->MSudi->UpdateData('pesan_warga', 'kd_pesan', $a, $update);

        redirect(site_url('Welcome/pesan'));
    } else {
        redirect(site_url('Login'));
    }
}

public function deleteDataPesan($kd_pesan)
{
    if ($this->session->userdata('Login')) {
        $this->load->model('MSudi');
        $this->MSudi->DeleteData('pesan_warga', 'kd_pesan', $kd_pesan);

        // Redirect ke halaman master setelah penghapusan
        redirect(site_url('Welcome/pesan'));
    } else {
        redirect(site_url('Login'));
    }
}

	public function logout()
    {
        // Unset session data
        $this->session->unset_userdata('Login');

        // Redirect to 'Login' controller
        redirect(site_url('Login'));
    }


	public function iuran()
	{
		if ($this->session->userdata('Login')) {
			// Memuat model MSudi
			$this->load->model('MSudi');

			// Mengakses data dari model
			$data['DataIuran'] = $this->MSudi->GetData('iuran_warga');
			$data['KodeBlok']    = $this->MSudi->GetblokKavling('penduduk');
			$data['NIK']    = $this->MSudi->GetNIK('nik');

			$data['content'] = 'file_form/iuran';
			$this->load->view('welcome_message', $data);
		} else {
			redirect(site_url('Login'));
		}
	}
	public function addDataIuran()
	{
		if ($this->session->userdata('Login')) {
			$add['kd_iuran'] = $this->input->post('kd_iuran');
			$add['kd_blok'] = $this->input->post('kd_blok');
			$add['nik'] = $this->input->post('nik');
			$add['jenis_pembayaran'] = $this->input->post('jenis_pembayaran');
			$add['keterangan'] = $this->input->post('keterangan');
			$add['tgl_pembayaran'] = $this->input->post('tgl_pembayaran');
			$add['bukti_iuran'] = $this->input->post('bukti_iuran');
			$add['kas_tahun'] = $this->input->post('kas_tahun');
			$add['kas_bulan'] = $this->input->post('kas_bulan');
			$add['status'] = $this->input->post('status');
			

			$this->MSudi->AddData('iuran_warga', $add);
			redirect(site_url('Welcome/iuran'));
		} else {
			redirect(site_url('Login'));
		}
	}

	public function updateDataIuran()
	{
		if ($this->session->userdata('Login')) {
			$kd_iuran = $this->input->post('kd_iuran');
			$update['kd_iuran'] = $this->input->post('kd_iuran');
			$update['kd_blok'] = $this->input->post('kd_blok');
			$update['nik'] = $this->input->post('nik');
			$update['jenis_pembayaran'] = $this->input->post('jenis_pembayaran');
			$update['keterangan'] = $this->input->post('keterangan');
			$update['tgl_pembayaran'] = $this->input->post('tgl_pembayaran');
			$update['bukti_iuran'] = $this->input->post('bukti_iuran');
			$update['kas_tahun'] = $this->input->post('kas_tahun');
			$update['kas_bulan'] = $this->input->post('kas_bulan');
			$update['status'] = $this->input->post('status');

			$this->MSudi->UpdateData('iuran_warga', 'kd_iuran', $kd_iuran, $update);
			redirect(site_url('Welcome/iuran'));
		} else {
			redirect(site_url('Login'));
		}
	}

	public function deleteDataIuran($kd_iuran)
	{
		if ($this->session->userdata('Login')) {
			$this->load->model('MSudi');
			$this->MSudi->DeleteData('iuran_warga', 'kd_iuran', $kd_iuran);

			// Redirect ke halaman master setelah penghapusan
			redirect(site_url('Welcome/iuran'));
		} else {
			redirect(site_url('Login'));
		}
	}

    public function user()
{
    if ($this->session->userdata('Login')) {
        // Memuat model MSudi
        $this->load->model('MSudi');

        // Mengakses data dari model
        $data['DataUser'] = $this->MSudi->GetData('users');
        $data['content'] = 'file_form/user';
        $this->load->view('welcome_message', $data);
    } else {
        redirect(site_url('Login'));
    }
}

public function addDataUser()
{
    if ($this->session->userdata('Login')) {
        $add['kd_user'] = $this->input->post('kd_user');
        $add['nik'] = $this->input->post('nik');
        $add['email'] = $this->input->post('email');
        $add['username'] = $this->input->post('username');
        $add['password'] = $this->input->post('password');
        $add['dentry'] = $this->input->post('dentry');

        $this->MSudi->AddData('users', $add);

        redirect(site_url('Welcome/user'));
    } else {
        redirect(site_url('Login'));
    }
}

public function updateDataUser()
{
    if ($this->session->userdata('Login')) {
        $a = $this->input->post('kd_user');
        $update['nik'] = $this->input->post('nik');
        $update['email'] = $this->input->post('email');
        $update['username'] = $this->input->post('username');
        $update['password'] = $this->input->post('password');
        $update['dentry'] = $this->input->post('dentry');

        $this->MSudi->UpdateData('users', 'kd_user', $a, $update);

        redirect(site_url('Welcome/user'));
    } else {
        redirect(site_url('Login'));
    }
}

public function deleteDataUser($kd_user)
{
    if ($this->session->userdata('Login')) {
        $this->load->model('MSudi');
        $this->MSudi->DeleteData('users', 'kd_user', $kd_user);

        // Redirect ke halaman master setelah penghapusan
        redirect(site_url('Welcome/user'));
    } else {
        redirect(site_url('Login'));
    }
}

   

}
