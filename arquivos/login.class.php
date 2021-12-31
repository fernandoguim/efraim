<?php session_start();
class Logar {
public function Login($usuario,$pwd){
 
	require 'config.php'; 
		global $pdo;

		$sql = $pdo -> prepare("SELECT * FROM usuarios WHERE usuario = :usuario and pwd = :pwd and status <> 'DESATIVADO' ");
		$sql->bindValue(":usuario", $usuario);
		$sql->bindValue(":pwd", $pwd );
		$sql->execute();

		if ($sql->rowcount() > 0) {
		 	
			$dado = $sql->fetch();
		  
			$_SESSION['sistema'] = $dado['sistema']; // aqui armazena qual sistema o usuario logou
			$_SESSION['matricula'] = $dado['matricula'];
			$_SESSION['Nome'] = $dado['Nome'];
			$_SESSION['usuario'] = $dado['usuario'];
			$_SESSION['pwd'] = $dado['pwd'];
			$_SESSION['id'] = $dado['id'];
			$_SESSION['email'] = $dado['email'];
			$_SESSION['nivelAcesso'] = $dado['nivelAcesso'];
			$_SESSION['Cargo'] = $dado['Cargo'];
			$_SESSION['regional'] = $dado['regional'];
			$_SESSION['diretorioFoto'] = $dado['diretorioFoto'];
			$_SESSION['ultimoAcesso'] = $dado['ultimoAcesso'];
			$_SESSION['sistema'] = $dado['sistema'];
			$_SESSION['datapagamento'] = $dado['datapagamento'];
			$_SESSION['parceiro'] = $dado['parceiro'];
			$_SESSION['cnpj'] = $dado['cnpj'];
		         $datahora = date('Y-m-d H:i:s');
		        
       $inserirlogin = $pdo->prepare("INSERT INTO pagina_login (usuario, nome, data, cargo, parceiro) VALUES ('".$_SESSION['usuario']."','".$_SESSION['Nome']."','".$datahora."','".$_SESSION['Cargo']."','".$_SESSION['parceiro']."')");
       $inserirlogin ->execute();
       
        $updateusuario= $pdo->prepare("UPDATE usuarios SET ultimoAcesso= '".$datahora."' WHERE usuario= :usuario ");
        $updateusuario->bindValue(":usuario", $usuario);
  	    $updateusuario->execute();
       
                
		   	return true;
		   	 	
		   
		}else{
			return false;
		}
		
}	
		

	}
	
	
 

	?>