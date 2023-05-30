<?php
// controllers/PizzaController.php

require_once "models/Pizza.php";

class PizzaController {
    public function index() {
        // Exibir o formulário para o usuário fazer um pedido
        include "order_form.php";
    }

    public function save() {
        // Obter os dados do pedido
        $name = $_POST['name'];
        $size = $_POST['size'];
        $telefone = $_POST['telefone'];
        $sabores = implode(',', $_POST['sabores']);
   
        // Criar uma instância do modelo Pizza
        $pizza = new Pizza($name, $size, explode(',', $sabores), $telefone);
   
        // Salvar a pizza no banco de dados (arquivo neste exemplo)
        $this->savePizza($pizza);
   
        // Exibir uma mensagem de sucesso para o usuário
        include "views/success_message.php";
    }
   
    public function list() {
        // Obter todas as pizzas salvas no banco de dados (arquivo neste exemplo)
        $pizzas = $this->getPizzas();
   
        // Exibir a lista de pizzas para o usuário
        include "pizza_list.php";
    }
   
  
   
    private function savePizza($pizza) {
        // Salvar a pizza no banco de dados (arquivo neste exemplo)
        $file = 'database/pizzas.txt';
        $sabores = $pizza->getSabores();
        if (is_array($sabores)) {
            $sabores = implode(',', $sabores);
        } else {
            $sabores = '';
        }
       
        $telefone = $pizza->getTelefone();
       
        $data = $pizza->getName() . '|' . $pizza->getSize() . '|' . $telefone . '|' . $sabores . PHP_EOL;
   
        file_put_contents($file, $data, FILE_APPEND);
    }
   
    private function getPizzas() {
        // Obter todas as pizzas salvas no banco de dados (arquivo neste exemplo)
        $file = 'database/pizzas.txt';
        $pizzas = array();
   
        if (file_exists($file)) {
            $lines = file($file);
   
            foreach ($lines as $line) {
                $data = explode('|', $line);
                $name = trim($data[0]);
                $size = trim($data[1]);
                $telefone = isset($data[2]) ? trim($data[2]) : '';
                $sabores = isset($data[3]) ? trim($data[3]) : '';
           
                $pizza = new Pizza($name, $size, explode(',', $sabores), $telefone);
                $pizzas[] = $pizza;
            }
        }
   
        return $pizzas;
    }
   
    
}
