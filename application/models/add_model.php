<?php
  class add_model extends CI_Model
  {
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

public function deleteite($id)
{
  return $this->db->delete('item_master',['id'=>$id]);
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

public function trnn()
{
   $this->db->select('*');
   $t =$this->db->get('transport');

   return $t;

}
public function deletetrn($id)
{
    return $this->db->delete('transport',['id'=>$id]);
}
 public function emp()
 {
  
  $data= array('Name' => $this->input->post('Name'),
                       'Address' => $this->input->post('Address'),
                       'Mobile_No' => $this->input->post('Mobile_No'),
                       'Aadhar_No' => $this->input->post('Aadhar_No'),
                       'Age' => $this->input->post('Age'),
                      'Gender' => $this->input->post('Gender'),
                     'D_O_B' => $this->input->post('Date_of_Birth'),
                     'joining_date' => $this->input->post('Date_of_Joining'),
                     'Pan_No' => $this->input->post('Pan_Card_No'));

                    $this->db->insert('emp_detail',$data);
                 
 }
public function empdata()
{
  $this->db->select('*');
         $s=$this->db->get('emp_detail');
         return $s;
}
  public function att()
  {
    $data = array('employee_name'=>$this->input->post('Name'), 
                  'date'=>$this->input->post('date'),
                  'in_time'=>$this->input->post('intime'),
                  'out_time'=>$this->input->post('outtime'));

      $this->db->insert('attendance',$data);
  }                

}
?>