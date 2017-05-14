
<?php

	class Client
	{
		
		//données membres
		private $_id;
		private $_nom;
		private $_prenom;
		private $_adresse;
		private $_ville;
		private $_cp;

		private $Factures = array();
				var_dump($Factures);


		//contructeur
		public function __construct($mID, $mNOM, $mPRENOM, $mADRESSE, $mVILLE, $mCP)
		{
			
			$this->_id=$mID;
			$this->_nom=$mNOM;
			$this->_prenom=$mPRENOM;
			$this->_adresse=$mADRESSE;
			$this->_ville=$mVILLE;
			$this->_cp=$mCP;
			
		}

		public function TabFac()
		{
			Facture::$_Factures;
		}
		
		//mutateurs pour l'id du client
		public function getClientID()
		{
			
			return $this->_id;
			
		}
		public function setClientID($mID)
		{
			
			$this->_id=$mID;
			
		}
		
		//mutateurs pour le nom du client
		public function getClientNOM()
		{
			
			return $this->_nom;
			
		}
		public function setClientNOM($mNOM)
		{
			
			$this->_nom=$mNOM;
			
		}
		
		//mutateurs pour le prénom du client
		public function getClientPRENOM()
		{
			
			return $this->_prenom;
			
		}
		public function setClientPRENOM($mPRENOM)
		{
			
			$this->_prenom=$mPRENOM;
			
		}

		//mutateurs pour l'adresse du client
		public function getClientADRESSE()
		{
			
			return $this->_adresse;
			
		}
		public function setClientADRESSE($mADRESSE)
		{
			
			$this->_adresse=$mADRESSE;
			
		}
		
		//mutateurs pour la ville du client
		public function getClientVILLE()
		{
			
			return $this->_ville;
			
		}
		public function setClientVILLE($mVILLE)
		{
			
			$this->_ville=$mVILLE;
			
		}
		
		//mutateurs pour le code postal du client
		public function getClientCP()
		{
			
			return $this->_cp;
			
		}
		public function setClientCP($mCP)
		{
			
			$this->_cp=$mCP;
			
		}
		
		//affichage des données du client
		public function afficheClient()
		{
			
			echo $this->_id;
			echo $this->_nom;
			echo $this->_prenom;
			echo $this->_adresse;
			echo $this->_ville;
			echo $this->_cp;
			
		}
		
		//destructeur
		function __destruct()
		{
			
			//
			
		}
		
	}

?>

<?php

	class Facture
	{
		
		//données membres
		private $_id;
		private $_date;
		private $_moderegl;
		private $_clikicom;

		private $_Client;

		
		//contructeur
		public function __construct($mID, $mDATE, $mMODEREGL, $mCLIKICOM, $mClient)
		{
			
			$this->_id=$mID;
			$this->_date=$mDATE;
			$this->_moderegl=$mMODEREGL;
			$this->_clikicom=$mCLIKICOM;
			$this->_Client=$mClient;
			
		}
		
		//mutateurs pour l'id de la facture
		public function getFactureID()
		{
			
			return $this->_id;
			
		}
		public function setFactureID($mID)
		{
			
			$this->_id=$mID;
			
		}

		public function getFactureCli(){
			return $this->_Client;
		}

		public function setFactureClient($mClient){
			$this->_Client=$mClient;
		}
		
		//mutateurs pour la date de la facture
		public function getFactureDATE()
		{
			
			return $this->_date;
			
		}
		public function setFactureDATE($mDATE)
		{
			
			$this->_date=$mDATE;
			
		}
		
		//mutateurs pour le mode de règlement
		public function getFactureMODEREGL()
		{
			
			return $this->_moderegl;
			
		}
		public function setFactureMODEREGL($mMODEREGL)
		{
			
			$this->_moderegl=$mMODEREGL;
			
		}

		//mutateurs pour l'id du client à qui adresser la facture
		public function getFactureClikicom()
		{
			
			return $this->_clikicom;
			
		}
		public function setFactureClikicom($mCLIKICOM)
		{
			
			$this->_clikicom=$mCLIKICOM;
			
		}
		
		//affichage des données de la facture
		public function afficheClient()
		{
			
			echo $this->_id;
			echo $this->_date;
			echo $this->_moderegl;
			echo $this->_clikicom;
			
		}
		
		//destructeur
		function __destruct()
		{
			
			//
			
		}
		
	}

?>

<?php

	class Produit
	{
		
		//données membres
		private $_id;
		private $_desi;
		private $_prixht;

		
		//contructeur
		public function __construct($mID, $mDESI, $mPRIXHT)
		{
			
			$this->_id=$mID;
			$this->_desi=$mDESI;
			$this->_prixht=$mPRIXHT;
			
		}
		
		//mutateurs pour l'id du produit
		public function getProduitID()
		{
			
			return $this->_id;
			
		}
		public function setProduitID($mID)
		{
			
			$this->_id=$mID;
			
		}
		
		//mutateurs pour la désignation du produit
		public function getProduitDESI()
		{
			
			return $this->_desi;
			
		}
		public function setProduitDESI($mDESI)
		{
			
			$this->_desi=$mDESI;
			
		}
		
		//mutateurs pour le prix hors taxes du produit
		public function getProduitPRIXHT()
		{
			
			return $this->_prixht;
			
		}
		public function setProduitPRIXHT($mPRIXHT)
		{
			
			$this->_prixht=$mPRIXHT;
			
		}
		
		//affichage des données du produit
		public function afficheProduit()
		{
			
			echo $this->_id;
			echo $this->_desi;
			echo $this->_prixht;
			
		}
		
		//destructeur
		function __destruct()
		{
			
			//
			
		}
		
	}

?>

<?php

	class DetailFacture
	{
		
		//données membres
		private $_idfact;
		private $_idprod;
		private $_quantiprod;

				private $Produits = array();
				var_dump($Produits);
		
		//contructeur
		public function __construct($mIDFACT, $mIDPROD, $mQUANTIPROD)
		{
			
			$this->_idfact=$mIDFACT;
			$this->_idprod=$mIDPROD;
			$this->_quantiprod=$mQUANTIPROD;
			
		}

		public function TabProd()
		{
			Produits::$_Produits;
		}
		
		//mutateurs pour l'id de la facture
		public function getDetailFactureIDFACT()
		{
			
			return $this->_idfact;
			
		}
		public function setDetailFactureIDFACT($mIDFACT)
		{
			
			$this->_idfact=$mIDFACT;
			
		}
		
		//mutateurs pour l'id du produit commandé
		public function getDetailFactureIDPROD()
		{
			
			return $this->_idprod;
			
		}
		public function setDetailFactureIDPROD($mIDPROD)
		{
			
			$this->_idprod=$mIDPROD;
			
		}
		
		//mutateurs pour la quantité de produit commandée
		public function getDetailFactureQUANTIPROD()
		{
			
			return $this->_quantiprod;
			
		}
		public function setDetailFactureQUANTIPROD($mQUANTIPROD)
		{
			
			$this->_quantiprod=$mQUANTIPROD;
			
		}
		
		//affichage des données du client
		public function afficheDetailFacture()
		{
			
			echo $this->_idfact;
			echo $this->_idprod;
			echo $this->_quantiprod;
			
		}
		
		//destructeur
		function __destruct()
		{
			
			//
			
		}
		
	}

?>

<?php

	//programme Main
	
	$mClient=new Client(00017,'Schmidt','Arnaud','chez moi','trouducudumonde','68600');
	
	$mClient->afficheClient();
	
	$mClient->setClientID(00001);
	
	echo $mClient->getClientID();

?>
