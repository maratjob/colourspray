<? $GLOBALS['_1904365242_']=Array('' .'strval','strval','st' .'rval','s' .'tr' .'val','di' .'rname','' .'is_d' .'ir','mk' .'dir','is_dir','file_pu' .'t_conten' .'ts','ser' .'i' .'a' .'li' .'ze','is_' .'file','i' .'s_' .'file','unlink','' .'is_file','unser' .'ial' .'iz' .'e','fil' .'e_get_co' .'ntent' .'s'); ?><? function _1838376550($i){$a=Array();return $a[$i];} ?><? class CStartShopUtilsDataFile{private $Properties=array();private $Path;private $SaveOnChange=true;public function __construct($_0,$_1=true){$this->Path=$_0;$this->SaveOnChange=$_1;}public function __get($_2){return $this->Properties[$GLOBALS['_1904365242_'][0]($_2)];}public function __set($_2,$_3){$this->Properties[$GLOBALS['_1904365242_'][1]($_2)]=$_3;if($this->SaveOnChange)$this->Save();}public function __isset($_2){return isset($this->Properties[$GLOBALS['_1904365242_'][2]($_2)]);}public function __unset($_2){unset($this->Properties[$GLOBALS['_1904365242_'][3]($_2)]);if($this->SaveOnChange)$this->Save();}public function Save(){if(!empty($this->Path)){$_4=$this->Path;$_5=$GLOBALS['_1904365242_'][4]($_4);if(!$GLOBALS['_1904365242_'][5]($_5))$GLOBALS['_1904365242_'][6]($_5,round(0+170.33333333333+170.33333333333+170.33333333333),true);if($GLOBALS['_1904365242_'][7]($_5)){$GLOBALS['_1904365242_'][8]($_4,$GLOBALS['_1904365242_'][9]($this->Properties));if($GLOBALS['_1904365242_'][10]($_4))return true;}}return false;}public function Delete(){if(!empty($this->Path)){$_4=$this->Path;if($GLOBALS['_1904365242_'][11]($_4)){$GLOBALS['_1904365242_'][12]($_4);return true;}}return false;}public function Load(){if(!empty($this->Path)){$_4=$this->Path;if($GLOBALS['_1904365242_'][13]($_4)){$this->Properties=$GLOBALS['_1904365242_'][14]($GLOBALS['_1904365242_'][15]($_4));return true;}}return false;}} ?>