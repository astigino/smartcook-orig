<?php


class Site_model extends CI_Model{
    
    public function __construct(){
        parent::__construct();
    }


    public function recipes_list(){

        
           if($this->input->post('keyword')){
                $this->db->like($this->input->post('cat_keyword'), $this->input->post('keyword'), 'both');
           }
        
            $this->db->select('*');
            $this->db->from('recipes_list');
            $this->db->order_by('recipes_name','asc');
            $query = $this->db->get();
            return $query;

    }
    
    public function recipes_list_breakfast(){

        
           if($this->input->post('keyword')){
                $this->db->like($this->input->post('cat_keyword'), $this->input->post('keyword'), 'after');
           }
        
            $this->db->select('*');
            $this->db->from('recipes_list');
            $this->db->where('food_type','breakfast');
            $this->db->order_by('recipes_name','asc');
            $query = $this->db->get();
            return $query;

    }
    
    public function recipes_list_lunch(){

        
           if($this->input->post('keyword')){
                $this->db->like($this->input->post('cat_keyword'), $this->input->post('keyword'), 'after');
           }
        
            $this->db->select('*');
            $this->db->from('recipes_list');
            $this->db->where('food_type','lunch');
            $this->db->order_by('recipes_name','asc');
            $query = $this->db->get();
            return $query;

    }
    
    public function recipes_list_snacks(){

        
           if($this->input->post('keyword')){
                $this->db->like($this->input->post('cat_keyword'), $this->input->post('keyword'), 'after');
           }
        
            $this->db->select('*');
            $this->db->from('recipes_list');
            $this->db->where('food_type','lunch');
            $this->db->order_by('recipes_name','asc');
            $query = $this->db->get();
            return $query;

    }
    
    
    public function own_menu_list(){

        
           if($this->input->post('keyword')){
                $this->db->like($this->input->post('cat_keyword'), $this->input->post('keyword'), 'after');
           }
        
            $this->db->select('*');
            $this->db->from('recipe_plan');
            $this->db->order_by('recipe_plan_name','asc');
            $query = $this->db->get();
            return $query;

    }
    
    public function add_menu(){

            $this->db->select('*');
            $this->db->from('recipe_plan');
            $this->db->order_by('recipe_plan_id','desc');
            $query = $this->db->get();
            return $query;

    }
    

    public function create_30dayplan($recipe_plan_id){

            $this->db->select('*');
            $this->db->from('plan');
            $this->db->where('recipe_plan_id', $recipe_plan_id);
            $query = $this->db->get();
            return $query;

    }
    
    public function todays_menu(){

            $this->db->select('*');
            $this->db->from('plan_default');
            $this->db->where('recipe_plan_date', date('Y-m-d'));
            $query = $this->db->get();
            return $query;

    }

}
?>
