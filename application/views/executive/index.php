<?php 

$arr1=array("Mobile","shop","software","hardware");
				$arr2=array("Mobile","shop","software","shop");
				foreach($arr2 as $val)
				{
					if(in_array($val, $arr1))
					{
						echo "d".'_';
					}
				
				}
			
			
			?>