<meta charset="UTF-8" />
<?php
/*function exibeNome($nomes){
	if(is_array($nomes)):
		$c = new ArrayIterator($nomes);
		while($c->valid()):
			echo $c->current()."<br />";
			$c->next();
		endwhile;
	else:
		echo "ParÃ¢metro passado nÃ£o Ã© um array";
	endif;
}

exibeNome($nomes = array("Junior" , "Jessica", "Angela", "Eleni", "Thelma"));
*/
$exibeNome = function($nomes){
	if(is_array($nomes)):
		$c = new ArrayIterator($nomes);
		while($c->valid()):
			echo $c->current()."<br />";
			$c->next();
		endwhile;
	else:
		echo "Parâmetro passado não é um array";
	endif;
};

$exibeNome($nomes = array("Junior" , "Jessica", "Angela", "Eleni", "Thelma"));