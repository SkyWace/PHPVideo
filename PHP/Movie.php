<?php

require_once 'bdd.php';

class Movie {
    public $id;
    public $title;
    public $image;
    public $link;
    public $synopsis;
    public $pegi;
    public $bdd;

    public function __construct($bdd) {
        $this->bdd = $bdd; 
    }

    public function load($id) {
        
        $select = $this->bdd->prepare ("SELECT mo.id, mo.title, mo.image, mo.link, mi.synopsis, mi.pegi FROM movies AS mo LEFT JOIN movies_infos AS mi ON mo.id = mi.idMovie WHERE mo.id = $id");
        $select->execute();
        $res = $select->fetch(PDO::FETCH_ASSOC);
        return $res;
    }

    public function insert() {
        if (isset($title, $image, $link, $synopsis, $pegi)) {
            $insert1 = $this->bdd->prepare("INSERT INTO movies (title, image, link) VALUES ('title', 'image', 'link')");
            $insert1->execute([
                'title' => $this->title,
                'image' => $this->image,
                'link' => $this->link
            ]);
            $insert2 = $bdd->prepare("INSERT INTO movies_infos (synopsis, pegi) VALUES ('synopsis', 'pegi')");
            $insert2->execute([
                'synopsis' => $this->synopsis,
                'pegi' => $this->pegi
            ]);
        }
    }

    public function update($id) {
        if (isset($id, $title, $image, $link)) {
            $update = $this->bdd->prepare("UPDATE movies SET title='title', image='image', link='link' WHERE id=id");
            $update->execute([
                'id' => $this->id,
                'title' => $this->title,
                'image' => $this->image,
                'link' => $this->link
            ]);
        }
    }

    public function delete($id) {
        if(isset($id)) {
            $delete1 = $this->bdd->prepare("DELETE movies_infos WHERE idMovie=$id");
            $delete1->execute();
            
            $delete2 = $this->bdd->prepare("DELETE movies WHERE id = $id");
            $delete2->execute();
            /*
            $delete = $bdd->prepare("DELETE movies WHERE id='id'");
            $delete->execute(array('id'=>$this->id));
            */
        }
    }

}
