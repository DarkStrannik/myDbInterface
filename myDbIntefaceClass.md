<?php

/**
* Alex_Db_Interface_myInterfaceDb
*
* Класс для работы с РСУ
*
* @author D_S <Strannick-Sirius@yandex.ru>
* @version 1.0
*/


class Alex_Db_Interface_myInterfaceDb{

	/**
	* Свойства класса
	* @var string Строка
	*/
	private $user;
	private $pass;
	private $host;
	private $name;
	
	/**
	* Конструктор класса
	* Принимает параметры для подключения к БД
	* 
	* @param string $host, $name, $user, $pass строка
	*/
	public function __construct($host, $name, $user, $pass){}
	
	
	/**
	* Метод класса
	* Выбор РСУ и соединение
	*
	* @param string $db строка 
	*/
	public function getObj($db){}
	
	/**
	* Метод класса
	* Выибирает все из БД
	*
	* @param string $table строка
	*/
	public function selectAllDb($table){}
	
	/**
	* Метод класса
	* Выибирает из БД по id
	*
	* @param string $table, $id строка
	*/
	public function selectId($table, $id){}
	
	/**
	* Метод класса
	* Добавляет данные в БД
	*
	* @param string $table строка
	*/
	public function insertDb($table){}
	
	/**
	* Метод класса
	* Удаляет из БД
	*
	* @param array $array массив
	*/
	public function deleteDb(array()){}
	
	/**
	* Метод класса
	* Обновляет данные в БД
	*
	* @param string $table, $id строка
	*/
	public function updateDb($table, $id){}
}

?>
