<?php

require_once 'MantisConnect.php';

class MantisConnector
{
	protected $username;
	protected $password;
	
	protected $apiLocation;
	
	/** @var MantisConnect */
	protected $client;
	
	public function __construct($apiLocation, $username, $password, $wsdlOptions=array())
	{
		$this->apiLocation = $apiLocation;
		$this->username = $username;
		$this->password = $password;
		
		$this->client = new MantisConnect($apiLocation, $wsdlOptions);
		
		return $this;
	}
	
	public function __call($name, $arguments=array())
	{
		if (!method_exists($this->client, $name))
		{
			throw new Exception('This method does not exist.');
		}
		array_unshift($arguments, $this->username, $this->password);
		
		return call_user_func_array(array($this->client, $name), $arguments);
	}
	
	public function getUserByEmail($projectId, $email)
	{
		return $this->getUserBy('email', $projectId, $email);
	}
	
	public function getUserBy($fieldName, $projectId, $value)
	{
		if (!(in_array($fieldName, array('id', 'name', 'real_name', 'email'))))
		{
			throw new Exception('Invalid field');
		}
		
		$user = null;
		
		$users = $this->mc_project_get_users($projectId, -1);
		
		foreach ($users as $data)
		{
			if ($data->$fieldName === $value)
			{
				$user = $data;
				break;
			}
		}
		
		return $user;
	}
	
	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}
	
	public function getUsername()
	{
		return $this->username;
	}
	
	public function setPassword($password)
	{
		$this->password = $password;
		return $this;
	}
	
	public function getPassword()
	{
		return $this->password;
	}
	
	public function getApiLocation()
	{
		return $this->apiLocation;
	}
	
	public function setApiLocation($apiLocation)
	{
		$this->apiLocation = $apiLocation;
		return $this;
	}
	
	/**
	 * 
	 * @param MantisConnect $client
	 */
	public function setClient($client)
	{
		$this->client = $client;
		return $this;
	}
	
	/**
	 * @return MantisConnect $client
	 */
	public function getClient()
	{
		return $this->client;
	}
}