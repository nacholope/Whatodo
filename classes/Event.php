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
    private $conexion;

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
    public function __construct($id, $user, $category, $name, $address, $city, $description, $date_start, $date_end, $img, $public, $offer)
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
    private function startCard()
    {
        echo '<div class="card">';
    }

    /**
     * Function finishCard: prints card footer
     */
    private function finishCard()
    {
        echo '</div>';
    }

    /**
     * Function paintImage: prints card image
     */
    private function paintImage()
    {
        echo '<div class="card-image waves-effect waves-block waves-light">';
        echo "<img class='activator responsive-img small' src='img/{$this->img}'>";
        echo '</div>';
    }

    /**
     * Function paintTitle: Prints The title of the card. In case of being too big truncateds it
     */
    private function paintTitle()
    {
        $title = ucfirst(strtolower($this->name));
        if (strlen($title) > 20) {
            $title = substr($title, 0, 17);
            $title .= '...';
            echo "<span class='card-title activator text-darken-4'>{$title}<i
                            class='material-icons right'>more_vert</i></span>";
        } else {
            echo "<span class='card-title activator text-darken-4'>{$title}<i
                            class='material-icons right'>more_vert</i></span>";
        }

    }

    /**
     * Function paintContent: prints card content
     * Calls paintTitle();
     */
    private function paintContent()
    {
        echo '<div class="card-content">';
        $this->paintTitle();
        echo "<p><a href='#'>Informacio de la web</a></p>";
        echo '</div>';
    }

    /**
     * Function paintRevealContent: prints card reveal content
     */
    private function paintRevealContent()
    {
        echo '<div class="card-reveal">';
        echo "<span class='card-title grey-text text-darken-4'>{$this->name}<i class='material-icons right'>close</i></span>";
        echo "<p>{$this->description}</p>";
        echo '</div>';
    }

    /**
     * Function paintEvent: prints event card
     */
    public function paintEvent()
    {
        $this->startCard();
        $this->paintImage();
        $this->paintContent();
        $this->paintRevealContent();
        $this->finishCard();
    }

    private function openUserEvent()
    {
        echo '<li>';
        echo "<div class='collapsible-header'><i class='material-icons'>whatshot</i>{$this->name}</div>";
    }

    private function closeUserEvent()
    {
        echo '</li>';
    }

    private function userEventSwitch()
    {
        echo '<div class="row custom-row-margin">
            <div class="input-field col s6">
                <div class="switch">
                    <label>P&uacute;blico
                    <input type="checkbox">
                    <span class="lever"></span>
                    Privado
                    </label>
                </div>
            </div>
        </div>';
    }

    private function userEventCategory()
    {
        echo '<div class="row">';
        echo '<div class="input-field col s6">';
        echo '<select>
                 <option value="" disabled selected>Seleccione una categoria</option>
                 <option value="1">M&uacute;sica</option>
                 <option value="2">Deportes</option>
                 <option value="3">Cultura</option>
                 <option value="4">Gastronom&iacute;a</option>
              </select>
              <label>Categoria</label>
              </div>';
        echo '<div class="input-field col s6">';
        echo '<input id="surname" type="text" class="validate" value="'. $this->name .'">';
        echo "<label for='surname' data-error='Incorrecto' data-success='Correcto'>Nombre</label>";
        echo '</div>';
        echo '</div>';
    }

    private function userEventAdress()
    {
        /*
        $sentenceSQL = "select name from cities WHERE id = {$this->id}";
        $results = Connection::get()->select($sentenceSQL);
        print_r($results);
        $cityName = $results->fetch_assoc()['name'];
        echo '<div class="row">';
        echo '<div class="input-field col s6">';
        echo '<input id="surname" type="text" class="validate" value="'.$cityName.'" required="">';
        echo "<label for='surname' data-error='Incorrecto' data-success='Correcto'>Ciudad</label>";
        echo '</div>';
        echo '<div class="input-field col s6">';
        echo '<input id="surname" type="text" class="validate" value="'. $this->address .'">';
        echo "<label for='surname' data-error'Incorrecto' data-success='Correcto'>Direccion</label>";
        echo '</div>';
        echo '</div>'; */
    }

    private function userEventStartime()
    {
        $date = $this->date_start;
        $date_Start = explode(" ",$date)[0];
        $date_Start_hour = explode(" ",$date)[1];
        $date_Start_hour = substr($date_Start_hour,0,strlen($date_Start_hour)-3);
        echo '<div class="row">';
        echo '<div class="input-field col s6">';
        echo '<label for="dateStart">Fecha inicio</label>';
        echo "<input id='dateStart' type='date' value='{$date_Start}' class='datepicker'>";
        echo '</div>';
        echo '<div class="input-field col s6">';
        echo '<label for="timeStart">Hora inicio</label>';
        echo "<input id='timeStart' class='timepicker' value='{$date_Start_hour}' type='text'>";
        echo '</div>';
        echo '</div>';
    }
    private function userEventEndTime()
    {
        $date = $this->date_end;
        $date_Start = explode(" ",$date)[0];
        $date_Start_hour = explode(" ",$date)[1];
        $date_Start_hour = substr($date_Start_hour,0,strlen($date_Start_hour)-3);
        echo '<div class="row">';
        echo '<div class="input-field col s6">';
        echo '<label for="dateStart">Fecha fin</label>';
        echo "<input id='dateStart' type='date' value='{$date_Start}' class='datepicker'>";
        echo '</div>';
        echo '<div class="input-field col s6">';
        echo '<label for="timeFinish">Hora fin</label>';
        echo "<input id='timeFinish' class='timepicker' value='{$date_Start_hour}' type='text'>";
        echo '</div>';
        echo '</div>';
    }
    private function userEventBodyDescription(){
        echo '<div class="row">';
        echo '<div class="input-field col s12">';
        echo '<textarea id="description" class="materialize-textarea">' . $this->description .'</textarea>';
        echo '<label for="description">Descripcion</label>';
        echo '</div>';
        echo '</div>';
    }
    private function userEventImgPromotion(){
        echo '<div class="row">';
        echo '<div class="input-field col s6">';
        echo '<input id="surname" type="text" class="validate">';
        echo '<label for="surname" data-error="Incorrecto" data-success="Correcto">Imagen</label>';
        echo '</div>';
        echo '<div class="input-field col s6">';
        echo '<input id="surname" type="text" value="' . $this->offer . '" class="validate">';
        echo '<label for="surname" data-error="Incorrecto" data-success="Correcto">Promoci&oacute;n</label>';
        echo '</div>';
        echo '</div>';
    }
    private function userEventUpdateButton(){
        echo '<div class="row">
                <div class="col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">
                        Actualizar
                    </button>
                    <form method="post" action="user_event.php">
                        <button class="btn waves-effect waves-light red" type="submit" name="action">
                            Eliminar
                        </button>
                    </form>
                </div>
              </div>';
    }
    private function userEventBodyContent()
    {
        $this->userEventSwitch();
        $this->userEventCategory();
        $this->userEventAdress();
        $this->userEventStartime();
        $this->userEventEndTime();
        $this->userEventBodyDescription();
        $this->userEventImgPromotion();
        $this->userEventUpdateButton();
    }

    private function UserEventBody()
    {
        echo '<div class="collapsible-body">';
        echo '<form method="POST" action="user_event.php" class="custom-padding center-align">';
        $this->UserEventBodyContent();
        echo '</form>';
        echo '</div>';
    }

    public function paintUserEvents()
    {
        $this->conexion = Connection::get();
        $this->openUserEvent();
        $this->userEventBody();
        $this->closeUserEvent();
    }
}