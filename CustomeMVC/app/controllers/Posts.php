<?php
class Posts extends Controller {
    public function __construct()
    {
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $posts = $this->postModel->findAllPosts();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }

    public function create()
    {
        if(!isLoggedIn())
        {
            header('Location: ' .URLROOT.'/posts');
        }
        $data = [
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => ''
            ];
            //var_dump($data);
            if(empty($data['title']))
            {
                $data['titleError'] = 'Please enter Blog Title';
            }

            if(empty($data['body']))
            {
                $data['bodyError'] = 'Please enter Blog Body';
            }
            if(empty($data['titleError']) && empty($data['bodyError']))
            {
                if($this->postModel->addPost($data))
                {
                    header('Location:' .URLROOT. "/posts");
                }
                else{
                    echo "error";
                    //die('Something Went Wrong Please Try Again... ');
                }
            }
            else{
                $this->view('posts/create',$data);
            }
        }
        $this->view('posts/create', $data);
    }

    public function update($id)
    {
        $post = $this->postModel->findPostById($id);
        if(!isLoggedIn())
        {
            header('Location:' . URLROOT . "/posts");
        }
        elseif ($post->user_id != $_SESSION['user_id'])
        {
            header('Location:' . URLROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => ''
            ];
            //var_dump($data);
            if(empty($data['title']))
            {
                $data['titleError'] = 'Please enter Blog Title';
            }

            if(empty($data['body']))
            {
                $data['bodyError'] = 'Please enter Blog Body';
            }

            if($data['title'] == $this->postModel->findPostById($id)->title)
            {
                $data['titleError'] = 'Atleast Change the Title';
            }

            if($data['body'] == $this->postModel->findPostById($id)->body)
            {
                $data['bodyError'] = 'Atleast Change the Body';
            }

            if(empty($data['titleError']) && empty($data['bodyError']))
            {
                if($this->postModel->updatePost($data))
                {
                    header('Location:' .URLROOT. "/posts");
                }
                else{
                    echo "error";
                    //die('Something Went Wrong Please Try Again... ');
                }
            }
            else{
                $this->view('posts/update',$data);
            }
        }
        $this->view('posts/update', $data);
    }

    public function delete($id)
    {
        $post = $this->postModel->findPostById($id);
        if(!isLoggedIn())
        {
            header('Location:' . URLROOT . "/posts");
        }
        elseif ($post->user_id != $_SESSION['user_id'])
        {
            header('Location:' . URLROOT . "/posts");
        }

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => '',
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            if($this->postModel->deletePost($id))
            {
                header('Location:' . URLROOT . '/posts');
            }
            else{
                die("Something want Wrong");
            }
        }
    }

    public function postdata($id)
    {
        $post = $this->postModel->findPostById($id);
        $this->view('posts/viewpost', $post);
    }

    public function myblog()
    {
        $userid = $_SESSION['user_id'];

        $user_blog = $this->postModel->findUserBlog($userid);
        //var_dump($user_blog);

        $this->view('posts/myblog',$user_blog);
    }
}
