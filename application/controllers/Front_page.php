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
    public function kegiatan_1()
    {
        $this->header();
        $this->load->view('kegiatan_1', $this->app_data);
        $this->footer();
    }
    public function kegiatan_2()
    {
        $this->header();
        $this->load->view('kegiatan_2', $this->app_data);
        $this->footer();
    }
    public function kegiatan_3()
    {
        $this->header();
        $this->load->view('kegiatan_3', $this->app_data);
        $this->footer();
    }
    public function kegiatan_4()
    {
        $this->header();
        $this->load->view('kegiatan_4', $this->app_data);
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
            'select' => 'id, name, email, message, image, date_send, status',
            'from' => 'message_user',
            'where' => ['status !=' => 0, 'is_deleted' => 0],
            'order_by' => 'id DESC',
            'limit' => $limit,
            'offset' => $offset
        ];

        $kritik_saran = $this->data->get($query)->result();

        $count_query = [
            'select' => 'COUNT(*) as total',
            'from' => 'message_user',
            'where' => ['status !=' => 0, 'is_deleted' => 0]
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
        $config['upload_path'] = './uploads/messages/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 2048; // 2MB
        $config['encrypt_name'] = TRUE;

        // Create directory if it doesn't exist
        if (!is_dir($config['upload_path'])) {
            mkdir($config['upload_path'], 0777, true);
        }

        $this->load->library('upload', $config);

        // Set validation rules
        $this->form_validation->set_rules('nama_pengirim', 'Nama', 'required|trim');
        $this->form_validation->set_rules('email_pengirim', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('pesan', 'Pesan', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $this->contact();
        } else {
            $image = "";

            // Handle image upload if file is selected
            if (!empty($_FILES['image']['name'])) {
                if ($this->upload->do_upload('image')) {
                    $upload_data = $this->upload->data();
                    $image = $upload_data['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors());
                    redirect('front_page/contact');
                    return;
                }
            }

            $data = array(
                'name' => $this->input->post('nama_pengirim'),
                'email' => $this->input->post('email_pengirim'),
                'message' => $this->input->post('pesan'),
                'image' => $image,
                'date_send' => date('Y-m-d H:i:s'),
                'status' => 1,
                'is_deleted' => 0
            );

            $insert = $this->data->insert('message_user', $data);

            if ($insert) {
                $this->session->set_flashdata('success', 'Pesan berhasil dikirim!');
            } else {
                $this->session->set_flashdata('error', 'Gagal mengirim pesan!');
            }

            redirect('front_page/contact');
        }
    }

    public function get_data_message()
    {
        $limit = $this->input->get('limit') ?? 10;
        $offset = $this->input->get('offset') ?? 0;

        $query = [
            'select' => 'id, name, email, message, image, date_send, status',
            'from' => 'message_user',
            'where' => ['status !=' => 0, 'is_deleted' => 0],
            'order_by' => 'id DESC',
            'limit' => $limit,
            'offset' => $offset
        ];

        $data = $this->data->get($query)->result();

        // Count total records
        $count_query = [
            'select' => 'COUNT(*) as total',
            'from' => 'message_user',
            'where' => ['status !=' => 0, 'is_deleted' => 0]
        ];
        $total_count = $this->data->get($count_query)->row()->total;

        // Format data for JSON response
        $formatted_data = array_map(function ($item) {
            return [
                'id' => $item->id,
                'name' => $item->name,
                'message' => $item->message,
                'image' => $item->image,
                'date_send' => $item->date_send,
                'status' => $item->status
            ];
        }, $data);

        echo json_encode([
            'data' => $formatted_data,
            'total_count' => $total_count
        ]);
    }
}
