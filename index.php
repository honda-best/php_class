<?php

abstract class Family
{
	protected $peopleCount = 0;
}


class Father extends Family
{
	protected $name = '';
	protected $age  = 0;
	protected $wife = ''; 
	
	// необходимо указать имя, жену, возраст, профессию
	function __construct(string $name, Mother $wife, int $age, string $profession)
	{
	// когда создаём новый объект, количество членов семьи увеличивается
		++$this->peopleCount; 
		$this->name = $name;
		$this->wife = $wife;
		$this->$age = $age;
		$this->profession = $profession;
	}

}

class Mother extends Family
{
	protected $name = '';
	protected $age = 0;
	protected $husband = '';

	// необходимо указать имя, мужа, возраст, профессию
	function __construct(string $name, Father $husband, int $age, string $profession)
	{
		++$this->peopleCount;
		$this->name = $name;
		$this->husband = $husband;
		$this->$age = $age;
		$this->profession = $profession;
	}

}

class Child extends Family
{
	protected $name = '';
	protected $age = 0;
	protected $mother;
	protected $father;

	// необходимо указать имя, родителей, пол (0 - девочка, 1 - мальчик), возраст
	function __construct(string $name, Father $father, Mother $mother, bool $sex, int $age)
	{
		++$this->peopleCount;
		$this->name = $name;
		$this->mother = $mother;
		$this->father = $father;
		$this->sex = $sex;
		$this->$age = $age;
	}

}
?>