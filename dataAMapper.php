<?php
/**
 * Alex_Db_Abstract_dataMapper
 *
 * Абстрактный класс для работы с данными
 *
 * @author D_S <Strannick-Sirius@yandex.ru>
 * @version 1.0
 */
 
 class Alex_Db_Abstract_dataMapper extends Alex_Db_Interface_dataMapper{
	/**
	 * Свойтво класса
	 *
	 * @var string Строка
	 */
	protected $sTableName;
	
	/**
	 * Конструктор класса
	 *
	 * Устанавливает соединение с данными
	 *
	 * @param array $aConnection массив
	 */
	abstract protected function __construct(array $aConnect = array());
	
	/**
	 * Метод класса
	 * 
	 * Занимается обновлением данных
	 *
	 * @param array $aValue массив
	 * @param array $aWhereOptions массив
	 */
	abstract protected function update(array $aValue = array(), array $aWhereOptions = array());
	
	/**
	 * Метод класса 
	 *
	 * Занимается добавлением данных
	 *
	 * @param array $aValue массив
	 */
	abstract protected function insert(array $aValue = array);
	
	/**
	 * Метод класса
	 *
	 * Занимается воборкой данных
	 *
	 * @param array $aCools массив
	 * @param array $aWhereOptions массив
	 */
	abstract protected function select(array $aCools = array(), array $aWhereOptions = array());
	
	/**
	 * Метод класса
	 *
	 * Занимается удалением данных либо все таблицы
	 *
	 * @param array $aWhereOptions массив
	 */
	abstract protected function delete(array $aWhereOptions = array());
	
	/**
	 * Метод класса
	 *
	 * Принимает название таблицы данных
	 *
	 * @param string $sTableName строка
	 */
	public function setTableName($sTableName){
		$this->sTableName = $sTableName;
	}
	
	/**
	 * Метод класса
	 *
	 * Возвращает название таблицы данных
	 *
	 * @return string $sTableName строка
	 */
	public function getTableName(){
		return $this->sTableName;
	}
 }
?>
