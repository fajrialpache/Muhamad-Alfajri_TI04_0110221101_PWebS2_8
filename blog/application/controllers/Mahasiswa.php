<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{


    public function index()
    {
        // load atau panggil model
        $this->load->model("mahasiswa_model", "mhs1");

        // cara pake class model
        $this->mhs1->id = 1;
        $this->mhs1->nim = "0112201";
        $this->mhs1->nama = "alfajri";
        $this->mhs1->gender = "L";
        $this->mhs1->ipk = 4.00;

        // objek 2
        $this->load->model("mahasiswa_model", "mhs2");
        $this->mhs2->id = 2;
        $this->mhs2->nim = "0121104";
        $this->mhs2->nama = "Al hakim";
        $this->mhs2->gender = "p";
        $this->mhs2->ipk = 3.75;

        // objek 3
        $this->load->model("mahasiswa_model", "mhs3");
        $this->mhs3->id = 3;
        $this->mhs3->nim = "0910183";
        $this->mhs3->nama = "Irma";
        $this->mhs3->gender = "p";
        $this->mhs3->ipk = 3.35;


        // simpen objek ke dalam array
        $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];

        // siapin data untuk dikirim ke view
        $data["list_mhs"] = $list_mhs;

        // nampilin / render view
        $this->load->view('header');
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('footer');
    }
}
