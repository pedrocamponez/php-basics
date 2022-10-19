<?php 
class Post { 
    public int $likes = 0; //cada linha aqui dentro é uma propriedade da classe - basicamente as características da classe
    public array $comments = [];
    private string $author;

    public function __construct($qtLikes = 0) { //isso é um método construtor
        $this->likes = $qtLikes;
    }

    //criando um método
    public function aumentarLike() {
        $this->likes++;
    }

    public function setAuthor($name) {
        if(strlen($name) >= 3) {
            $this->author = ucfirst($name);
        }
        //encapsulamento serve para tratar a variável antes de usá-la.
        //por exemplo: coloquei a primeira letra para sempre ser maiúscula e só exibir author se tiver 3 ou mais characters.
    }

    public function getAuthor() {
        return $this->author ?? ''; //passo um operador 'se tiver author, usa ele, se nao, manda ''
    }
}

$post1 = new Post(); //isso é um objeto. que assume as propriedades da classe
$post1->likes = 1;
//usando o método:
$post1->aumentarLike();

$post2 = new Post();
$post2->likes = 10;

//propriedades tipadas (linha 3)
$post3 = new Post();
$post3->likes = 'Pedro'; 
//ela está aceitando String, mas se tipamos ela não aceita mais. pra tipar, eh só colocar na classe 'public INT $likes' 

//método construtor - linha 7
//é um método que executa TODA VEZ que cria um objeto novo - usado para definir as propriedades iniciais de um objeto
$post4 = new Post(20); //o parâmetro passado é do construtor, para a quantidade inicial de likes

//encapsulamento - proteger as propriedades de modificações externas que podem prejudicar as ações daquele objeto
//SET e GET
$post5 = new Post();
$post5->setAuthor('Pedro');
echo 'Post 5: '.$post5->getAuthor(); //com isso, posso deixar a propriedade PRIVADA, já q nao uso $author e sim getAuthor();