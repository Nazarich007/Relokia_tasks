<?php
function bubble_Sort($my_array)
{
	do
	{
		$swapped = false;
		for( $i = 0; $i < count( $my_array ) - 1; $i++ )
		{
			if( $my_array[$i] > $my_array[$i + 1] )
			{
				list( $my_array[$i + 1], $my_array[$i] ) =
						array( $my_array[$i], $my_array[$i + 1] );
				$swapped = true;
			}
		}
	}
	while( $swapped );
return $my_array;
}
$array =[0 => 7, 1 => 1, 2 => 4, 3 => 2, 4 => 5];
echo "Original Array :<br>";
print_r($array);
echo "<br>Sorted Array :";
print_r(bubble_Sort($array));
