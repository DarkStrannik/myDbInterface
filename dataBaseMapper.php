<?php
/**
 * Alex_Db_Interface_dataBaseMapper
 *
 * Интерфейс для работы с БД
 *
 * @author D_S <Strannick-Sirius@yandex.ru>
 * @version 1.0
 */



interface Alex_Db_Interface_dataBaseMapper{
	
	public $tableName;
	
	/**
	 * Конструктор устанавливает соединение с БД
	 *
	 * @param array $aConnect
	 */
	public function __construct(array $aConnect = array());
	
	/**
	 * Обновляет данные в БД
	 *
	 * @param array $aValue
	 * @param array $aWhereOptions
	 */
	public function update(array $aValue = array, array $aWhereOptions = NULL);
	
	/**
	 * Добавляет данные БД
	 *
	 * @param array $aValue
	 */
	public function insert(array $aValue = array());
	
	/**
	 * Выбирает данные из БД 
	 *
	 * @param array  $aCols
	 * @param array  $aWhereOptions
	 */
	public function select(array $aCols = array, array $aWhereOptions = NULL);
	
	/**
	 * Удаляет данные из таблицы
	 *
	 * @param array  $aWhereOptions
	 */
	public function delete( array $aWhereOptions = NULL);
	
	/**
	 * Устанавливает имя БД
	 *
	 * @param string $sTableName
	 */
	public function setTable($sTableName);
	
	/**
	 * Возвращает имя БД
	 *
	 * @return string $sTableName
	 */
	public function getTable();
}
?>
