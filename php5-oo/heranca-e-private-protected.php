<?php
class Post {
    protected int $id; //Quando é protected, pode acessar e alterar a variável em classes que herdaram ela (por ex: em Foto)
    private int $likes = 0; //Quando é private, a variável só pode ser alterada dentro da mesma classe q foi declarada.

    protected function setId ($i) {
        $this->id = $i;
    }
    public function getId () {
        return $this->id;
    }

    public function setLikes($n) {
        $this->likes = $n;
    }
    public function getLikes () {
        return $this->likes;
    }

}
class Foto extends Post { //Foto herda tudo que tem em Post e pode colocar mais coisas específicas de Foto.
    private $url;

    public function __construct($id) {
        $this->setId($id);
    }
    
    public function setUrl($u) {
        $this->url = $u;
    }
    public function getUrl() {
        return $this->url;
    }
}
class Texto extends Post {
    private $body;

    public function setBody($b) {
        $this->body = $b;
    }
    public function getBody() {
        return $this->body;
    }
}