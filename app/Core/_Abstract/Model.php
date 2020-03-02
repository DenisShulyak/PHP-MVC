<?php
/**
 * Created by PhpStorm.
 * User: ШулякД
 * Date: 18.02.2020
 * Time: 18:02
 */

namespace Core\_Abstract;


use Core\Db;

/**
 * Class Model
 * @package Core\_Abstract
 * @method static select($table, $join, $columns = null, $where = null)
 * @method static insert($table, $datas)
 * @method static update($table, $data, $where = null)
 * @method static delete($table, $where)
 * @method static replace($table, $columns, $where = null)
 * @method static get($table, $join = null, $columns = null, $where = null)
 * @method static has($table, $join, $where = null)
 * @method static rand($table, $join = null, $columns = null, $where = null)
 * @method static aggregate($type, $table, $join = null, $column = null, $where = null)
 * @method static count($table, $join = null, $column = null, $where = null)
 * @method static avg($table, $join, $column = null, $where = null)
 * @method static max($table, $join, $column = null, $where = null)
 * @method static min($table, $join, $column = null, $where = null)
 * @method static sum($table, $join, $column = null, $where = null)
 *
 */


abstract class Model
{
    protected static $table;

    public static function getTable(){
        return static::$table;
    }

    public static function __callstatic($name, $arguments = []){
        array_unshift($arguments, static::$table);
        return call_user_func_array([Db::inst(), $name], $arguments);
    }



}