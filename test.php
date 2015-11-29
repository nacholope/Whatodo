<?php
/**
 * Created by PhpStorm.
 * User: eduardo
 * Date: 29/11/15
 * Time: 11:02
 */

require_once 'classes/Connection.php';

$c = Connection::get();
/*************************************************************************************************
 * IMPORTANT $task, $arguments[], $conditions[] or null ++++++++++++++++++++++++++++++++++++++++++
 ************************************************************************************************/

/**FORMATS TO Insert
 * $c->insert("user", ["name"=>'ONE', "surname"=>'ONE', "password"=>'test', "email"=>'test@test.es'], null);
 * $c->insert("category", ["name"=>'test'], null);
 * $c->insert("event", ["user"=>'1001',"category"=>'5',"name"=>'Un evento asociado a un usuario',"address"=>'Una direccion pa quedar',"city"=>'100', "description"=>'Barbacoa en mi casa este finde...', "dateStart"=>'2015-01-02 12:12:12', "dateEnd"=>'2015-10-10 12:12:12', "img"=>'100.jpg', "public"=>'1', "offer"=>'cerveza gratis!'], null);
*/

/**FORMATS TO Update
 * $c->update("user",["name"=>'change',"surname"=>'change',"password"=>'change',"email"=>'change@change.es'],["id"=>'5000']);
 * $c->update("category",["name"=>'Informatica'],["id"=>'5']);
 */
//$c->insert("user", ["name"=>'ONE', "surname"=>'ONE', "password"=>'test', "email"=>'one@test.es'],null);
//$c->insert("user", ["name"=>'test', "surname"=>'test', "password"=>'test', "email"=>'test@test.es'],null);
//$c->update("event","event", ["user"=>'1001',"category"=>'5',"name"=>'Un evento asociado a un usuario',"address"=>'Una direccion pa quedar',"city"=>'100', "description"=>'Barbacoa en mi casa este finde...', "dateStart"=>'2015-01-02 12:12:12', "dateEnd"=>'2015-10-10 12:12:12', "img"=>'100.jpg', "public"=>'1', "offer"=>'cerveza gratis!'], ["id"=>'123']);

$c->insert("event", ["user"=>'1080',"category"=>'5',"name"=>'Un evento asociado a un usuario',"address"=>'Una direccion pa quedar',"city"=>'100', "description"=>'Barbacoa en mi casa este finde...', "dateStart"=>'2015-01-02 12:12:12', "dateEnd"=>'2015-10-10 12:12:12', "img"=>'100.jpg', "public"=>'1', "offer"=>'cerveza gratis!'], null);


//print_r($c->insert("Users (`name`, surname, `password`, email)","'menorquin', 'llinatge', 'password', 'menorquin@llinatge.es'"));



