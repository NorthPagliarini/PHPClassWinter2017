<?php
echo "<table>
		<tbody>";
for ($row = 0; $row <= 10; $row++)
{	
	echo "<tr>" ;
	for ($column = 0; $column <= 10; $column++)
	{
		$color = "";
		for ($numgen = 0; $numgen <= 5; $numgen++)
		{	
			$Num1 = rand (0, 15 );
			switch ($Num1) 
			{
				case 10:
					$Num1 = "A";
					break;
				case 11:	
					$Num1 = "B";
					break;
				case 12:
					$Num1 = "C";
				break;
				case 13:
					$Num1 = "D";
					break;
				case 14:
					$Num1 = "E";
					break;
				case 15:
					$Num1 = "F";
					break;
				default:
					$Num1 = $Num1;
			}
			$color = "$color" . "$Num1";
		}
		$color = "#" . "$color";
		
		echo "		<td style='background-color: $color;'>
                $color   <span style='color: $color'>
				$color   <span style='color: #ffffff;'>
                 </span> 				</td>";
			
	}
}
echo "</tr>
		</tbody>
	</table>";
?>