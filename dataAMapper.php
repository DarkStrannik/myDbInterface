<?php
/**
 * Alex_Db_Abstract_dataMapper
 *
 * Абстрактный класс для работы с данными
 *
 * @author D_S <Strannick-Sirius@yandex.ru>
 * @version 1.0
 */
 
 
require_once(($_SERVER['DOCUMENT_ROOT']) . 'Alex/Db/Interface/dataMepper.php');

abstract class Alex_Db_Abstract_dataMapper extends Alex_Db_Interface_dataMepper{
    /**
     * Свойтво класса
     *
     * @var string строка
     */
    protected $tableName;

    /**
     * Конструктор класса
     *
     * Устанавливает соединение с данными
     *
     * @param array $connection массив
     */
    public function __construct(array $connection = array());

    /**
     * Метод класса
     *
     * Занимается обновлением данных
     *
     * @param array $value массив
     * @param array $whereOptions массив
     */
    public function update(array $value = array(), array $whereOptions = array());

    /**
     * Метод класса
     *
     * Занимается добавлением данных
     *
     * @param array $value массив
     */
    public function insert(array $value = array());

    /**
     * Метод класса
     *
     * Занимается воборкой данных
     *
     * @param array $cols массив
     * @param array $whereOptions массив
     */
    public function select(array $cols = array(), array $whereOptions = array());

    /**
     * Метод класса
     *
     * Занимается удалением данных либо все таблицы
     *
     * @param array $whereOptions массив
     */
    public function delete(array $whereOptions = array());

    /**
     * Метод класса
     *
     * Принимает название таблицы данных
     *
     * @param string $tableName строка
     */
    public function setTableName($tableName){
	if(!is_scalar($tableName)){
		throw new dbMapperBadTableName();
	}
	else {
		$this->tableName = $tableName;
	}
    }

    /**
     * Метод класса
     *
     * Возвращает название таблицы данных
     *
     * @return string $tableName строка
     */
    public function getTableName(){
        return $this->tableName;
    }
}
?>
