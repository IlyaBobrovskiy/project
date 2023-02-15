<?
namespace \Model;

class loginItem{

	@var string;
	
	private $login; 

	@var string;

	private $password;

	@var string;
	
	private $email;

	@var string;
	
	private $name;

	public function __construct(string $login, string $password,string $email,string $name)
	{
		$this->login = $login;
		$this->password = $password;
		$this->email = $email;
		$this->name = $name;
	}
	


	
	