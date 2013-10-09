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
	 * Метод класса
	 * Создает данные в объекте
	 * 
	 * @param string $sType
	 * @param string $sName
	 * @param array  $aOptions
	 */
	public function createDate($sType, $sName, array $aOptions = array());
	
	/**
	 * Метод класса
	 * Поиск данных в объекте
	 *
	 * @param string $sParam
	 */
	public function findDate($sParam);
	
	/**
	 * Метод класса
	 * Удаляет данные из объекта
	 *
	 * @param string $sParam
	 */
	public function deleteDate($sParam);
	
	/**
	 * Метод класса
	 * Обновляет данные в объекте
	 *
	 * @param array $aName
	 * @param array $aValue
	 */
	public function updateDate(array $aName = array(), array $aValue = array());
	
	
}
?>
