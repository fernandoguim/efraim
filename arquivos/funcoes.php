<?php  

function replacescar($data){
   // matriz de entrada
    $what = array( 'ä','ã','à','á','â','ê','ë','è','é','ï','ì','í','ö','õ','ò','ó','ô','ü','ù','ú','û','À','Á','É','Í','Ó','Ú','ñ','Ñ','ç','Ç',' ','-','(',')',',',';',':','|','!','"','#','$','%','&','/','=','?','~','^','>','<','ª','º' );

    // matriz de saída
    $by   = array( 'a','a','a','a','a','e','e','e','e','i','i','i','o','o','o','o','o','u','u','u','u','A','A','E','I','O','U','n','n','c','C',' ','-','(',')',',',',',';',':','|','"_"','_','#','$','%','&','/','=','?',' ',' ','>','<',' ','_' );

    // devolver a string
    return str_replace($what, $by, $data);
	 
 }
 
  function dataagend($data){
	
 $string = explode("/",$data);
	
 $datacomp = $string[1]."/".$string[0]."/".$string[2];

	
 return $datacomp;	
	
 }
   function dataedit($data){
	
 $string = explode("-",$data);
	
 $datacomp = $string[0].$string[1] ;

	
 return $datacomp;	
	
 }
 
 function retornaData($data){
	
 $string = explode(" ",$data);
	
 $Data   = $string[0];

	
 return $Data;	
	
 }

   
 
  function retornaAno($data){
	
 $string = explode("-",$data);
	
 $ano   = $string[0];

	
 return $ano;	
	
 }
 
   function retornaMes($data){
	
 $string = explode("-",$data);
	
 $ano   = $string[1];

	
 return $ano;	
	
 }
 
    function retornaDias($data){
	
 $string = explode("-",$data);
	
 $ano   = $string[2];

	
 return $ano;	
	
 }
	
 function retornaHora($data){
	
 $string = explode(" ",$data);
	
 $Hora   = $string[1];

	
 return $Hora;	
	
 }
	
	
 function format_data($data){
	
 $Data=  retornaData($data);
 $Hora=	retornaHora($data);
	
 $string   = explode("-",$Data);
	
 $new_data = $string[2]."/".$string[1]."/".$string[0]." ".$Hora;

 return $new_data;

 }
  function datahora($data){
	
 $Data=  retornaData($data);
 $Hora=	retornaHora($data);
	
 $string   = explode("-",$Data);
	
 $new_data = $string[2]."/".$string[1]." ".$Hora;

 return $new_data;

 }
 
 function horas($data){
	
 $Data=  retornaData($data);
 $Hora=	retornaHora($data);
	
 $string   = explode("-",$Data);
	
 $new_data = $Hora;

 return $new_data;

 }
 
  function dataResumida($data){
		
 $string   = explode("/",$data);
	
 $new_data = $string[0]."/".$string[1];

 return $new_data;

 }
 
 
  function dataUsual($data){
	
  if($data<>''){	
	
  $string = explode("-",$data);
	
  $data = $string[2]."/".$string[1]."/".$string[0];
  
  }

  return $data;

  }
  
  function dataDB($data){
	  
	if($data<>NULL){  
	
  $string = explode("/",$data);
	
  $data = $string[2]."-".$string[1]."-".$string[0];
  
	}

  return $data;

  }
  
  function recortaNome($nome){
	   
	$string = explode(" ",$nome);
    
	$tamanho = strlen($string[1]);
	
	if($tamanho<=3){
		
	$Nome = ucwords(strtolower($string[0]))." ".ucwords(strtolower($string[1]))." ".ucwords(strtolower($string[2]));
		
		
	}else{
		
	$Nome = ucwords(strtolower($string[0]))." ".ucwords(strtolower($string[1]));	
		
	}
	
	return $Nome;
	
	   
	   
   }
   
     function recortaNome2($nome){
	   
	$string = explode(" ",$nome);
    
	$tamanho = strlen($string[2]);
	
	if($tamanho<=3){
		
	$Nome = ucwords(strtolower($string[0]))." ".ucwords(strtolower($string[1]))." ".ucwords(strtolower($string[2]))." ".ucwords(strtolower($string[3]));
		
		
	}else{
		
	$Nome = ucwords(strtolower($string[0]))." ".ucwords(strtolower($string[1]))." ".ucwords(strtolower($string[2]));	
		
	}
	
	return $Nome;
	
	   
	   
   }


  function recortaNome3($nome){
	   
	$string = explode(" ",$nome);
    
	$tamanho = strlen($string[1]);
	
	if($tamanho<=3){
		
	$Nome = $string[0]; #." ".$string[1]." ".$string[2];
		
		
	}else{
		
	$Nome = $string[0]; #." ".$string[1];	
		
	}
	
	return $Nome;
	
	   
	   
   }



	
	
 function prazo($dataini, $datafim) {
 
 # Split para dia, mes, ano, hora, minuto e segundo da data inicial
 $_split_datehour = explode(' ',$dataini);
 $_split_data = explode("/", $_split_datehour[0]);
 $_split_hour = explode(":", $_split_datehour[1]);
 # Coloquei o parse (integer) caso o timestamp nao tenha os segundos, dai ele fica como 0
 $dtini = mktime ($_split_hour[0], $_split_hour[1], (integer)$_split_hour[2], $_split_data[1], $_split_data[0], $_split_data[2]);
 
 # Split para dia, mes, ano, hora, minuto e segundo da data final
 $_split_datehour = explode(' ',$datafim);
 $_split_data = explode("/", $_split_datehour[0]);
 $_split_hour = explode(":", $_split_datehour[1]);
 $dtfim = mktime ($_split_hour[0], $_split_hour[1], (integer)$_split_hour[2], $_split_data[1], $_split_data[0], $_split_data[2]);
 
 # Diminui a datafim que é a maior com a dataini
 $time = ($dtfim - $dtini);
 
 # Recupera os dias
 $days  = floor($time/86400);
 # Recupera as horas
 $hours = floor(($time-($days*86400))/3600);
 # Recupera os minutos
 $mins  = floor(($time-($days*86400)-($hours*3600))/60);
 # Recupera os segundos
 $secs  = floor($time-($days*86400)-($hours*3600)-($mins*60));
 
 # Monta o retorno no formato
 # 5d 10h 15m 20s
 # somente se os itens forem maior que zero
 $retorno  = "";
 $retorno .= ($days>0)  ?  $days : "";
 #$retorno .= ($hours>0) ?  $hours .'h ': ""  ;
 #$retorno .= ($mins>0)  ?  $mins .'m ' : ""  ;
 #$retorno .= ($secs>0)  ?  $secs .'s ' : ""  ;  nao tratarei os segundos 
 

 return $retorno;
 
 }
 

 function diferencaDias($data1,$data2){
	 
#$data1 = '2009-03-23';
#$data2 = '2009-11-04';

 if($data2==null or $data2=='0000-00-00'){
 $dias = '-';
 }else{	
 
 $time_inicial = strtotime($data1);
$time_final = strtotime($data2);
// Calcula a diferença de segundos entre as duas datas:
$diferenca = $time_final - $time_inicial; // 19522800 segundos
// Calcula a diferença de dias
$dias = (int)floor( $diferenca / (60 * 60 * 24)); // 225 dias

}

return $dias;

 }
 
  
 
 
 function Semana($data) {

if($data<>""){	
	
$rs = strftime('%w',strtotime($data));
switch($rs) {
case "0": $s = "DOMINGO"; break;
case "1": $s = "SEGUNDA"; break;
case "2": $s = "TERCA"; break;
case "3": $s = "QUARTA"; break;
case "4": $s = "QUINTA"; break;
case "5": $s = "SEXTA"; break;
case "6": $s = "SABADO"; break;
}

}

return $s;
}


