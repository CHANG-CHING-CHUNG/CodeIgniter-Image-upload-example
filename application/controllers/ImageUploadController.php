<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ImageUploadController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // 下面這行為呼叫 helper 方法，給予 url 及 form 字串載入 url 及 form helper functions
        $this->load->helper('url', 'form');
    }

    public function index() {
        // 載入 files 資料夾底下的 upload_form.php 給客戶端
        $this->load->view('files/upload_form');
    }

    public function store() {
        // 定義儲存路徑，此處為存放在 htdocs\codeigniter\images 資料夾底下
        $config['upload_path'] = './images/';
        // 允許上傳的格式
        $config['allowed_types'] = 'gif|jpg|png';
        // 允許上傳的檔案大小  1024 = 1mb 此處為 20mb
        $config['max_size'] = 20480;
        // 允許上傳的照片尺寸大小
        $config['max_width'] = 6000;
        $config['max_height'] = 6000;
        // 調用 upload 上傳功能並載入相關 config
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('profile_image')) {
            // 如果上傳失敗的話，將失敗訊息儲存到 $error 變數
            $error = array('error' => $this->upload->display_errors());

            // 將 $error 傳給 upload_form 的前端畫面並返回給客戶端
            $this->load->view('files/upload_form', $error);
        } else {
            // 上傳成功的話，將 data 放進 array 並儲存至 $data 變數
            $data = array('image_metadata' => $this->upload->data());

            // 將 $data 傳給 upload_result 的前端畫面並返回給客戶端
            $this->load->view('files/upload_result', $data);
        }
    }

}