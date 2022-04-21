<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{


    public function index()
    {
        // load atau panggil model
        $this->load->model("dosen_model", "ds1");

        // cara pake class model
        $this->ds1->id = 1;
        $this->ds1->nidn = "0414047101";
        $this->ds1->nama = "Sirojul Munir, S.Si., M.Kom.";
        $this->ds1->email = "rojulman@nurulfikri.co.id";
        $this->ds1->bidang_keahlian = "Ilmu Komputer";
        $this->ds1->web = "dev.xbata.co";

        // load atau panggil model
        $this->load->model("dosen_model", "ds2");

        // objek 2
        $this->ds2->id = 2;
        $this->ds2->nidn = "0421117805";
        $this->ds2->nama = "Lukman Rosyidi, ST., MM., MT.";
        $this->ds2->email = "lukman@nurulfikri.co.id";
        $this->ds2->bidang_keahlian = "Teknik Elektro";
        $this->ds2->web = "-";

        // load atau panggil model
        $this->load->model("dosen_model", "ds3");

        // objek 3
        $this->ds3->id = 3;
        $this->ds3->nidn = "-";
        $this->ds3->nama = "Misna Azqia";
        $this->ds3->email = "misna.azqia@gmail.com";
        $this->ds3->bidang_keahlian = "Ilmu Komputer";
        $this->ds3->web = "-";

        // simpen objek ke dalam array
        $list_ds = [$this->ds1, $this->ds2, $this->ds3];

        // siapin data untuk dikirim ke view
        $data["list_ds"] = $list_ds;

        // nampilin / render view
        $this->load->view('header');
        $this->load->view('dosen/index', $data);
        $this->load->view('footer');
    }
}
