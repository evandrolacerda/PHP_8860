<?php

namespace EPL;

include('config_db.php');

/**
 * Description of classDatabase
 *
 * @author Administrador
 */
class Database {

    protected static $instance  = null;
    private $sDbType            = '';
    private $sHost              = '';
    private $sUser              = '';
    private $sPassword          = '';
    private $sDatabase          = '';
    protected $pdoData            = null;
    private $bStatus            = false;
    private $sError             = "";
    private $pdoStatement       = null;
    private $bQryStatus         = false;
    private $recordSet          = array();
    
    

    protected function Database() {
        $this->sDbType      = TYPE;
        $this->sHost        = HOST;
        $this->sUser        = USER;
        $this->sPassword    = PASS;
        $this->sDatabase    = DBNM;
        $this->connect();
    }

    /* private function Database() */

    private function connect() {
        $sDSN = "$this->sDbType:host=$this->sHost;dbname=$this->sDatabase;charset=utf8";

        try {
            $this->pdoData = new \PDO($sDSN, $this->sUser, $this->sPassword);
            
            $this->pdoData->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdoData->query("SET NAMES utf8");
            $this->bStatus = true;
        } catch (PDOException $e) {
            $this->sError = $e->getMessage();
        }
    }

    /* private function connect() */

    public static function Instance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
    }

    /* public static function Instance() */

    public function getStatus() {
        return $this->bStatus;
    }

    /* public function getStatus() */

    public function getError() {
        return $this->sError;
    }

    /* public function getError() */

    protected function select($sSQL) {
        try {
            $this->pdoStatement = $this->pdoData->query($sSQL,\PDO::FETCH_ASSOC);
            $this->pdoStatement->setFetchMode(\PDO::FETCH_OBJ);
            $this->bQryStatus = true;
        } catch (PDOException $ex) {
            $this->sError = 'Erro ao executar query ' . $sSQL . ': <br /> ' . $ex->getMessage();
            $this->bQryStatus = false;
        }
    }
    
    public function execute( $preSql, $aValues ){
        try{
            $this->pdoStatement = $this->pdoData->prepare( $preSql );
            $this->pdoStatement->execute( $aValues );
            $this->bQryStatus = true;
            
        } catch (\PDOException $ex) {
            throw new \Exception("Erro ao inserir dados no banco de dados: " . $ex->getMessage() );
        }
    }  
    

    public function getQryStatus() {
        return $this->bQryStatus;
    }

    public function getRecord() {
        return $this->pdoStatement->fetch();
    }
    
    public function getRecordSet(){
        return $this->pdoStatement->fetchAll();
    }

}


class NWDatabase extends Database
{
    private $columns = array();
    private $table;
    
    private function __construct( ) {
        parent::Database();    
        
    }
    
    public function column( $column )
    {
        if(is_array( $column ) )
        {
            array_merge( $this->columns, $column );
        }else{
            $this->columns[] = $column;
        }
    }
    
    public function setTable( $tableName )
    {
        $this->table = $tableName;
    }
    


    public static function Instance() {
        if (self::$instance == null) {
            self::$instance = new self;
        }

        return self::$instance;
    }
    
    
    private function getColumns()
    {
        $columns = '*';
        if( count( $this->columns ) > 0 ){
            $columns = implode(',', $this->columns );
        }
        
        return $columns;
    }
    public function selectTable( $table )
    {
        $columns = $this->getColumns();
        $this->select( sprintf("SELECT %s FROM %s", $columns, $table ) );
    }
    
    public function insertProduct( $aValues )
    {
        $sql = "INSERT INTO products ( CategoryId, Discontinued, ProductName, QuantityPerUnit, "
                . "ReorderLevel, SupplierId, UnitPrice, UnitsInStock, UnitsOnOrder  )"
                . "VALUES( ?, ?, ?, ? ,?, ?, ?, ?, ?)";
        
        try{
            $stmt = $this->pdoData->prepare( $sql );
            
        } catch (PDOException $ex) {

        }
    }
    
    public function updateProduct()
    {
        
    }
    
    
}






















