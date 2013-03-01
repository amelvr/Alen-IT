<?

class post{
	
	private $id, $title, $body, $slug, $date, $type, $img_id, $img_title, $img_link, $img_p_id;
	
	public function setPostId($id){
		$this->id=$id;
	}
	
	public function setPostTitle($title){
		$this->title=$title;
	}
	
	public function setPostBody($body){
		$this->body=$body;
	}
	
	public function setPostSlug($slug){
		$this->slug=$slug;
	}
	
	public function setPostDate($date){
		$this->date=$date;
	}
	
	public function setPostType($type){
		$this->type=$type;
	}
	
	public function setImgId($img_id){
		$this->img_id=$img_id;
	}
	
	public function setImgTitle($img_title){
		$this->img_title=$img_title;
	}
	
	public function setImgLink($img_link){
		$this->img_link=$img_link;
	}
	
	public function setImgPId($img_p_id){
		$this->img_p_id=$img_p_id;
	}
	
	
	
	
	
	public function getPostId(){
		return $this->id;
	}
	
	public function getPostTitle(){
		return $this->title;
	}
	
	public function getPostBody(){
		return $this->body;
	}
	
	public function getPostSlug(){
		return $this->slug;
	}
	
	public function getPostDate(){
		return $this->date;
	}
	
	public function getPostType(){
		return $this->type;
	}
	
	public function getImgId(){
		return $this->img_id;
	}
	
	public function getImgTitle(){
		return $this->img_title;
	}
	
	public function getImgLink(){
		return $this->img_link;
	}
	
	public function getImgPId(){
		return $this->img_p_id;
	}

	
	
}

?>