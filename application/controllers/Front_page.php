<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $app_data = [];
    public function header()
    {
        $this->load->view('header', $this->app_data);
    }
    public function footer()
    {
        $this->load->view('footer', $this->app_data);
    }
    public function index()
    {
        $this->header();
        $this->load->view('index', $this->app_data);
        $this->footer();
    }
    public function contact()
    {
        $this->header();
        $this->load->view('contact', $this->app_data);
        $this->footer();
    }
    public function profile()
    {
        $this->header();
        $this->load->view('profile', $this->app_data);
        $this->footer();
    }
    public function service()
    {
        $this->header();
        $this->load->view('service', $this->app_data);
        $this->footer();
    }
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_model', 'data');
        $this->load->library('form_validation');
        $this->load->library('pagination');
    }

    public function get_data_message()
    {
        $query = [
            'select' => 'id, name, email, message, date_send, status',
            'from' => 'message_user',
            'order_by' => 'id DESC'
        ];
        $result = $this->data->get($query)->result();
        echo json_encode($result);
    }

    public function insert_message()
    {
        $this->form_validation->set_rules('nama_pengirim', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email_pengirim', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $response['errors'] = $this->form_validation->error_array();
        } else {
            $nama = $this->input->post('nama_pengirim');
            $email = $this->input->post('email_pengirim');
            $pesan = $this->input->post('pesan');

            $data = array(
                'name' => $nama,
                'email' => $email,
                'message' => $pesan,
                'date_send' => date('Y-m-d H:i:s'),
                'status' => 1  // Set initial status to 1 (Belum dicek oleh admin)
            );
            $this->data->insert('message_user', $data);

            $response['success'] = "Pesan berhasil dikirim!";
        }

        echo json_encode($response);
    }
}
