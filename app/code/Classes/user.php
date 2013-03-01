<?

class user{
	
	private $c_id, $c_name, $c_adress, $c_telefon, $c_email, $c_cvr, $c_desc, $c_clip, $c_uname, $c_pass, $c_isadmin, $m_id, $m_name, $m_email, $m_message;
	
	public function setUserId($c_id){
		$this->c_id=$c_id;
	}
	
	public function setUserName($c_name){
		$this->c_name=$c_name;
	}
	
	public function setUserAdress($c_adress){
		$this->c_adress=$c_adress;
	}
	
	public function setUserTelefon($c_telefon){
		$this->c_telefon=$c_telefon;
	}
	
	public function setUserEmail($c_email){
		$this->c_email=$c_email;
	}
	
	public function setUserCvr($c_cvr){
		$this->c_cvr=$c_cvr;
	}
	
	public function setUserDesc($c_desc){
		$this->c_desc=$c_desc;
	}
	
	public function setUserClip($c_clip){
		$this->c_clip=$c_clip;
	}
	
	public function setUserUname($c_uname){
		$this->c_uname=$c_uname;
	}
	
	public function setUserPass($c_pass){
		$this->c_pass=$c_pass;
	}
	
	public function setUserIsadmin($c_isadmin){
		$this->c_isadmin=$c_isadmin;
	}
	
	public function setMessageId($m_id){
		$this->m_id=$m_id;
	}
	
	public function setMessageName($m_name){
		$this->m_name=$m_name;
	}
	
	public function setMessageEmail($m_email){
		$this->m_email=$m_email;
	}
	
	public function setMessageMessage($m_message){
		$this->m_message=$m_message;
	}
	
	
	
	
	
	public function getUserId(){
		return $this->c_id;
	}
	
	public function getUserName(){
		return $this->c_name;
	}
	
	public function getUserAdress(){
		return $this->c_adress;
	}
	
	public function getUserTelefon(){
		return $this->c_telefon;
	}
	
	public function getUserEmail(){
		return $this->c_email;
	}
	
	public function getUserCvr(){
		return $this->c_cvr;
	}
	
	public function getUserDesc(){
		return $this->c_desc;
	}
	
	public function getUserClip(){
		return $this->c_clip;
	}
	
	public function getUserUname(){
		return $this->c_uname;
	}
	
	public function getUserPass(){
		return $this->c_pass;
	}
	
	public function getUserIsadmin(){
		return $this->c_isadmin;
	}
	
	public function getMessageId(){
		return $this->m_id;
	}
	
	public function getMessageName(){
		return $this->m_name;
	}
	
	public function getMessageEmail(){
		return $this->m_email;
	}
	
	public function getMessageMessage(){
		return $this->m_message;
	}

	
	
}

?>