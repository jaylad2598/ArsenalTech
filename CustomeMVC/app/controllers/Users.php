<?php
    class Users extends Controller{
        public function __construct()
        {
            $this->userModel = $this->model('User');
        }
        public function register()
        {
            $data = [
                'username' => '',
                'email' => '',
                'password' => '',
                'contact' => '',
                'createdate' => '',
                'emailError' => '',
                'passwordError' => ''
            ];

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

                $data = [
                    'username' => trim($_POST['username']),
                    'email' => trim($_POST['email']),
                    'password' => trim($_POST['password']),
                    'contact' => trim($_POST['contact']),
                    'createdate' => date('Y-m-d'),
                    'emailError' => '',
                    'passwordError' => '',
                    'confirmPasswordError' => ''
                ];

                $nameValidation = "/^[a-zA-Z0-9]*$/";

                if(empty($data['username']))
                {
                    $data['usernameError'] = "Please Enter username";
                }
                elseif (!preg_match($nameValidation,$data['username']))
                {
                    $data['usernameError'] = 'Name can only contain letter and numbers.';
                }

                if(empty($data['email']))
                {
                    $data['emailError'] = "Please Enter Email";
                }
                else{
                    if($this->userModel->findUserByEmail($data['email']))
                    {
                        $data['emailError'] = 'Email Already Exist..';
                    }
                }

                if(empty($data['password']))
                {
                    $data['passwordError'] = 'Please Enter Password';
                }
                elseif (!strlen($data['password'] > 6))
                {
                    $data['passwordError'] = 'password must be atleast 6 character';
                }

                // make sure that errors are empty
                if(empty($data['usernameError']) && empty($data['emailError']) && empty($data['passwordError']))
                {
                    $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);

                    //register user form model function
                    if($this->userModel->register($data))
                    {
                        header('location:'.URLROOT.'/users/login');
                    }
                    else{
                        die('Something went wrong');
                    }
                }
            }
            $this->view('users/register',$data);
        }
        public function login() {
            $data = [
                'title' => 'Login page',
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
            //Check for post
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                //Sanitize post data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $data = [
                    'username' => trim($_POST['username']),
                    'password' => trim($_POST['password']),
                    'usernameError' => '',
                    'passwordError' => '',
                ];
                //Validate username
                if (empty($data['username'])) {
                    $data['usernameError'] = 'Please enter a username.';
                }
                //Validate password
                if (empty($data['password'])) {
                    $data['passwordError'] = 'Please enter a password.';
                }
                //Check if all errors are empty
                if (empty($data['usernameError']) && empty($data['passwordError'])) {
                    $loggedInUser = $this->userModel->login($data['username'], $data['password']);

                    if ($loggedInUser) {
                        $this->createUserSession($loggedInUser);
                    } else {
                        $data['passwordError'] = 'Password or username is incorrect. Please try again.';

                        $this->view('users/login', $data);
                    }
                }
            } else {
                $data = [
                    'username' => '',
                    'password' => '',
                    'usernameError' => '',
                    'passwordError' => ''
                ];
            }
            $this->view('users/login', $data);
        }
        public function createUserSession($user) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['username'] = $user->username;
            $_SESSION['email'] = $user->email;
            header('location:' . URLROOT . '/pages/index');
        }
        public function logout() {
            unset($_SESSION['user_id']);
            unset($_SESSION['username']);
            unset($_SESSION['email']);
            header('location:' . URLROOT . '/users/login');
        }
    }