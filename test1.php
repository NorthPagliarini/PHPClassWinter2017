<?php
echo "<table>
		<tbody>";
for ($numgen = 1; $numgen <= 99999; $numgen++)
{	
	$color = $numgen;
	echo "<tr>" ;
	
	$color = "#" . "$color";
		
		echo "	<td style='background-color: $color;'>
                $color   <span style='color: $color'>
				$color   <span style='color: #ffffff;'>
                 </span> 				</td>";
}
echo "</tr>
		</tbody>
	</table>";
?>