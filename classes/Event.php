<?php

class Event
{
    private $id;
    private $user;
    private $category;
    private $name;
    private $adress;
    private $city;
    private $description;
    private $date_start;
    private $date_end;
    private $img;

    /**
     * Event constructor.
     * @param $user
     * @param $category
     * @param $name
     * @param $adress
     * @param $city
     * @param $description
     * @param $date_start
     * @param $date_end
     * @param $img
     * @param $id
     */
    public function __construct($user, $category, $name, $adress, $city, $description, $date_start, $date_end, $img, $id)
    {
        $this->user = $user;
        $this->category = $category;
        $this->name = $name;
        $this->adress = $adress;
        $this->city = $city;
        $this->description = $description;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->img = $img;
        $this->id = $id;
    }
    private function startCard(){
        echo '<div class="card">';
    }
    private function finishCard(){
        echo '</div>';
    }
    private function paintImage(){
        echo '<div class="card-image waves-effect waves-block waves-light">';
        echo "<img class='activator' src='img/{$this->img}'>";
        echo '</div>';
    }
    private function paintContent(){
        echo '<div class="card-content">';
        echo "<span class='card-title activator grey-text text-darken-4'>{$this->name}<i
                            class='material-icons right'>more_vert</i></span>
                    <p><a href='#'>Informacio de la web</a></p>";
        echo '</div>';
    }
    private function paintRevealContent(){
        echo '<div class="card-reveal">';
        echo "<span class='card-title grey-text text-darken-4'>{$this->name}<i class='material-icons right'>close</i></span>";
        echo "<p>{$this->description}</p>";
        echo '</div>';
    }
    public function paintEvent(){
        $this->startCard();
        $this->paintImage();
        $this->paintContent();
        $this->paintRevealContent();
        $this->finishCard();
    }
}