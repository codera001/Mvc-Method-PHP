class Posts{

    public_function__construct(){
      $this->postModel = $this->model('post')

    }
    public_function index(){
    }

    public function add(){

    }

    public function edit ($id){
        $post = $this->postModel->fetchPost($id)

        this->view('edit', ['post,' => $post]);
    }
}

<h1><?php echo $data['title'];?></h1>