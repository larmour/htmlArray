<?php
class htmlTable {
	
	protected $html= array();
	
	public function create_array($sum_num) {
        
		
		$t = array();
		
				
				for ($i = 0; $i < $sum_num; $i++){
					 
						if($i ==0)
							$t[] = array ( 'Last Name' => 'Armour', 'First Name' => 'Lindsey',, 'Email' => 'la95@njit.edu');
						elseif($i ==1)
							$t[] = array ('Last Name' => 'Davis', 'First Name' => 'Jace',, 'Email' => 'jnd5@njit.edu');
						elseif($i ==2)
							$t[] = array ('Last Name' => 'Masidon', 'First Name' => 'Justin',, 'Email' => 'jm3@njit.edu');
						
						else 
							$t[] = array ('Last Name' => 'lastname', 'First Name' => 'firstname',, 'Email' => 'email');
			}
				return $t;
	}
	
	
}
$html = new tableArray();
$number =5;
($html->create_array($number));
?>
<html lang = "en">
	    
		<head>
		
			<title>HTML Table Array</title>
				<meta charset = "utf-8">
				<meta name = "description" content="Table array:names, last names, UCID and Major">
				<link rel = "stylesheet" type ="text/css" href = "styles.css">
		
		</head>
		
		<body>
		
		
			<main>
					<table class = "gradienttable">
						<thead>
								<tr>
									<th><?php echo implode('</th><th>', array_keys(current($html->create_array($numbers)))); ?></th>
								</tr>
						</thead>
						
						<tbody>
							<?php foreach ($htmle->create_array($number) as $row): array_map('htmlentities', $row); ?>
								<tr>
									<td><?php echo implode('</td><td>', $row); ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>	
					</table>	
			</main>
	
		
	    
		
		
		
		</body>
	
?>

