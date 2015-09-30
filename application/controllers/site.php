<?php

class Site extends CI_Controller{
    
   
        public function __construct(){
            parent::__construct();
            // Your own constructor code
             date_default_timezone_set('Asia/Manila');
             $this->load->model('site_model');
        }

        
        public function index(){
            
            $data['main_content'] = 'index';
            $this->load->view('includes/template', $data);
            
	}
        
        
        public function fix_30daymenu(){
            
            $data['main_content'] = 'fix_30daymenu';
            $this->load->view('includes/template', $data);
            
	}
        
        public function recipes(){
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'recipes';
            $this->load->view('includes/template', $data);
            
	}
        
        public function key_ingredient(){
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'key_ingredient';
            $this->load->view('includes/template', $data);
            
	}

        
        public function type_of_dish(){
            
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'type_of_dish';
            $this->load->view('includes/template', $data);
            
        }
        
        public function calories_meter(){
            
            $data['main_content'] = 'calories_meter';
            $this->load->view('includes/template', $data);
            
        }
        public function bmi_calculator(){
            
            if(isset($_POST['compute'])){
                
                $h = $this->input->post('cent');
                $k = $this->input->post('kilo');
                $data['result'] = $k /(($h/100) * ($h/100));
                

                           
            }
            $data['main_content'] = 'bmi_calculator';
            $this->load->view('includes/template', $data);
            
        }
        
        public function gussan_easy_recipes(){

            
            $data['main_content'] = 'gussan_easy_recipes';
            $this->load->view('includes/template', $data);
            
        }
        
