<?

class invoice{
	
	private $i_id, $i_date, $i_desc, $i_client, $ip_id, $ip_product_id, $ip_qty, $ip_invoice_id, $pr_id, $pr_name, $pr_price;
	
	public function setInvoiceId($i_id){
		$this->i_id=$i_id;
	}
	
	public function setInvoiceDate($i_date){
		$this->i_date=$i_date;
	}
	
	public function setInvoiceDesc($i_desc){
		$this->i_desc=$i_desc;
	}
	
	public function setInvoiceClient($i_client){
		$this->i_client=$i_client;
	}
	
	public function setInvoiceIpId($ip_id){
		$this->ip_id=$ip_id;
	}
	
	public function setInvoiceIpProductId($ip_product_id){
		$this->ip_product_id=$ip_product_id;
	}
	
	public function setInvoiceIpQty($ip_qty){
		$this->ip_qty=$ip_qty;
	}
	
	public function setInvoiceIpInvoiceID($ip_invoice_id){
		$this->ip_invoice_id=$ip_invoice_id;
	}
	
	public function setInvoicePrId($pr_id){
		$this->pr_id=$pr_id;
	}
	
	public function setInvoicePrName($pr_name){
		$this->pr_name=$pr_name;
	}
	
	public function setInvoicePrPrice($pr_price){
		$this->pr_price=$pr_price;
	}
	
	
	
	
	
	public function getInvoiceId(){
		return $this->i_id;
	}
	
	public function getInvoiceDate(){
		return $this->i_date;
	}
	
	public function getInvoiceDesc(){
		return $this->i_desc;
	}
	
	public function getInvoiceClient(){
		return $this->i_client;
	}
	
	public function getInvoiceIpId(){
		return $this->ip_id;
	}
	
	public function getInvoiceIpProductId(){
		return $this->ip_product_id;
	}
	
	public function getInvoiceIpQty(){
		return $this->ip_qty;
	}

	public function getInvoiceIpInvoiceId(){
		return $this->ip_invoice_id;
	}

	public function getInvoicePrId(){
		return $this->pr_id;
	}

	public function getInvoicePrName(){
		return $this->pr_name;
	}
	
	public function getInvoicePrPrice(){
		return $this->pr_price;
	}


}

?>