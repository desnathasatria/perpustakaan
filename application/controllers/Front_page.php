<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $module_js = ['message'];
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

    public function contact($page = 1)
    {
        $limit = 4;
        $offset = ($page - 1) * $limit;

        $query = [
            'select' => 'id, name, email, message, date_send, status',
            'from' => 'message_user',
            'where' => ['status !=' => 0], // Exclude messages with status 0
            'order_by' => 'id DESC',
            'limit' => $limit,
            'offset' => $offset
        ];

        $kritik_saran = $this->data->get($query)->result();

        // Count total records
        $count_query = [
            'select' => 'COUNT(*) as total',
            'from' => 'message_user',
            'where' => ['status !=' => 0]
        ];
        $total_count = $this->data->get($count_query)->row()->total;

        $this->app_data['kritik_saran'] = $kritik_saran;
        $this->app_data['total_count'] = $total_count;
        $this->app_data['current_page'] = $page;

        $this->header();
        $this->load->view('contact', $this->app_data);
        $this->footer();
    }

    public function insert_message()
    {
        $this->form_validation->set_rules('nama_pengirim', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email_pengirim', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->contact_page(); // Reload the contact page with validation errors
        } else {
            $data = array(
                'name' => $this->input->post('nama_pengirim'),
                'email' => $this->input->post('email_pengirim'),
                'message' => $this->input->post('pesan'),
                'date_send' => date('Y-m-d H:i:s'),
                'status' => 1  // Set initial status to 1 (Belum dicek oleh admin)
            );
            $this->data->insert('message_user', $data);

            $this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
            redirect('Front_page/contact');
        }
    }

}
