<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Rubik:ital,wght@0,400;0,500;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>



<nav class="nav">
      <a class="navbar-brand" href="#">
        <img src="imagem/Pizza.png" width="100" height="100" class="logo" alt="">
        <strong class="nomelogo">Pizzaria Pizza</strong>
      </a>
    </nav>

    

    

    <form class="form" action="index.php?action=save" method="post">
        <div class="formBloco">
        
            <label>Nome do cliente:</label>
            <input name="name" type="text" class="form-control" placeholder="Nome">
    


        
                      <label>Telefone:</label>
                      <input name="telefone" type="text" class="form-control" placeholder=" Telefone">
                

<br>
                 

<input type="text" class="form-control" placeholder="CEP"  onblur="getEnderecosCEP(this.value)"/>


<input type="text"   id="lado"class="form-control" id="endereco" placeholder="Endereco" readonly />

<br>
<br/>
<br>
<br/>

<input type="text" id="lado1" class="form-control" id="bairro" placeholder="Bairro" readonly />



<input type="text" id="lado2"class="form-control" id="cidade" placeholder="Cidade" readonly />


<input type="text" id="lado3" class="form-control" id="UF" placeholder="UF" readonly />
<br>
       
            <label for="size">Tamanho:</label>
            <select  class="form-control" name="size">
                <option>Pequena - R$ 27,00</option>
                <option>Média - R$ 35,00</option>
                <option>Grande - R$ 45,00</option>
                <option>Master - R$ 70,00</option>
            </select>
        
        
            <label for="sabores">Sabores:</label>
            <select  class="form-control" class="sabor" id="sabores" name="sabores[]" >
                <option>Marguerita</option>
                <option>Portuguesa</option>
                <option>4 queijos</option>
                <option>Strogonoff</option>
                <option>Baiana</option>
            </select>
        
<br>
        <input class="btn btn-outline-primary" type="submit" value="Fazer Pedido">

      
     

    </form>
</div>
</body>
</html>
