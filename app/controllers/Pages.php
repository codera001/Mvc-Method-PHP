<?php class Pages extends Controller
{
    public function __construct()
    {
        // echo "Pages loaded";
        
    }
    public function index()
    {
  
    $data =[
        'title' => 'MVC approach/method',
       
    ];


    $this->view('pages/index', $data);

    }
    public function about()
    {
        $data = [
            'title' => 'About us'
        ];
        $this->view('pages/about', $data);

    }
}