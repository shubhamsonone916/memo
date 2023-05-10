
<?php
   class Admin_model extends CI_Model
   {


   	 public function register_user()
   	 {

            $data = array(
            	'name' =>$this->input->post('name'),
            	'email' =>$this->input->post('email'),
            	'username' =>$this->input->post('username'),
            	'password' =>$this->input->post('password'),
              );
          if($data)
            {
            	$this->db->insert('login',$data);

            }
            else
            {
            	//echo "not inserted data";
            }
            
   	 }

   	 public function login_user($username,$password)
   	 {
       
          $q =$this->db->where(['username'=>$username,'password'=>$password])
                                            ->get('login');
                          
                           if($q->num_rows())
                           {
                              return $q->row()->id;
                           }
                           else
                           {
                              return False;
                           }

     $uname=$this->input->post('username');
    $upass=$this->input->post('password');

   	 	$this->db->where('username',$uname);
   	 	$this->db->where('password',$upass);
   	 	
   	 	$query=$this->db->get('login');
   	 	 $find_user=$query->num_rows($query);


       

   	 	 if($find_user>0)
   	 	 {
   	 	   
   	 	 	redirect('Admin/dash');
   	 	 	$this->session->set_flashdata('item','succefully');
   	 	 }
   	 	 else
   	 	 {
   	 	 	
   	 	 	redirect('Admin/');
   	 	 }

 
   	 }

    public function directorlog($username,$password)
    {

          $q =$this->db->where(['username'=>$username,'password'=>$password])
                                          ->get('directors');

                           if($q->num_rows())
                           {
                              return $q->row()->id;
                           }
                           else
                           {
                              return False;
                           }
   	
   }
   public function mangerlog($username,$password)
   {

          $q =$this->db->where(['username'=>$username,'password'=>$password])
                                          ->get('manger');
                           
                           if($q->num_rows())
                           {
                              return $q->row()->id;
                           }
                           else
                           {
                              return False;
                           }
   }
   public function supplierlog($username,$password)
   {
       $q =$this->db->where(['username'=>$username,'password'=>$password])
                                          ->get('supplier');

                           if($q->num_rows())
                           {
                              return $q->row()->id;
                           }
                           else
                           {
                              return False;
                           }
   }
   //fetch data  model in Manger
   public function getdata()
   {
      
      $this->db->select('*');
      $t=$this->db->get('manger');

       return $t;


   }
   //delete query in manger
   public function deletemanger($id)
   {
     return $this->db->delete('manger',['id'=>$id]);

      
   }
//fetch data  model in supplier  
   public function getdatasupplier()
   {

      $this->db->select('*');
      $t=$this->db->get('supplier');

       return $t;

   }
//delete query in supplier

   public function deletesupplier($id)
   {
      $this->db->delete('supplier',['id'=>$id]);

   }
public function Addata()
{
   $data = array('username'=> $this->input->post('username'),
                 'password'=>$this->input->post('password'));

    
    if($data)
            {
               $this->db->insert('manger',$data);

            }
            else
            {
               //echo "not inserted data";
            }
            

}
public function insertitem()
{
   $data= array('itemnumber'=>$this->input->post('item'),
                 'itemname'=>$this->input->post('itemname'),
                  'itemtype'=>$this->input->post('itemt'),
                  'unit'=>$this->input->post('typeunit'),
                  'price'=>$this->input->post('price'),
                  'date'=>$this->input->post('date'),
                  'name'=>$this->input->post('name'),
                 'unt'=>$this->input->post('unit'));

     $this->db->insert('item_master', $data);
}

public function fetchget()
{
   $this->db->select('*');
   $t=$this->db->get('item_master');
   return $t;
}
public function inserttrn()
{
   $data= array('Name' => $this->input->post('Name'),
                       'Address' => $this->input->post('Address'),
                       'Email_Id' => $this->input->post('Email_Id'),
                       'Contact' => $this->input->post('Contact'),
                       'Trans_Code' => $this->input->post('Trans_Code'),
                      'Date' => $this->input->post('Date'),
                     'Vehicle_No' => $this->input->post('Vehicle_No'),
                     'Passing' => $this->input->post('Passing'),
                     'Driving_Lic' => $this->input->post('Driving_Lic'));

               $this->db->insert('transport',$data);
}
public function transporter()
{ 
   $this->db->select('*');
   $t =$this->db->get('transport');

   return $t;

}























  public function reg()
  {
        $data= array('Name'=>$this->input->post('Name'),
                     'Address'=>$this->input->post('Address'),
                     'Email_id'=>$this->input->post('Email_Id'),
                     'Contact'=>$this->input->post('Contact'),
                     'Website'=>$this->input->post('website'),
                     'Director'=>$this->input->post('director'),
                     'Transportar_Name '=>$this->input->post('trasportar'),
                     'Vendor_code'=>$this->input->post('Code_no'),
                     'GST'=>$this->input->post('gst'),
                     'PAN_NO'=>$this->input->post('pan_No'),
                     'TAN_NO'=>$this->input->post('tan_No'),
                     'username'=>$this->input->post('username'),
                     'password'=>$this->input->post('password'),
                     'Transportar_Contact'=>$this->input->post('tContact'),);

        $this->db->insert('vregister',$data);

  }
      public function vlog($username,$password)
      {
          $q =$this->db->where(['username'=>$username,'password'=>$password])
                                            ->get('vregister');
                           

                           if($q->num_rows())
                           {
                              return $q->row()->id;
                           }
                           else
                           {
                              return False;
                           }
      }


  public function slog($username,$password)
  {
    $q =$this->db->where(['username'=>$username,'password'=>$password])
                                            ->get('sregister');
                           

                           if($q->num_rows())
                           {
                              return $q->row()->id;
                           }
                           else
                           {
                              return False;
                           }
  }












  public function regs()
  {
   $data= array(     'Name'=>$this->input->post('Name'),
                     'Address'=>$this->input->post('Address'),
                     'Email_id'=>$this->input->post('Email_Id'),
                     'Contact'=>$this->input->post('Contact'),
                     'Website'=>$this->input->post('website'),
                     'Director'=>$this->input->post('director'),
                     'Transportar_Name '=>$this->input->post('trasportar'),
                     'Vendor_code'=>$this->input->post('Code_no'),
                     'GST'=>$this->input->post('gst'),
                     'PAN_NO'=>$this->input->post('pan_No'),
                     'TAN_NO'=>$this->input->post('tan_No'),
                     'username'=>$this->input->post('username'),
                     'password'=>$this->input->post('password'),
                     'Transportar_Contact'=>$this->input->post('tContact'),);
                      
        $this->db->insert('sregister',$data);

  }

}
?> 