function SemanaR($data) {

if($data<>""){	
	
$rs = strftime('%w',strtotime($data));
switch($rs) {
case "0": $s = "dom"; break;
case "1": $s = "seg"; break;
case "2": $s = "ter"; break;
case "3": $s = "qua"; break;
case "4": $s = "qui"; break;
case "5": $s = "sex"; break;
case "6": $s = "sab"; break;
}

}

return $s;
}


	function filtro($string){
		
		
	$string = str_replace("'","",$string);
	
	$string =str_replace("Ã","A",$string);
	$string =str_replace("Á","A",$string);
	$string =str_replace("Ç","C",$string);
	$string =str_replace("É","E",$string);
	$string =str_replace("Õ","O",$string);
	$string =str_replace("Ó","O",$string);
	$string =str_replace("Ê","E",$string);
	$string =str_replace("Í","I",$string);
	$string =str_replace("Ê","E",$string);
	$string =str_replace("Ú","U",$string);
	
	$string =str_replace("ã","a",$string);
	$string =str_replace("á","a",$string);
	$string =str_replace("í","i",$string);
	$string =str_replace("ú","u",$string);
	$string =str_replace("ç","c",$string);
	$string =str_replace("ó","o",$string);
	$string =str_replace("ô","o",$string);
	$string =str_replace("é","e",$string);
	$string =str_replace("ê","e",$string);
	
	$string =str_replace("'","",$string);
	$string =str_replace(";","",$string);
	$string =str_replace("/","",$string);
	
	return $string;	
		
		
	}
	
	
	function longitude($string){
		
		
	$string = str_replace(".","",$string);
	
	$string2 = $string{0}.$string{1}.".".substr($string,2); 
	
	return $string2;	
		
		
	}
	
	
	function latitude($string){
		
		
	$string = str_replace(".","",$string);
	
	$string2 = $string{0}.$string{1}.$string{2}.".".substr($string,3); 
	
	return $string2;	
		
		
	}


