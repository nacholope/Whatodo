<?php

/**
 * Class Event
 */
class Event
{

    private $id;
    private $user;
    private $category;
    private $name;
    private $address;
    private $city;
    private $description;
    private $date_start;
    private $date_end;
    private $public;
    private $offer;
    private $img;

    /**
     * Event constructor.
     * @param $user
     * @param $category
     * @param $name
     * @param $address
     * @param $city
     * @param $description
     * @param $date_start
     * @param $date_end
     * @param $public
     * @param $offer
     * @param $img
     * @param $id
     */
    public function __construct($user, $category, $name, $address, $city, $description, $date_start, $date_end, $public, $offer, $img, $id)
    {
        $this->user = $user;
        $this->category = $category;
        $this->name = $name;
        $this->address = $address;
        $this->city = $city;
        $this->description = $description;
        $this->date_start = $date_start;
        $this->date_end = $date_end;
        $this->public = $public;
        $this->offer = $offer;
        $this->img = $img;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDateStart()
    {
        return $this->date_start;
    }

    /**
     * @param mixed $date_start
     */
    public function setDateStart($date_start)
    {
        $this->date_start = $date_start;
    }

    /**
     * @return mixed
     */
    public function getDateEnd()
    {
        return $this->date_end;
    }

    /**
     * @param mixed $date_end
     */
    public function setDateEnd($date_end)
    {
        $this->date_end = $date_end;
    }

    /**
     * @return mixed
     */
    public function getPublic()
    {
        return $this->public;
    }

    /**
     * @param mixed $public
     */
    public function setPublic($public)
    {
        $this->public = $public;
    }

    /**
     * @return mixed
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * @param mixed $offer
     */
    public function setOffer($offer)
    {
        $this->offer = $offer;
    }

    /**
     * @return mixed
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * @param mixed $img
     */
    public function setImg($img)
    {
        $this->img = $img;
    }

    /**
     * Function startCard: prints card header
     */
    private function startCard(){
        echo '<div class="card">';
    }

    /**
     * Function finishCard: prints card footer
     */
    private function finishCard(){
        echo '</div>';
    }

    /**
     * Function paintImage: prints card image
     */
    private function paintImage(){
        echo '<div class="card-image waves-effect waves-block waves-light">';
        echo "<img class='activator' src='img/{$this->img}'>";
        echo '</div>';
    }

    /**
     * Function paintContent: prints card content
     */
    private function paintContent(){
        echo '<div class="card-content">';
        echo "<span class='card-title activator grey-text text-darken-4'>{$this->name}<i
                            class='material-icons right'>more_vert</i></span>
                    <p><a href='#'>Informacio de la web</a></p>";
        echo '</div>';
    }

    /**
     * Function paintRevealContent: prints card reveal content
     */
    private function paintRevealContent(){
        echo '<div class="card-reveal">';
        echo "<span class='card-title grey-text text-darken-4'>{$this->name}<i class='material-icons right'>close</i></span>";
        echo "<p>{$this->description}</p>";
        echo '</div>';
    }

    /**
     * Function paintEvent: prints event card
     */
    public function paintEvent(){
        $this->startCard();
        $this->paintImage();
        $this->paintContent();
        $this->paintRevealContent();
        $this->finishCard();
    }

}