<?php

class child_class
{
    private $amza;
    private $name;
    private $surname;
	private $bday;
    private $fname;
    private $mname;
    private $fwork;
	private $mwork;
    private $cno1;
	private $cno2;
	private $email;
	private $city;
	private $street;
	private $no;
	private $postno;
	private $vaks;
	private $aler;
	private $other;
	private $group;
	private $uname;
	private $pword;
	private $feetyp;
	private $feeam;
	private $feestatus;
    private $level;
    

    public function __construct($amza,$name,$surname,$bday,$fname,$mname,$fwork,$mwork,$cno1,$cno2,$email, $city,$street,$no,$postno,$vaks,$aler,$other,$group,$uname,$pword,$feetyp,$feeam,$feestatus,$level)
    {
        
		   $this->amza= $amza;
    $this-> name=$name;
     $this-> surname=$surname;
	 $this-> bday=$bday;
     $this-> fname=$fname;
     $this-> mname=$mname;
     $this-> fwork=$fwork;
	 $this-> mwork=$mwork;
    $this-> cno1=$cno1;
	 $this-> cno2=$cno2;
	 $this-> email=$email;
	 $this-> city=$city;
	 $this-> street=$street;
	 $this-> no=$no;
	 $this-> postno=$postno;
	 $this-> vaks=$vaks;
	 $this-> aler=$aler;
	 $this-> other=$other;
	 $this-> group=$group;
	 $this-> uname=$uname;
	 $this-> pword=$pword;
	 $this-> feetyp=$feetyp;
	 $this-> feeam=$feeam;
	 $this-> feestatus=$feestatus;
     $this-> level=$level;
       
    }

    public function getAmza()
    {
        return $this->amza;
    }

    public function setAmza($amza)
    {
        $this->amza = $amza;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname= $surname;
    }
	
	 public function getBday()
    {
        return $this->bday;
    }

    public function setBday($bday)
    {
        $this->bday= $bday;
    }

	public function getFname()
    {
        return $this->fname;
    }
    
    public function setFname($fname)
    {
        $this->fname = $fname;
    }
    
     public function getFwork()
    {
        return $this->fwork;
    }
    
    public function setFwork($fwork)
    {
        $this->fwork = $fwork;
    }

	public function getMname()
    {
        return $this->mname;
    }
    
    public function setMname($mname)
    {
        $this->mname= $mname;
    }

    public function getMwork()
    {
        return $this->mwork;
    }

    public function setMwork($mwork)
    {
        $this->mwork = $mwork;
    }

    public function getCno1()
    {
        return $this->cno1;
    }

    public function setCno1($cno1)
    {
        $this->cno1 = $cno1;
    }
	
	public function getCno2()
    {
        return $this->cno2;
    }

    public function setCno2($cno2)
    {
        $this->cno2 = $cno2;
    }

	public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
	
	public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
    }
	
	public function getStreet()
    {
        return $this->street;
    }

    public function setStreet($street)
    {
        $this->street = $street;
    }

	public function getNo()
    {
        return $this->no;
    }

    public function setNo($no)
    {
        $this->no = $no;
    }

	public function getPostno()
    {
        return $this->postno;
    }

    public function setPostno($postno)
    {
        $this->postno = $postno;
    }
	
	public function getVaks()
    {
        return $this->vaks;
    }

    public function setVaks($vaks)
    {
        $this->vaks = $vaks;
    }
	
	public function getAler()
    {
        return $this->aler;
    }

    public function setAler($aler)
    {
        $this->aler = $aler;
    }
	
	public function getOther()
    {
        return $this->other;
    }

    public function setOther($other)
    {
        $this->other = $other;
    }
	
	public function getGroup()
    {
        return $this->group;
    }

    public function setGroup($group)
    {
        $this->group = $group;
    }
	
	public function getUname()
    {
        return $this->uname;
    }

    public function setUname($uname)
    {
        $this->uname= $uname;
    }
	
	public function getPword()
    {
        return $this->pword;
    }

    public function setPword($pword)
    {
        $this->pword = $pword;
    }
	
	public function getFeetyp()
    {
        return $this->feetyp;
    }

    public function setFeetyp($feetyp)
    {
        $this->feetyp = $feetyp;
    }
	
		public function getFeeam()
    {
        return $this->feeam;
    }

    public function setfeeam($feeam)
    {
        $this->feeam = $feeam;
    }
	
		public function getFeestatus()
    {
        return $this->feestatus;
    }

    public function setFeestatus($feestatus)
    {
        $this->feestatus = $feestatus;
    }
	
	public function getLevel()
    {
        return $this->level;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

}