function getMes($mes){
	 

	 if($mes=="1"){
		
	$m = "JANEIRO";	
		 
	 }elseif($mes=="2"){
		 
	$m = "FEVEREIRO";
	
	 }elseif($mes=="3"){
		
$m = "MARCO";			
		 
	 }elseif($mes=="4"){
		 
		 $m = "ABRIL";	
		 
		 
	 }elseif($mes=="5"){
		 
		 $m = "MAIO";	
		 
		 
	 }elseif($mes=="6"){
		 
		 $m = "JUNHO";	
		 
		 
	 }elseif($mes=="7"){
		 
		 $m = "JULHO";	
		 
		 
	 }elseif($mes=="8"){
		 
		 $m = "AGOSTO";	
		 
		 
	 }elseif($mes=="9"){
		 
		 $m = "SETEMBRO";
		 
		 
	 }elseif($mes=="10"){
	
$m = "OUTUBRO";		
		 
	 }elseif($mes=="11"){
		 
		 $m = "NOVEMBRO";	
		 
		 
	 }elseif($mes=="12"){
	
$m = "DEZEMBRO";		
		 
	 }
	 
	 return $m;
	 
	 
 }
 
 
 function getMesResumido($mes){
	 

	 if($mes=="1"){
		
	$m = "Jan";	
		 
	 }elseif($mes=="2"){
		 
	$m = "Fev";
	
	 }elseif($mes=="3"){
		
$m = "Mar";			
		 
	 }elseif($mes=="4"){
		 
		 $m = "Abr";	
		 
		 
	 }elseif($mes=="5"){
		 
		 $m = "Mai";	
		 
		 
	 }elseif($mes=="6"){
		 
		 $m = "Jun";	
		 
		 
	 }elseif($mes=="7"){
		 
		 $m = "Jul";	
		 
		 
	 }elseif($mes=="8"){
		 
		 $m = "Ago";	
		 
		 
	 }elseif($mes=="9"){
		 
		 $m = "Set";
		 
		 
	 }elseif($mes=="10"){
	
$m = "Out";		
		 
	 }elseif($mes=="11"){
		 
		 $m = "Nov";	
		 
		 
	 }elseif($mes=="12"){
	
$m = "Dez";		
		 
	 }
	 
	 return $m;
	 
	 
 }
 
 
 
 function dias_uteis($mes,$ano){
  

$ultimo_dia = date("t", mktime(0,0,0,$mes,'01',$ano)); // Mágica, plim!

$dataInicio = $ano."-".$mes."-01";

for($i=0;$i<$ultimo_dia;$i++){
	
$dia = date('Y-m-d', strtotime("+$i days",strtotime($dataInicio)));	

if(Semana($dia)=="SABADO" or Semana($dia)=="DOMINGO"){
	
null;	
	
}else{

$cont++;	
	
}	
	
	
}

return $cont;
  

}


function format($string){
	
$string3 = 	$string;		
$string3 = str_replace("/","",$string3);	
$string3 = str_replace("-","",$string3);
$string3 = str_replace("A","",$string3);
$string3 = str_replace("Y","",$string3);
$string3 = str_replace("B","",$string3);
$string3 = str_replace("C","",$string3);
$string3 = str_replace("D","",$string3);
$string3 = str_replace("E","",$string3);
$string3 = str_replace("F","",$string3);
$string3 = str_replace("G","",$string3);
$string3 = str_replace("H","",$string3);
$string3 = str_replace("I","",$string3);
$string3 = str_replace("J","",$string3);
$string3 = str_replace("L","",$string3);
$string3 = str_replace("M","",$string3);
$string3 = str_replace("N","",$string3);
$string3 = str_replace("O","",$string3);
$string3 = str_replace("P","",$string3);
$string3 = str_replace("Q","",$string3);
$string3 = str_replace("R","",$string3);
$string3 = str_replace("S","",$string3);
$string3 = str_replace("T","",$string3);
$string3 = str_replace("U","",$string3);
$string3 = str_replace("V","",$string3);
$string3 = str_replace("X","",$string3);
$string3 = str_replace("Z","",$string3);
$string3 = str_replace("W","",$string3);
$string3 = str_replace("K","",$string3);
$string3 = str_replace("º","",$string3);
$string3 = str_replace("$","",$string3);
	
return $string3;	
	
	
}

function formatMes($mes){

$count = strlen($mes);
if($count==1){
$mes = '0'.$mes;		
}else{
$mes = $mes;	
}

return $mes;	
	
}

function formatNumber($valor){
	
$valor = str_replace(".",'',$valor);	
$valor = str_replace(",",'.',$valor);

$valor = number_format($valor,2,",",".");

return $valor;
	
}

function formatNumberDB($valor){
	
$valor = str_replace(",",'.',$valor);

return $valor;
	
}


function getMarca($idMarca){

$sql = new SQL("select nome from fabricante where id='$idMarca'");

return strtoupper($sql->getCampo('nome'));

}

function getModelo($idModelo){

$sql = new SQL("select nome from modelo where id='$idModelo'");

return strtoupper($sql->getCampo('nome'));

}
?>