<?php
 class Main extends MY_Controller
 {
 	 public function index()
   
 	 {

      $this->load->view('login');

     } 
  public function addman()
  {
    $this->load->view('admin/operation_Add/add_manger');
  }
     public function Admin()
     {
     	$this->load->view('admin/Alogin');
     }

     public function director()
     {
        $this->load->view('directors/dlogin');
     }

     public function manger()
     {
        $this->load->view('Manger/mlogin');
     }

     public function supplier()
     {
        $this->load->view('supplier/slogin');
     }

     public function sregister()
     {
        $this->load->view('Manger/sregister');
     }


     public function Attendance()
     {
        $this->load->view('Manger/Attendance');

     }
     public function Expenses()
     {
         $this->load->view('Manger/expenses');
     }
     public function Admin_logout()
     {

       $this->session->unset_userdata('id');
          return redirect('Main/Admin_loginform');
     }
      public function vendor()
      {
          $this->load->view('vendor/vlogin');
      }
      public function vregister()
      {
        $this->load->view('Manger/vregister');
      }

     public function adminitem()
     {
        $this->load->library('form_validation');

 $this->form_validation->set_rules('itemnumber','Username','required|alpha');
  $this->form_validation->set_rules('inumber','Username','required|alpha');
   $this->form_validation->set_rules('itemt','Username','required|alpha');
    $this->form_validation->set_rules('unit','Username','required|alpha');
     $this->form_validation->set_rules('itemp','Username','required|alpha');
      $this->form_validation->set_rules('date','Username','required|alpha');
       $this->form_validation->set_rules('name[]','Username','required|alpha');
        $this->form_validation->set_rules('unit[]','Username','required|alpha');

   if($this->form_validation->run()==false)
   {

    $this->load->model('add_model');
    $this->add_model->insertitem();
    return redirect('Main/fectchadmin');
   }
   else
   {
    $this->load->view('admin/itemaster');
   }
   
 }

     public function fectchadmin()
     {
         $this->load->model('add_model');
     $data['fetch']=$this->add_model->fetchget();

     $this->load->view('admin/itemaster',$data);
     }

    public function itemdelete($id)
  {
      $this->load->model('add_model');
      $this->add_model->deleteite($id);
        return redirect('Main/fectchadmin');

  }

 public function admintrn()
 {
     $this->load->library('form_validation');

 $this->form_validation->set_rules('itemnumber','Username','required|alpha');
  $this->form_validation->set_rules('inumber','Username','required|alpha');
   $this->form_validation->set_rules('itemt','Username','required|alpha');
    $this->form_validation->set_rules('unit','Username','required|alpha');
     $this->form_validation->set_rules('itemp','Username','required|alpha');
      $this->form_validation->set_rules('date','Username','required|alpha');
       $this->form_validation->set_rules('name[]','Username','required|alpha');
        $this->form_validation->set_rules('unit[]','Username','required|alpha');

   if($this->form_validation->run()==false)
   {

    $this->load->model('add_model');
    $this->add_model->inserttrn();
    return redirect('Main/trn');
   }
   else
   {
    $this->load->view('admin/transporater');
   }
 }
     public function trn()
     {
         
         $this->load->model('add_model');
     $data['fetch']=$this->add_model->trnn();

     $this->load->view('admin/transporater',$data);
     }
      public function trnsdelete($id)
      {
        $this->load->model('add_model');
        $this->add_model->deletetrn($id);
       return redirect('Main/trn');
      }

















      public function vlogin()
      {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|alpha')    ;
        $this->form_validation->set_rules('password','Pass','required|alpha');

      if($this->form_validation->run());
      {

        $u =$this->input->post('username');
        $p =$this->input->post('password');
        
        $this->load->model('Admin_model');
        $id=$this->Admin_model->vlog($u,$p);
      
             if($id)
               {
                 
                 $this->load->library('session');
                $this->session->set_userdata('id',$id);
                     return redirect('Main/vdashborad');

               }
             else
               {
                  return redirect('Main/vendor');
               }
      
      } 
  }
  public function vdashborad()
  {
    if(!$this->session->userdata('id'))
    {
        return redirect('Main/vlogin');
    }
    $this->load->view('vendor/vdashborad');
  }
  public function vlogout()
  {
    $this->session->unset_userdata('id');
       return  redirect('Main/vendor');
  }

  public function slogin()
  {
    $this->load->library('form_validation');
        $this->form_validation->set_rules('username','Username','required|alpha');
        $this->form_validation->set_rules('password','Pass','required|alpha');

      if($this->form_validation->run());
      {

        $u =$this->input->post('username');
        $p =$this->input->post('password');
        
        $this->load->model('Admin_model');
        $id=$this->Admin_model->slog($u,$p);
      
             if($id)
               {
                 
                 $this->load->library('session');
                $this->session->set_userdata('id',$id);
                     return redirect('Main/sdashborad');

               }
             else
               {
                  return redirect('Main/supplier');
               }
      
      } 
  }

  public function sdashborad()
  {
    if(!$this->session->userdata('id'))
      {
        return redirect('Main/slogin');
      }
      $this->load->view('supplier/sdashborad');

  }

  public function slogout()
  {
    $this->session->unset_userdata('id');
    return redirect('Main/slogin');
  }
   //admin login function database
     public function Admin_loginform()
     {

      $this->load->library('form_validation');
      $this->form_validation->set_rules('username','Username','required|alpha');
      $this->form_validation->set_rules('password','Pass','required|alpha');

      if($this->form_validation->run());
      {

        $u =$this->input->post('username');
        $p =$this->input->post('password');
        
        $this->load->model('Admin_model');
        $id=$this->Admin_model->login_user($u,$p);
      
             if($id)
               {
                 
                 $this->load->library('session');
                $this->session->set_userdata('id',$id);
                     return redirect('Main/dashborad');

               }
             else
               { 
    
                  return redirect('Main/Admin');
               }
      
        
       
    }

  }

     public function dashborad()
     {
         if(!$this->session->userdata('id'))
      {
        return redirect('Main/Admin_loginform');
      }
      $this->load->view('admin/dashborad');

          /*$this->load->view('admin/dashborad');*/
     }

     public function inword()
     {
        $this->load->view('admin/inword');
     }

//directors login in database
     public function director_login()
     {



      $this->load->library('form_validation');
      $this->form_validation->set_rules('username','Username','required|alpha');
      $this->form_validation->set_rules('password','Pass','required|alpha');

      if($this->form_validation->run());
      {

        $u =$this->input->post('username');
        $p =$this->input->post('password');
        
        $this->load->model('Admin_model');
        $id=$this->Admin_model->directorlog($u,$p);
      
             if($id)
               {
                 
                 $this->load->library('session');
                $this->session->set_userdata('id',$id);
                     return redirect('Main/ddashborad');

               }
             else
               {
                  return redirect('Main/director');
               }
      
        
       
    }

  }
  public function dlogout()
  {
    $this->session->unset_userdata('id');
    return redirect('Main/director_login');

  }
  public function ddashborad()
  {
     if(!$this->session->userdata('id'))
      {
        return redirect('Main/director_login');
      }
      $this->load->view('directors/ddashborad');
  }

//manger login in database
    public function manger_login()
    {
     
      
      $this->load->library('form_validation');
      $this->form_validation->set_rules('username','Username','required|alpha');
      $this->form_validation->set_rules('password','Pass','required|alpha');

      if($this->form_validation->run());
      {

        $u =$this->input->post('username');
        $p =$this->input->post('password');
        
        $this->load->model('Admin_model');
        $id=$this->Admin_model->mangerlog($u,$p);
      
             if($id)
               {
                 
                 $this->load->library('session');
                $this->session->set_userdata('id',$id);
                     return redirect('Main/fetchitem');

               }
             else
               {
                  return redirect('Main/manger');
               }
       
    }

    }
      public function mlogout()
      {
        $this->load->library('session');
        $this->session->unset_userdata('id');
        return redirect('Main/manger_login');
      }









    public function dash()
    {
       
     }

     
              
   public function registerv()
   {
      $this->load->model('Admin_model');
      $this->Admin_model->reg();
      $this->load->view('Manger/vregister');
      echo '<script>alert("registeration successfully")</script>';
   }

  public function registers()
  {
    $this->load->model('Admin_model');
    $this->Admin_model->regs();
    $this->load->view('Manger/sregister');
      echo '<script>alert("registeration successfully")</script>';
  }













//fetch data in manger

public function mfetchdata()
{
    $this->load->model('Admin_model');
    $data['fetch']=$this->Admin_model->getdata();

    $this->load->view('admin/manger',$data);


}
//delete data in manger
public function delete($id)
{
    $this->load->model('Admin_model');
    $this->Admin_model->deletemanger($id);
    return redirect('Main/mfetchdata');

}
//fetch data in supplier

public function sfetchdata()
{
    $this->load->model('Admin_model');
    $data['fetch']=$this->Admin_model->getdatasupplier();

    $this->load->view('admin/supplier',$data);
}
//delete data in supplier

public function Sdelete($id)
{
   $this->load->model('Admin_model');
    $this->Admin_model->deletesupplier($id);
    return redirect('Main/sfetchdata');
}

public function Add()
{
    
     $this->load->library('form_validation');
      $this->form_validation->set_rules('username','Username','required|alpha');
      $this->form_validation->set_rules('password','Pass','required|alpha');

    if($this->form_validation->run()==true)
    {

        $this->load->model('Admin_model');
        $this->Admin_model->Addata();
        return redirect('Main/mfetchdata');
    }
    else
    {

    }

}
/*public function mdashborad()
{
    $this->load->view('Manger/fetchmaster');
}*/
        
 public function fetchmaster()
 {
    
   $this->load->library('form_validation');

 $this->form_validation->set_rules('itemnumber','Username','required|alpha');
  $this->form_validation->set_rules('inumber','Username','required|alpha');
   $this->form_validation->set_rules('itemt','Username','required|alpha');
    $this->form_validation->set_rules('unit','Username','required|alpha');
     $this->form_validation->set_rules('itemp','Username','required|alpha');
      $this->form_validation->set_rules('date','Username','required|alpha');
       $this->form_validation->set_rules('name[]','Username','required|alpha');
        $this->form_validation->set_rules('unit[]','Username','required|alpha');

   if($this->form_validation->run()==false)
   {

    $this->load->model('Admin_model');
    $this->Admin_model->insertitem();
    return redirect('Main/fetchitem');
   }
   else
   {
    $this->load->view('Manger/fetchmaster');
   }
   
 }

    public function fetchitem()
  {
     /*if(!$this->session->userdata('id'))
      {
        return redirect('Main/manger_login');
      }
      $this->load->view('Manger/fetchmaster');*/
    
    $this->load->model('Admin_model');

     $data['fetch']=$this->Admin_model->fetchget();

     $this->load->view('Manger/fetchmaster',$data);

  }

public function transporter()
{

   $this->load->library('form_validation');

   $this->form_validation->set_rules('itemnumber','Username','required|alpha');
  $this->form_validation->set_rules('inumber','Username','required|alpha');
   $this->form_validation->set_rules('itemt','Username','required|alpha');
    $this->form_validation->set_rules('unit','Username','required|alpha');
     $this->form_validation->set_rules('itemp','Username','required|alpha');
      $this->form_validation->set_rules('date','Username','required|alpha');
       $this->form_validation->set_rules('name[]','Username','required|alpha');
        $this->form_validation->set_rules('unit[]','Username','required|alpha');

 if($this->form_validation->run()==false)
{

    $this->load->model('Admin_model');
     $this->Admin_model->inserttrn();
    return redirect('Main/trnfetch');
}
else
{
 $this->load->view('Manger/transporter');
}

}
/*public function trn()
{
   $this->load->view('Manger/transporter'); 
}*/
public function trnfetch()
{
    $this->load->model('Admin_model');
     $data['fetch']=$this->Admin_model->transporter();

     $this->load->view('Manger/transporter',$data);
}
  public function employeewatch()
  {
    $this->load->view('Manger/employee');
  }
 public function employee()
 {
    $this->load->model('add_model');
    $this->add_model->emp();
    return redirect('Main/fetchemp');


 }
 public function  fetchemp()
 {
    $this->load->model('add_model');
    $data['fetch']=$this->add_model->empdata();

    $this->load->view('Manger/employee',$data);
 }
 public function Attend()
 {
    $this->load->model('add_model');
    $this->add_model->att();
     return redirect('Main/Attendance');
 }
 public function emp()
 {
    $kay=$this->input->post('Name');
    $data-array();
    $this->load->model('add_model');
    $data['result']=$this->add_model->getname($kay);

    $this->load->view('Manger/Attendance');
 }

    }
 
?>
