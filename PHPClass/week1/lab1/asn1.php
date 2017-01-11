<?php
//Web Development using PHP 
//Assignment 1
//North Pagliarini

//------------------------------------------------------------------------------------------------------
//Open the table row, Table Body, and Table tags
echo "<table>
		<tbody>";
//For Loop (Vertical 10)
for ($row = 0; $row <= 10; $row++)
{	
	echo "<tr>" ;
	//For Loop (Horizontal 10)
	for ($column = 0; $column <= 10; $column++)
	{
		$color = ""; //Reset Hex Number
		
		//For loop to generate Hex value
		for ($numgen = 0; $numgen <= 5; $numgen++)
		{	
			$Num1 = rand (0, 15 );	//Gimmie a Number between 0 & 15 and store in $Num1
			switch ($Num1) 
			{
				case 10:
					$Num1 = "A";	//If 10 set Num to the Hex Equivalent (A)
					break;
				case 11:	
					$Num1 = "B";	//If 11 set Num to the Hex Equivalent (B)
					break;
				case 12:
					$Num1 = "C"; 	//If 12 set Num to the Hex Equivalent (C)
				break;
				case 13:
					$Num1 = "D";	//If 13 set Num to the Hex Equivalent (D)
					break;
				case 14:
					$Num1 = "E";	//If 10 set Num to the Hex Equivalent (E)
					break;
				case 15:
					$Num1 = "F";	//If 10 set Num to the Hex Equivalent (F)
					break;
				default:
					$Num1 = $Num1;	//If not 10-15, then set to it's Respective Number
			}
			$color = "$color" . "$Num1";	//Add value to the Six digit Hex Value
		}
		$color = "#" . "$color";	//Add the # symbol
		
		//Add the hex Value to the Table
		//The #000000 hex is for the text color displaying the Hex Value in black
		//The #ffffff hex is for the text color displaying the Hex Value in white
		echo "		<td style='background-color: $color;'>
                $color   <span style='color: #ffffff'>	
				$color   <span style='color: #000000;'>	
                 </span> 				</td>";
			
	}
}

//Close the table row, Table Body, and Table tags
echo "</tr>
		</tbody>
	</table>";
?>