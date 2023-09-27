<html>
	<head>
		<title>
			Cadastro de veículos
		</title>
	</head>
	<body>
		<form method="post">
			<label for="model">Model:</label>
			<input type="text" name="model" id="model" required>
			<br>
			<br>
			<label for="engine">Engine:</label>
			<input type="text" name="engine" id="engine" required>
			<br>
			<br>
			<label for="year">Year:</label>
			<input type="number" name="year" id="year" required>
			<input type="submit" value="Submit">
		</form>
	</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {

	class Vehicle{
		public $model;
		protected $engine;
		public $typeVehicle;
		public $releaseYear;
		protected $notes;
	}
	class Car extends Vehicle{
		

		
		public function getModel() {
			return $this->model;
		}
	
		public function setModel($model): self {
			$this->model = $model;
			return $this;
		}
	
		public function getEngine() {
			return $this->engine;
		}
	
		public function setEngine($engine): self {
			$this->engine = $engine;
			return $this;
		}

		public function getTypeVehicle() {
			return $this->typeVehicle;
		}
		public function setTypeVehicle($typeVehicle): self {
			$this->typeVehicle = $typeVehicle;
			return $this;
		}
	
		public function getReleaseYear() {
			return $this->releaseYear;
		}
		
		
		public function setReleaseYear($releaseYear): self {
			$this->releaseYear = $releaseYear;
			return $this;
		}
		public function getNotes() {
			return $this->notes;
		}
		public function setNotes($notes): self {
			$this->notes = $notes;
			return $this;
		}
		public function show() {
			echo "<br>";
			echo "<br>";
			echo "Model: " . $this->model;
			echo "<br>";
			echo "Engine: " . $this->engine;
			echo "<br>";
			echo "Type: " . $this->typeVehicle;
			echo "<br>";
			echo "Year: " . $this->releaseYear;
			echo "<br>";
			echo "Notes: " . $this->notes;
	
		}
	}
	$car = new Car();

	
	//esse é um código 
	
	$car->setModel($_POST['model']);
	$car->setEngine($_POST['engine']);
	$car->setReleaseYear($_POST['year']);
	
	$car->show();
	
}

class User {

    public $username;


    public function speak() {
        return "My name is: " . $this->username;


    }

}

    $user = new User();
    $user->username = "Benancora";

  