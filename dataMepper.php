<?php

/**
* Alex_Db_Interface_dataMepper
*
* Класс для работы с данными
*
* @author D_S <Strannick-Sirius@yandex.ru>
* @version 1.0
*/

class Alex_DB_Inteface_handlingDate{
	
	/**
	* Основные действия с объектом
	*/
	
	/**
	* Метод класса
	*
	* Создает данные в объекте
	*/
	public function createDate(){}
	
	/**
	* Метод класса
	*
	* Выбор данных из объекта
	*/
	public function fetchDate(){}
	
	/**
	* Метод класса
	*
	* Необходим ли данный метод если есть fetchDate();???
	* Поиск данных в объекте
	*/
	public function findDate(){}
	
	/**
	* Метод класса
	*
	* Удаляет данные из объекта
	*/
	public function deleteDate(){}
	
	/**
	* Метод класса
	*
	* Обновляет данные в объекте
	*/
	public function updateDate(){}
	
	/**
	* Расширенние основных методов
	* Необходимы ли они???
	*/
	/**
	* Метод класса
	* Выводит всю информацию находящуюся в объекте с которым работает класс
	*/
	public function fetchAll(){}
	
	/**
	* Получить первый элемент объекта
	*/
	public function fetchFirst(){}
	
	/**
	* Получитьь последний элемент объекта
	*/
	public function fetchLast(){}
	
	/**
	* Получить следующий элемент объекта
	*/
	public function fetchNext(){}
	
	/**
	* Получить предыдущий элемент объекта
	*/
	public function fetchPrevious(){}
	
	/**
	* Удалить все элементы объекта
	*/
	public function deleteAll(){}
	
	/**
	* Удалить определенный элемент объект
	*/
	public function deleteOneObj(){}
	
	/**
	* Удалить элементы согласно признаку
	*/
	public function deleteObjAttribute(){}
	
	/**
	* Создать один элемент
	*/
	public function createOneObj(){}
	
	/**
	* Создать несколько элементов
	*/
	public function createSeveralObj(){}
	
	/**
	* И т.д.
	*/
}
?>
