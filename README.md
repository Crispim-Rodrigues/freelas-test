# **Projeto Frellas**

Este é um projeto simples em PHP que exibe uma cruz e um X. O tamanho da matriz pode ser definido pelo usuário.

## **Requisitos**

* PHP 7.1 ou Superior.
* Composer.
* XAMPP ou outro programa que tenha apache.

## **Instalação**

* Clone este repositório em sua máquina:

~~~git
git clone https://github.com/Crispim-Rodrigues/freelas-test.git
~~~

* Entre no diretorio do projeto:
~~~cmd
cd frellas-test
~~~

* Instale as dependencias com o composer:
~~~composer
composer install
~~~

### **Estrutura de pastas do projeto**

~~~cmd
/frellas-test
    /app
        /Controllers
        /Models
        /Views
    /public
        index.php
    /vendor
~~~

## **Uso**

Você pode executar o projeto de duas formas, uma é pelo proprio XAMPP e a outra é pelo CMD.

### 1. **Executando com o XAMMP:**

  * Inicie o servidor apache.
  * Abra o seu navegador de sua preferencia.
  * Na url da barra de navegação coloque "localhost/frellas-test/public/" ou navegue manualmente pelo "localhost".
  
#### 1.1 **Para mudar o tamanho da Matrix é preciso definir o size na url.**

   * url: 

(http://localhost/frellas-test/public/index.php?size=5) // o tamanho padrão é 5

### 2. **Utilizando o cmd**

  * apague a linha da tag "pre" da função render que está na View para uma melhor visualização:
      * frellas-test/app/Views/MatrixView.php
~~~php
public function render()
    {
        echo '<pre>'; // apague essa linha.
        foreach ($this->matrix as $row) {
            foreach ($row as $cell) {
                echo $cell . " ";
            }
            echo PHP_EOL;
        }
        echo '</pre>'; // apague essa linha.
    }
~~~

  * abra seu cmd da sua IDE e de um CD pasta public
~~~cmd
cd public
~~~
  * execute o projeto com:
~~~cmd
php index.php
~~~

  
  
  
  

   
  
  

