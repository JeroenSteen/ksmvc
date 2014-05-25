<?php

class Model
{

    public function Model(){}

    public static function find($id, $columns = "*") {
        $DB = DB::instance();
        //var_dump($DB);

        $query = "SELECT * WHERE id='$id'";

        if($result = $DB->$query($query)){
            echo $result;
        }

    }

    //ORM - Model -> Config::$db["driver"] -> Classes/Wrapper/"Driver"

    /*find
    first
    get
    save
    table
    call
    where
    orwhere
    limit

    get
    first
    save
    getinsert
    getupdate
    getwhere
    getlimit
    matchcols

    callstatic
    */

    /*
        public static function find($id, $columns = "*") {
            $query = "SELECT * WHERE id='$id'";
            echo $query;
            //$static = new static;
            //return $static->where('id', '=', $id)->first($columns);
        }

        public function first($columns = "*") {
            return array_shift($this->get($columns));
        }

        public function get($columns = "*") {
            return $this->query->get($column\PDO::FETCH_CLASS,get_called_class());
        }

        /*
        public function save() {
            $this->query->save( (array)$this );
        }

        public function table() {
            if(isset($this->table)){
                return $this->table;
            }
            return \sys\helpers\Word::plural(strtolower(get_called_class()));
        }

        public function __call($method, $args = array()) {
            call_user_func_array( array( $this->query, $method ), $args );
            return $this;
        }

        public static function __callStatic($method, $args = array()) {
            $static = new Static;
            call_user_func_array( array($static->query, $method) , $args );
            return $static;
        }
    */


}