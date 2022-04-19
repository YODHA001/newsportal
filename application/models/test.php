public function getSearch($data) {        
            $this->db->select("*");
            $this->db->from('posting');
            // $this->db->like('content', $data, 'both');
            // $this->db->or_like('title',$data); 
            $this->db->join('category', 'category.id = posting. id_category');
            $this->db->where('posting.is_active', 'Y');
            $this->db->order_by('posting.id', 'desc');
            // $this->db->limit(4);
           $productids =  $this->db->get()->result();
           $a= array_column($productids,'title');
$x = $data; 
	
$response = $this->linearsearchmyfun($productids, $x); 
echo($response);
if($response == -1) 
	echo "Data Element is not present in array"; 
else
	echo "Data Element is present at index " , $response;
          

    }
    where id="$data"->get();