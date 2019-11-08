<?php

class RegistrosMysql {

    var $registros;

    function getPrimerRegistroObjeto() {
        mysql_data_seek($this->registros, 0);
        return mysqli_fetch_object($this->registros);
    }

    function getSiguienteRegistroObjeto() {
        return mysqli_fetch_object($this->registros);
    }

    function getFetchRow() {
        return mysqli_fetch_row($this->registros);
    }

    function getAssoc() {
        return mysqli_fetch_assoc($this->registros);
    }

    function RegistroMysql($registros) {
        $this->registros = $registros;
        return;
    }

    function __construct($registros) {

        $this->registros = $registros;
        return;
    }

    function getNumRegistros() {
        return mysqli_num_rows($this->registros);
    }

    function buscar($indexRegistros) {
        return mysqli_data_seek($this->registros, $indexRegistros);
    }

    function getPrimerRegistro() {
        mysql_data_seek($this->registros, 0);
        return mysqli_fetch_array($this->registros);
    }

    function getSiguienteRegistro() {
        return mysqli_fetch_array($this->registros);
    }

    function getUltimoRegistro() {
        mysqli_data_seek($this->registros, mysql_num_rows($this->registros) - 1);
    }

    function Limpiar() {
        return mysqli_free_result($this->registros);
    }

}

?>
