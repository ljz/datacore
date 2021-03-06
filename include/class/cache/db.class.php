<?php
if(!defined('IN_DATACORE')) {
    exit('invalid request');
}
class cache_db {
    var $num = 16;
    var $table = 'cache';
    function cache_db() {
        $this->num = max(0, (int) $GLOBALS['_J']['config']['cache_table_num']);
    }
    function get($key) {
        static $datas = null;
        if(!isset($datas[$key])) {
            $cache = DB::fetch_first("SELECT * FROM ".DB::table($this->_get_table($key))." WHERE `key`='$key'");
            if(!$cache) {
                return false;
            }
            $datas[$key] = unserialize(base64_decode($cache['val']));
            if($datas[$key]['life']>0 && ($cache['dateline'] + $datas[$key]['life'] < TIMESTAMP)) {
                $datas[$key]['data'] = false;
            }
        }
        return $datas[$key]['data'];
    }
    function set($key, $val, $life=0) {
        $datas = array(
            'key' => $key,
            'val' => base64_encode(serialize(array('data'=>$val, 'life'=>max(0, (int) $life)))),
            'dateline' => TIMESTAMP,
        );
        $ret = DB::insert($this->_get_table($key), $datas, 0, 1, 1);
        return $ret;
    }
    function del($key, $more=0) {
        if($more) {
            $key = (false === strpos($key, '%') ? "{$key}%" : $key);
            $ret = DB::query("DELETE FROM ".DB::table($this->_get_table($key))." WHERE `key` LIKE '{$key}'");
        } else {
            $ret = DB::query("DELETE FROM ".DB::table($this->_get_table($key))." WHERE `key`='{$key}'");
        }
        return $ret;
    }
    function clean() {
        DB::query("TRUNCATE TABLE ".DB::table($this->table));
        if($this->num) {
            for ($i=1; $i<$this->num; $i++) {
                DB::query("TRUNCATE TABLE ".DB::table($this->_sub_table($i)));
            }
        }
    }
    function _get_table($key) {
        if($this->num) {
            $pos = strpos($key, '-');
            if(!$pos) {
                $pos = 4;
            }
            $num = (abs(crc32(substr((string) $key, 0, $pos))) % $this->num);
            return $this->_sub_table($num);
        } else {
            return $this->table;
        }
    }
    function _sub_table($num) {
        if($num) {
            $table = "{$this->table}_{$num}";
        } else {
            $table = $this->table;
        }
        return $table;
    }
}
?>