        public function add_menu(){
            
            if(isset($_POST['addmenu'])){
                    $data = array(
                            'recipe_plan_id' => $this->input->post('menuid'),
                            'recipe_plan_name' => $this->input->post('menuname'),
                            'date_created' => date('Y-m-d')
                           );

                    $this->db->insert('recipe_plan', $data); 
                    
                    $data1 = array(
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 1) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 2) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 3) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 4) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 5) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 6) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 7) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 8) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 9) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 10) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 11) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 12) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 13) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 14) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 15) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 16) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 17) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 18) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 19) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 20) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 21) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 22) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 23) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 24) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 25) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 26) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 27) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 28) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 29) ,
                                array('recipe_plan_id' => $this->input->post('menuid'), 'recipe_plan_counter' => 30) 
                           );

                    $this->db->insert_batch('plan', $data1); 
                    
                    redirect('site/create_30daymenu');
            }
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->add_menu();
            $data['add_menu'] = $query_recipes->row();
            
            $data['main_content'] = 'add_menu';
            $this->load->view('includes/template', $data);
            
        }
        
        public function create_30daymenu(){
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->own_menu_list();
            $data['own_menu_list'] = $query_recipes->result();
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->todays_menu();
            $data['row_create_30dayplan'] = $query_recipes->row();
            
            
            $data['main_content'] = 'create_30daymenu';
            $this->load->view('includes/template', $data);
            
        }
                
        public function video($recipe_plan_id = 'null'){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            
             $data['main_content'] = 'video';
            $this->load->view('includes/template_print', $data);
            
        }
        
        public function create_30daymenu_print($recipe_plan_id = 'null'){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->own_menu_list();
            $data['own_menu_list'] = $query_recipes->result();
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->create_30dayplan($recipe_plan_id);
            $data['create_30dayplan'] = $query_recipes->result();
            
            $data['main_content'] = 'create_30daymenu_print';
            $this->load->view('includes/template_print', $data);
            
        }
        
        public function create_30daymenu_review($recipe_plan_id = 'null'){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->own_menu_list();
            $data['own_menu_list'] = $query_recipes->result();
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->create_30dayplan($recipe_plan_id);
            $data['create_30dayplan'] = $query_recipes->result();
            
            $data['main_content'] = 'create_30daymenu_review';
            $this->load->view('includes/template_print', $data);
            
        }
        
        public function create_30daymenu_default($recipe_plan_id = 'null'){
     
            //$data['recipe_plan_id'] = $recipe_plan_id;
            $data['recipe_plan_id'] = $this->input->post('recipe_plan_id');
            $recipe_plan_id = $this->input->post('recipe_plan_id');
            
            $this->db->empty_table('plan_default'); 
            
            $this->db->select('*');
            $this->db->from('plan');
            $this->db->where('recipe_plan_id', $recipe_plan_id);
            $query = $this->db->get();
            $query = $query->result();
            
            foreach($query as $row) { // loop over results
                $this->db->insert('plan_default', $row); // insert each row to another table
            }

            //$currdate = date('Y-m-d');
            $currdate =  $this->input->post('year').'-'.$this->input->post('month').'-'.$this->input->post('day');

            for($i = 0; $i <= 29; $i++){
                $date = date('Y-m-d',strtotime('+'.$i.' day' .$currdate));
                $data = array( 'recipe_plan_date' => $date);
                
                $this->db->where('recipe_plan_counter', $i + 1);
                $this->db->update('plan_default', $data); 
            }    
      
            
            redirect('site/create_30daymenu/');
            
        }
        
        public function create_30daymenu_delete($recipe_plan_id = 'null'){
     
            $data['recipe_plan_id'] = $recipe_plan_id;

            $tables = array('plan', 'recipe_plan');
            $this->db->where('recipe_plan_id', $recipe_plan_id);
            $this->db->delete($tables);
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->create_30dayplan($recipe_plan_id);
            $data['create_30dayplan'] = $query_recipes->result();
            
            redirect('site/create_30daymenu/');
            
        }
        
        
        public function update_30daymenu($recipe_plan_id = 'null', $plan_id  = 'null', $menuid = 'null', $identifier = 'null'){
            
            $this->load->model('site_model');
                if(!empty($menuid) && ($identifier == '1')){
                    $data = array(
                                    'breakfast_recipe_id1' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($menuid) && ($identifier == '2')){
                    $data = array(
                                    'breakfast_recipe_id2' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($menuid) && ($identifier == '3')){
                    $data = array(
                                    'lunch_recipe_id1' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($menuid) && ($identifier == '4')){
                    $data = array(
                                    'lunch_recipe_id2' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($menuid) && ($identifier == '5')){
                    $data = array(
                                    'lunch_recipe_id3' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($menuid) && ($identifier == '6')){
                    $data = array(
                                    'dinner_recipe_id1' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                if(!empty($menuid) && ($identifier == '7')){
                    $data = array(
                                    'dinner_recipe_id2' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                if(!empty($menuid) && ($identifier == '8')){
                    $data = array(
                                    'dinner_recipe_id3' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                if(!empty($menuid) && ($identifier == '9')){
                    $data = array(
                                    'snack_recipe_id1' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                if(!empty($menuid) && ($identifier == '10')){
                    $data = array(
                                    'snack_recipe_id2' => $menuid 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
    
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            $data['menuid'] = $menuid;
            $data['identifier'] = $identifier;    
                
            $this->load->model('site_model');
            $query_recipes = $this->site_model->create_30dayplan($recipe_plan_id);
            $data['create_30dayplan'] = $query_recipes->result();
            
            $data['main_content'] = 'update_30daymenu';
            $this->load->view('includes/template', $data);
            
        }
        
    
        public function add_breakfast1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_breakfast();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_breakfast1';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_breakfast1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'breakfast_recipe_id1' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_breakfast2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_breakfast();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_breakfast2';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_breakfast2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'breakfast_recipe_id2' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        
        public function add_lunch1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_lunch();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_lunch1';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_lunch1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'lunch_recipe_id1' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_lunch2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_lunch();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_lunch2';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_lunch2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'lunch_recipe_id2' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_lunch3($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_lunch();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_lunch3';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_lunch3($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'lunch_recipe_id3' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_dinner1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_lunch();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_dinner1';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_dinner1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'dinner_recipe_id1' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_dinner2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_lunch();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_dinner2';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_dinner2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'dinner_recipe_id2' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_dinner3($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_lunch();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_dinner3';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_dinner3($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'dinner_recipe_id3' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_snacks1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_snacks();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_snacks1';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_snacks1($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'snack_recipe_id1' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        
        public function add_snacks2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list_snacks();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_snacks2';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_snacks2($recipe_plan_id, $plan_id){
            
            $data['recipe_plan_id'] = $recipe_plan_id;
            $data['plan_id'] = $plan_id;
            
            $data = array(
                            'snack_recipe_id2' => '' 
                         );
            $this->db->where('id', $plan_id);
            $this->db->update('plan', $data); 
            
            redirect('site/update_30daymenu/'.$recipe_plan_id);
            
        }
        

        
        
        
        
        
        
        
        
        
        
        
        
        
        public function create_30day($plan_id = 'null', $breakfast_id = 'null', $identifier = 'null'){
            
            
                if(!empty($breakfast_id) && ($identifier == '1')){
                    $data = array(
                                    'breakfast_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
            
                if(!empty($breakfast_id) && ($identifier == '2')){
                    $data = array(
                                    'lunch_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($breakfast_id) && ($identifier == '3')){
                    $data = array(
                                    'dinner_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                
                $currdate = $this->input->post('date1');
             
                $date_1  = date('Y-m-d',strtotime('+1 day' .$currdate)); 
                $date_2  = date('Y-m-d',strtotime('+2 day' .$currdate)); 
                $date_3  = date('Y-m-d',strtotime('+3 day' .$currdate)); 
                $date_4  = date('Y-m-d',strtotime('+4 day' .$currdate)); 
                $date_5  = date('Y-m-d',strtotime('+5 day' .$currdate)); 
                $date_6  = date('Y-m-d',strtotime('+6 day' .$currdate)); 
                $date_7  = date('Y-m-d',strtotime('+7 day' .$currdate));
                $date_8  = date('Y-m-d',strtotime('+8 day' .$currdate));
                $date_9  = date('Y-m-d',strtotime('+9 day' .$currdate));
                $date_10 = date('Y-m-d',strtotime('+10 day' .$currdate));
                $date_11 = date('Y-m-d',strtotime('+11 day' .$currdate));
                $date_12 = date('Y-m-d',strtotime('+12 day' .$currdate));
                $date_13 = date('Y-m-d',strtotime('+13 day' .$currdate));
                $date_14 = date('Y-m-d',strtotime('+14 day' .$currdate));
                $date_15 = date('Y-m-d',strtotime('+15 day' .$currdate));
                $date_16 = date('Y-m-d',strtotime('+16 day' .$currdate)); 
                $date_17 = date('Y-m-d',strtotime('+17 day' .$currdate)); 
                $date_18 = date('Y-m-d',strtotime('+18 day' .$currdate)); 
                $date_19 = date('Y-m-d',strtotime('+19 day' .$currdate)); 
                $date_20 = date('Y-m-d',strtotime('+20 day' .$currdate)); 
                $date_21 = date('Y-m-d',strtotime('+21 day' .$currdate)); 
                $date_22 = date('Y-m-d',strtotime('+22 day' .$currdate));
                $date_23 = date('Y-m-d',strtotime('+23 day' .$currdate));
                $date_24 = date('Y-m-d',strtotime('+24 day' .$currdate));
                $date_25 = date('Y-m-d',strtotime('+25 day' .$currdate));
                $date_26 = date('Y-m-d',strtotime('+26 day' .$currdate));
                $date_27 = date('Y-m-d',strtotime('+27 day' .$currdate));
                $date_28 = date('Y-m-d',strtotime('+28 day' .$currdate));
                $date_29 = date('Y-m-d',strtotime('+29 day' .$currdate));
                //$date_30 = date('Y-m-d',strtotime('+30 day' .$currdate));
             
            if(isset($_POST['date1'])){
                    $data = array(
                                array('date' => $currdate) ,
                                array('date' => $date_1) ,
                                array('date' => $date_2) ,
                                array('date' => $date_3) ,
                                array('date' => $date_4) ,
                                array('date' => $date_5) ,
                                array('date' => $date_6) ,
                                array('date' => $date_7) ,
                                array('date' => $date_8) ,
                                array('date' => $date_9) ,
                                array('date' => $date_10) ,
                                array('date' => $date_11) ,
                                array('date' => $date_12) ,
                                array('date' => $date_13) ,
                                array('date' => $date_14) ,
                                array('date' => $date_15) ,
                                array('date' => $date_16) ,
                                array('date' => $date_17) ,
                                array('date' => $date_18) ,
                                array('date' => $date_19) ,
                                array('date' => $date_20) ,
                                array('date' => $date_21) ,
                                array('date' => $date_22) ,
                                array('date' => $date_23) ,
                                array('date' => $date_24) ,
                                array('date' => $date_25) ,
                                array('date' => $date_26) ,
                                array('date' => $date_27) ,
                                array('date' => $date_28) ,
                                array('date' => $date_29) 
                           );

                    $this->db->insert_batch('plan', $data); 
                    redirect('site/create_30day');
            }
            
            $this->load->model('site_model');
            $query_create_30 = $this->site_model->create_30dayplan();
            $data['create_30'] = $query_create_30->result();
            
            $data['main_content'] = 'create_30day';
            $this->load->view('includes/template', $data);
            
        }
        

        public function add_lunch($plan_id){
            
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_lunch';
            $this->load->view('includes/template', $data);
            
        }
        
        public function add_dinner($plan_id){
            
            $data['plan_id'] = $plan_id;
            
            $this->load->model('site_model');
            $query_recipes = $this->site_model->recipes_list();
            $data['recipes_list'] = $query_recipes->result();
            
            $data['main_content'] = 'add_dinner';
            $this->load->view('includes/template', $data);
            
        }
        
        public function delete_menu($plan_id){
            
            $this->db->empty_table('plan'); 
            redirect('site/create_30day');
            
        }
        
        
        
         public function todays_menu($plan_id = 'null', $breakfast_id = 'null', $identifier = 'null'){
            
            
                if(!empty($breakfast_id) && ($identifier == '1')){
                    $data = array(
                                    'breakfast_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
            
                if(!empty($breakfast_id) && ($identifier == '2')){
                    $data = array(
                                    'lunch_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($breakfast_id) && ($identifier == '3')){
                    $data = array(
                                    'dinner_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                
                $currdate = $this->input->post('date1');
             
                $date_1  = date('Y-m-d',strtotime('+1 day' .$currdate)); 
                $date_2  = date('Y-m-d',strtotime('+2 day' .$currdate)); 
                $date_3  = date('Y-m-d',strtotime('+3 day' .$currdate)); 
                $date_4  = date('Y-m-d',strtotime('+4 day' .$currdate)); 
                $date_5  = date('Y-m-d',strtotime('+5 day' .$currdate)); 
                $date_6  = date('Y-m-d',strtotime('+6 day' .$currdate)); 
                $date_7  = date('Y-m-d',strtotime('+7 day' .$currdate));
                $date_8  = date('Y-m-d',strtotime('+8 day' .$currdate));
                $date_9  = date('Y-m-d',strtotime('+9 day' .$currdate));
                $date_10 = date('Y-m-d',strtotime('+10 day' .$currdate));
                $date_11 = date('Y-m-d',strtotime('+11 day' .$currdate));
                $date_12 = date('Y-m-d',strtotime('+12 day' .$currdate));
                $date_13 = date('Y-m-d',strtotime('+13 day' .$currdate));
                $date_14 = date('Y-m-d',strtotime('+14 day' .$currdate));
                $date_15 = date('Y-m-d',strtotime('+15 day' .$currdate));
                $date_16 = date('Y-m-d',strtotime('+16 day' .$currdate)); 
                $date_17 = date('Y-m-d',strtotime('+17 day' .$currdate)); 
                $date_18 = date('Y-m-d',strtotime('+18 day' .$currdate)); 
                $date_19 = date('Y-m-d',strtotime('+19 day' .$currdate)); 
                $date_20 = date('Y-m-d',strtotime('+20 day' .$currdate)); 
                $date_21 = date('Y-m-d',strtotime('+21 day' .$currdate)); 
                $date_22 = date('Y-m-d',strtotime('+22 day' .$currdate));
                $date_23 = date('Y-m-d',strtotime('+23 day' .$currdate));
                $date_24 = date('Y-m-d',strtotime('+24 day' .$currdate));
                $date_25 = date('Y-m-d',strtotime('+25 day' .$currdate));
                $date_26 = date('Y-m-d',strtotime('+26 day' .$currdate));
                $date_27 = date('Y-m-d',strtotime('+27 day' .$currdate));
                $date_28 = date('Y-m-d',strtotime('+28 day' .$currdate));
                $date_29 = date('Y-m-d',strtotime('+29 day' .$currdate));
                //$date_30 = date('Y-m-d',strtotime('+30 day' .$currdate));
             
            if(isset($_POST['date1'])){
                    $data = array(
                                array('date' => $currdate) ,
                                array('date' => $date_1) ,
                                array('date' => $date_2) ,
                                array('date' => $date_3) ,
                                array('date' => $date_4) ,
                                array('date' => $date_5) ,
                                array('date' => $date_6) ,
                                array('date' => $date_7) ,
                                array('date' => $date_8) ,
                                array('date' => $date_9) ,
                                array('date' => $date_10) ,
                                array('date' => $date_11) ,
                                array('date' => $date_12) ,
                                array('date' => $date_13) ,
                                array('date' => $date_14) ,
                                array('date' => $date_15) ,
                                array('date' => $date_16) ,
                                array('date' => $date_17) ,
                                array('date' => $date_18) ,
                                array('date' => $date_19) ,
                                array('date' => $date_20) ,
                                array('date' => $date_21) ,
                                array('date' => $date_22) ,
                                array('date' => $date_23) ,
                                array('date' => $date_24) ,
                                array('date' => $date_25) ,
                                array('date' => $date_26) ,
                                array('date' => $date_27) ,
                                array('date' => $date_28) ,
                                array('date' => $date_29) 
                           );

                    $this->db->insert_batch('plan', $data); 
                    redirect('site/create_30day');
            }
            
            $this->load->model('site_model');
            $query_create_30 = $this->site_model->create_30dayplan();
            $data['create_30'] = $query_create_30->result();
            
            $data['main_content'] = 'todays_menu';
            $this->load->view('includes/template', $data);
            
        }
        
        
        
        
        
        
        
        public function print_menu($plan_id = 'null', $breakfast_id = 'null', $identifier = 'null'){
            
            
                if(!empty($breakfast_id) && ($identifier == '1')){
                    $data = array(
                                    'breakfast_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
            
                if(!empty($breakfast_id) && ($identifier == '2')){
                    $data = array(
                                    'lunch_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                if(!empty($breakfast_id) && ($identifier == '3')){
                    $data = array(
                                    'dinner_recipe_id' => $breakfast_id 
                                 );
                    $this->db->where('id', $plan_id);
                    $this->db->update('plan', $data); 
                }
                
                
                $currdate = $this->input->post('date1');
             
                $date_1  = date('Y-m-d',strtotime('+1 day' .$currdate)); 
                $date_2  = date('Y-m-d',strtotime('+2 day' .$currdate)); 
                $date_3  = date('Y-m-d',strtotime('+3 day' .$currdate)); 
                $date_4  = date('Y-m-d',strtotime('+4 day' .$currdate)); 
                $date_5  = date('Y-m-d',strtotime('+5 day' .$currdate)); 
                $date_6  = date('Y-m-d',strtotime('+6 day' .$currdate)); 
                $date_7  = date('Y-m-d',strtotime('+7 day' .$currdate));
                $date_8  = date('Y-m-d',strtotime('+8 day' .$currdate));
                $date_9  = date('Y-m-d',strtotime('+9 day' .$currdate));
                $date_10 = date('Y-m-d',strtotime('+10 day' .$currdate));
                $date_11 = date('Y-m-d',strtotime('+11 day' .$currdate));
                $date_12 = date('Y-m-d',strtotime('+12 day' .$currdate));
                $date_13 = date('Y-m-d',strtotime('+13 day' .$currdate));
                $date_14 = date('Y-m-d',strtotime('+14 day' .$currdate));
                $date_15 = date('Y-m-d',strtotime('+15 day' .$currdate));
                $date_16 = date('Y-m-d',strtotime('+16 day' .$currdate)); 
                $date_17 = date('Y-m-d',strtotime('+17 day' .$currdate)); 
                $date_18 = date('Y-m-d',strtotime('+18 day' .$currdate)); 
                $date_19 = date('Y-m-d',strtotime('+19 day' .$currdate)); 
                $date_20 = date('Y-m-d',strtotime('+20 day' .$currdate)); 
                $date_21 = date('Y-m-d',strtotime('+21 day' .$currdate)); 
                $date_22 = date('Y-m-d',strtotime('+22 day' .$currdate));
                $date_23 = date('Y-m-d',strtotime('+23 day' .$currdate));
                $date_24 = date('Y-m-d',strtotime('+24 day' .$currdate));
                $date_25 = date('Y-m-d',strtotime('+25 day' .$currdate));
                $date_26 = date('Y-m-d',strtotime('+26 day' .$currdate));
                $date_27 = date('Y-m-d',strtotime('+27 day' .$currdate));
                $date_28 = date('Y-m-d',strtotime('+28 day' .$currdate));
                $date_29 = date('Y-m-d',strtotime('+29 day' .$currdate));
                //$date_30 = date('Y-m-d',strtotime('+30 day' .$currdate));
             
            if(isset($_POST['date1'])){
                    $data = array(
                                array('date' => $currdate) ,
                                array('date' => $date_1) ,
                                array('date' => $date_2) ,
                                array('date' => $date_3) ,
                                array('date' => $date_4) ,
                                array('date' => $date_5) ,
                                array('date' => $date_6) ,
                                array('date' => $date_7) ,
                                array('date' => $date_8) ,
                                array('date' => $date_9) ,
                                array('date' => $date_10) ,
                                array('date' => $date_11) ,
                                array('date' => $date_12) ,
                                array('date' => $date_13) ,
                                array('date' => $date_14) ,
                                array('date' => $date_15) ,
                                array('date' => $date_16) ,
                                array('date' => $date_17) ,
                                array('date' => $date_18) ,
                                array('date' => $date_19) ,
                                array('date' => $date_20) ,
                                array('date' => $date_21) ,
                                array('date' => $date_22) ,
                                array('date' => $date_23) ,
                                array('date' => $date_24) ,
                                array('date' => $date_25) ,
                                array('date' => $date_26) ,
                                array('date' => $date_27) ,
                                array('date' => $date_28) ,
                                array('date' => $date_29) 
                           );

                    $this->db->insert_batch('plan', $data); 
                    redirect('site/create_30day');
            }
            
            $this->load->model('site_model');
            $query_create_30 = $this->site_model->create_30dayplan();
            $data['create_30'] = $query_create_30->result();
            
            $data['main_content'] = 'print_menu';
            $this->load->view('includes/template', $data);
            
        }
        
        
        
        public function sample(){
            
            $data['main_content'] = 'sample';
            $this->load->view('includes/template_no_footer', $data);
            
        }
        
        
        
        
}