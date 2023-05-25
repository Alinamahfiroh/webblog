  <?php

  class User extends MY_Controller{
    public function profile(){


        $notif = null;
        $User = \Orm\User::first();

        if($this->input->post()){
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            if($username == '' ||  $password == ''){
                $notif = "Username / Password tidak boleh kosong";
            }else{
                $User->username = $username;
                $User->password = $password;
                $User->save();

                $notif = "Username / Password berhasil diganti";
            }
        }

        view('backend.User.profile', ['user' => $User, 'notif' => $notif]);
    }
  }