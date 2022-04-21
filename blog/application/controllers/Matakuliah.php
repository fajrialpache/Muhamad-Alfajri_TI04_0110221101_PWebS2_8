<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Matakuliah extends CI_Controller
{


    public function index()
    {
        // load atau panggil model
        $this->load->model("matakuliah_model", "mt1");

        // cara pake class model
        $this->mt1->id = 1;
        $this->mt1->nama_matkul = "Pemograman WEB";
        $this->mt1->jurusan = "Teknik Informatika & Sistem Informais";
        $this->mt1->sks = "4";

        // load atau panggil model
        $this->load->model("matakuliah_model", "mt2");

        // objek 2
        $this->mt2->id = 2;
        $this->mt2->nama_matkul = "Basis Data";
        $this->mt2->jurusan = "Teknik Informatika & Sistem Informasi";
        $this->mt2->sks = "5";

        // load atau panggil model
        $this->load->model("matakuliah_model", "mt3");

        // objek 3
        $this->mt3->id = 3;
        $this->mt3->nama_matkul = "Jaringan Komputer";
        $this->mt3->jurusan = "Teknik Informatika & Sistem Informasi";
        $this->mt3->sks = "10";

        // simpen objek ke dalam array
        $list_mt = [$this->mt1, $this->mt2, $this->mt3];

        // siapin data untuk dikirim ke view
        $data["list_mt"] = $list_mt;

        // nampilin / render view
        $this->load->view('header');
        $this->load->view('matakuliah/index', $data);
        $this->load->view('footer');
    }
}
