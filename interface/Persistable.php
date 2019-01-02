<?php

/*

*/

interface Persistable {
    public function save();
    public function load();
    public function delete();
}
?>