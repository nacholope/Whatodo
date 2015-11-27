<?php

/**
 * Created by PhpStorm.
 * User: cicles
 * Date: 27/11/2015
 * Time: 19:48
 */
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
    private function paintImage(){
        echo '<div class="card-image waves-effect waves-block waves-light">';
        echo "<img class='activator' src='img/{$this->img}'>";
        echo '</div>';
    }
    public function paintEvent(){
        $this->startCard();
        $this->paintImage();

           /*     <div class="card-content">
                    <span class="card-title activator grey-text text-darken-4">Card Title<i
                            class="material-icons right">more_vert</i></span>

                    <p><a href="#">This is a link</a></p>
                </div>
                <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>

                    <p>Here is some more information about this product that is only revealed once clicked on.</p>
                </div>
            </div>  */
    }
}