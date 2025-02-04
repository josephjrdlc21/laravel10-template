<?php 

namespace App\Laravel\Controllers\Api;

use App\Laravel\Requests\PageRequest;

use App\Laravel\Traits\ResponseGenerator;

class MainController extends Controller{
    use ResponseGenerator;

    protected $transformer;
    protected $data;
    protected $response;
    protected $response_code;
    
    public function __construct(){
        parent::__construct();
    }

    public function index(PageRequest $request){
        $this->response['status'] = true;
        $this->response['status_code'] = "TEST";
        $this->response['msg'] = "HELLO WORLD.";
        $this->response_code = 200;

        callback:
        return response()->json($this->api_response($this->response), $this->response_code);
    }
}