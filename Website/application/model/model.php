<?php
class Model {
	// Property declaration, in this case we are declaring a variable or handeler that points to the database connection, this will become a PDO object
	public $dbhandle;
	
	// Method to create database connection using PHP Data Objects (PDO) as the interface to SQLite
	public function __construct()
	{
		// Set up the database source name (DSN)
		$dsn = 'sqlite:./db/test1.db';
		
		// Then create a connection to a database with the PDO() function
		try {	
			// Change connection string for different databases, currently using SQLite
			$this->dbhandle = new PDO($dsn, 'user', 'password', array(
    													PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    													PDO::ATTR_EMULATE_PREPARES => false,
														));
			// $this->dbhandle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// echo 'Database connection created</br></br>';
		}
		catch (PDOEXception $e) {
			echo "I CANT CONNECT TO THE DATABASE";
			// Generate an error message if the connection fails
        	print new Exception($e->getMessage());
    	}
	}
	
	public function dbCreateTable()
	{
		try {
			$this->dbhandle->exec("CREATE TABLE Data_Table (Id INTEGER PRIMARY KEY, modelName TEXT, modelMethod TEXT, modelDate TEXT, modelDynasty TEXT, modelMedium TEXT, modelDimensions TEXT, historyEra TEXT, historyDetails TEXT)");
			return "Data_Table table is successfully created inside test1.db file";
		}
		catch (PD0EXception $e){
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	
	public function dbInsertData()
	{
		try{
			$this->dbhandle->exec(
			"INSERT INTO Data_Table (Id, modelName, modelMethod, modelDate, modelDynasty, modelMedium, modelDimensions, historyEra, historyDetails) 
				VALUES (1, 'Cockscomb Bottle', 'This X3D model has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online. Write here about how you created the geometry of the model. Write here about the method you used to texture the matieral of the model.', 'Date: 11th-12th Century','Dynasty: Northen Qi','Medium: Earthenware with yellow lead glaze','Dimensions: 9 5/16 x 4 15/16 inches (23.7 x 12.5 cm)','Ancient (Pre 600AD)','The history of Chinese ceramics can be traced back to over ten thousand years ago. During the Yangshao culture of the Neolithic age, earthenware with color decoration as well as red or white-bodied ware were made, and later in the Longshan culture, production of black ware flourished. In the Shang dynasty, ash-glazed ware which are also known as proto celadon began to appear and from the end of the Spring and Autumn period to the Warring States period, hard-bodied, high-fired pottery with impressed decoration and ash-glazed ware were fired. By the Warring States period, gray ware with or without color decoration were produced in large quantities, one of the leading examples being the terracotta warriors excavated from the tomb of Emperor Qin Shihuangdi. While low-fired lead-glazed ware, primarily funerary objects, developed during the Eastern Han dynasty, genuine celadon began to be fired at Yue kiln in northern Zhejiang Province, which later from the Three Kingdoms to the Southern Dynasties developed into its own distinctive form, such as a soul vase (hunping) or an ewer with a chicken-headed spout. In northern China, lead-glazed ware and celadon were produced during the Northern Dynasty. In the Northern Qi dynasty, lead-glazed ware including the two-colored ware in which a green glaze was poured over a yellow-glazed base, and the well-known three-colored ware were fired, while some other examples that indicate the birth of white porcelain were also observed.'); " .
			"INSERT INTO Data_Table (Id, modelName, modelMethod, modelDate, modelDynasty, modelMedium, modelDimensions, historyEra, historyDetails) 
				VALUES (2, 'Covered Jar', 'This X3D model has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online. Write here about how you created the geometry of the model. Write here about the method you used to texture the matieral of the model.', 'Date: 11th-12th Century','Dynasty: Chenghua Period','Medium: Glazed stoneware with persimmon glaze', 'Dimensions: 6 7/8 x 7 3/8 inches (17.5 x 18.8 cm)','Early (618AD - 1271AD)','Ceramics made in the Tang dynasty reveal multicultural influence in their forms and motifs. A large amount of earthenware with painted decoration and three-color-glazed figurines and dishes were produced. In northern China, production of white porcelain, which had already been made at the Xing kilns since the Sui dynasty, also began at the Ding kilns by the Tang dynasty. In the mean time, celadon was continued to be made at the Yue kilns, and the finest of those made during the late Tang and through the Five Dynasties were referred to as secret color (mise), which became the synonym for celadon. At Changsha kilns, ewers and basins decorated with underglaze copper and iron were fired extensively and some of them were exported overseas.\nDuring the Northern Song dynasty, Ding white porcelain, characterized by the ivory glaze and the elegant carving which produces a three-dimensional effect, became popular and provided considerable influence on kilns in various regions. Yaozhou kilns were producing their distinct celadon known for its olive-green-colored glaze. At the Ru kilns in Henan Province, elegant celadon for court use that inspired the later Jun ware was produced. The so-called Cizhou-type kilns widely spread over the Hebei, Henan and Shanxi Provinces and fired diverse wares, making efficient use of white slip. In the Southern Song dynasty, the Guan or official kilns were established in Linan (present day Hangzhou), producing celadon known for the thick glaze and black clay body. Different types of wares were produced in various regions of China during this period, each kiln displaying its individual quality. Some of them had been popular in Japan including tenmoku tea bowls from the Jian and Jizhou kilns and qingbai ware from Jingdezhen.'); " .
			"INSERT INTO Data_Table (Id, modelName, modelMethod, modelDate, modelDynasty, modelMedium, modelDimensions, historyEra, historyDetails) 
				VALUES (3, 'Vase', 'This X3D model has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online. Write here about how you created the geometry of the model. Write here about the method you used to texture the matieral of the model.', 'Date: 14th-15th Century','Dynasty: Northen Qi','Medium: Glazed stoneware (Cizhou-type ware)', 'Dimensions: 9 5/8 x 3 7/16 inches (24.4 x 8.8 cm)','Medieval (1271AD - 1522AD)','During the Yuan dynasty the technique of producing blue-and-white ware was perfected, while underglaze copper-red ware using copper-oxide pigment also began to appear. Blue-and-white ware as well as Longquan ware was exported in large quantities to the Middle and Near East and other overseas countries.\nAt the beginning of the Ming dynasty, yuqichang or official kiln was established in Jingdezhen to produce ceramics to be used exclusively by the court. During the Hongwu reign (1368-1398), the shortage in cobalt blue from the Islamic region due to the ban of overseas trading led to the development of underglaze copper-red painted ware. Importation of cobalt blue pigment resumed in the Yongle reign (1403-1424) and by the Xuande reign (1426-1435) ceramic production flourished as a result of experimentation of diverse new production techniques. In the Chenghua reign (1465-1487), wares began to reach a high degree of perfection which can be exemplified by the fine small bowls and dishes as well as doucai, a decorative technique in which the motifs were outlined in underglaze blue and colored in overglaze enamel.'); " .
			"INSERT INTO Data_Table (Id, modelName, modelMethod, modelDate, modelDynasty, modelMedium, modelDimensions, historyEra, historyDetails) 
				VALUES (4, 'Bottle', 'This X3D model has been created in 3ds Max, exported to VRML97 and converted, using the instantreality transcoders, to X3D for display online. Write here about how you created the geometry of the model. Write here about the method you used to texture the matieral of the model.', 'Date: 18th-19th Century','Dynasty: Qianlong Period','Medium: Glazed porcelain monochrome with tea dust glaze', 'Dimensions: 7 3/8 x 4 5/8 inches (18.7 x 11.7 cm)','Renaissance (1522AD - 1795AD)','From the Jiajing reign (1522-1566), the private kilns which had high production output by that time were commissioned to produce wares for imperial use in order to supplement the production by the yuqichang. The strict regulations on the style of imperial ware were gradually alleviated. Diverse colorful wucai or five-colored ware was developed during this period, which increased in variety even more in the Wanli reign (1573-1620). The private kilns in Jingdezhen, in the mean time, produced wucai wares with gilt decoration known as kinrande and blue-and-white fuyode or carrack style bowls and dishes. By the end of the Ming and through the beginning of the Qing, when the ceramic production at the active private kilns exceeded that of the declining imperial kilns, the former produced wares that suited the taste of their clients overseas.\nYuqichang resumed in the Kangxi reign (1662-1722) of the Qing dynasty, producing more sophisticated wares for imperial use. Production techniques reached its peak during the Yongzheng reign (1723-1735) and the Qianlong reign (1736-1795).'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
	}
	public function dbGetData(){
		try{
			// Prepare a statement to get all records from the Data_Table table
			$sql = 'SELECT * FROM Data_Table';
			// Use PDO query() to query the database with the prepared SQL statement
			$stmt = $this->dbhandle->query($sql);
			// Set up an array to return the results to the view
			$result = null;
			// Set up a variable to index each row of the array
			$i=-0;
			// Use PDO fetch() to retrieve the results from the database using a while loop
			// Use a while loop to loop through the rows	
			while ($data = $stmt->fetch()) {
				// Don't worry about this, it's just a simple test to check we can output a value from the database in a while loop
				// echo '</br>' . $data['modelName'];
				// Write the database conetnts to the results array for sending back to the view
				$result[$i]['modelName'] = $data['modelName'];
				$result[$i]['modelMethod'] = $data['modelMethod'];
				$result[$i]['modelDate'] = $data['modelDate'];
				$result[$i]['modelDynasty'] = $data['modelDynasty'];
				$result[$i]['modelMedium'] = $data['modelMedium'];
				$result[$i]['modelDimensions'] = $data['modelDimensions'];
				$result[$i]['historyEra'] = $data['historyEra'];
				$result[$i]['historyDetails'] = $data['historyDetails'];
				//increment the row index
				$i++;
			}
		}
		catch (PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		// Close the database connection
		$this->dbhandle = NULL;
		// Send the response back to the view
		return $result;
	}

}
?>