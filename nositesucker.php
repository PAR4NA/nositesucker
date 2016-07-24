<?php
	/**
	* No site Sucker
	* https://github.com/victorscatolon/nositesucker
	* By: Victor Hugo Scatolon de Souza
	* http://compulabs.com.br
	*/
	class nositesucker
	{
		private $pasta_site = "";
		private $liberados = "";
		private $ip = "";
		private $hostname = "";

		public static function strpos2($haystack, $needle, $offset=0) {
			if(!is_array($needle)) $needle = array($needle);
			foreach($needle as $query) {
				if(strpos($haystack, $query, $offset) !== false) return true; // stop on first true result
			}
			return false;
		}
		function init($a, $b, $c)
		{
			$this->ip = $a;
			$this->hostname = gethostbyaddr($a);
			$this->pasta_site = $b;
			$this->liberados = $c;
		}
		function start()
		{
			if(strpos($_SERVER['REQUEST_URI'], ".") === false)
			{
				$arquivo = "index.php";
			}
			else
			{
				$arquivo = $_SERVER['REQUEST_URI'];
			}
			if(self::strpos2($this->hostname, $this->liberados) == true)
			{
				require_once("desencriptado/".str_replace("/".$this->pasta_site."/", "", $arquivo));
			}
			else
			{
				require_once("encriptado/".str_replace("/".$this->pasta_site."/", "", $arquivo));
			}
		}
		function check()
		{
			if(strpos($_SERVER['REQUEST_URI'], ".") === false)
			{
				$arquivo = "index.php";
			}
			else
			{
				$arquivo = $_SERVER['REQUEST_URI'];
			}
			if(!self::strpos2($this->hostname, $this->liberados) == true)
			{
				echo "Sem permissao";
				exit;
			}
		}
	}
?>