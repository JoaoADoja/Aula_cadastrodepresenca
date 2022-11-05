<?php 

include_once(__DIR__.'/../vendor/autoload.php');

echo date("d-M-Y");
echo "<p>";

use App\Model\Pessoa;
use App\Persistence\ConnectionFactory;
use App\DTOS\SensorDTO;

new Pessoa();
$connFactory = new ConnectionFactory();
$conn = $connFactory-> getInstance();

$sqlUseDB = "USE conexaophp;";
$stmt = $conn->query($sqlUseDB);

$sensorDTO_1 = new SensorDTO(30, 300);
$sensorDTO_2 = new SensorDTO(40, 400);

$sqlInsertData = "INSERT INTO clima_tempo (temperatura, umidade) VALUES ";
$conn->exec($sqlInsertData."(".$sensorDTO_1->_temperatura.",".$sensorDTO_1->_umidade.");");
$conn->exec($sqlInsertData."(".$sensorDTO_2->_temperatura.",".$sensorDTO_2->_umidade.");");

$sqlSelectData = "SELECT * FROM clima_tempo;";

$stmt = $conn->query($sqlSelectData);
$sensorDataArr = $stmt->fetchAll(\PDO::FETCH_ASSOC);

echo "<br></br>temperatura -- umidade <br></br>";

foreach($sensorDataArr as $sensorData){
    echo "<br></br>".$sensorData['temperatura']." -- ".$sensorData['umidade'];
}