<?php

abstract class Model
{
  private static $_bdd;

  private static function setBdd()
  {
    self::$_bdd = new PDO('mysql:host=localhost; dbname=webdoc;charset=utf8', 'root', 'root');
    self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }

  protected function getBdd()
  {
    if (self::$_bdd == null) {
      self::setBdd();
    }
    return self::$_bdd;
  }

  protected function postOneCountry($country, $title, $text, $image, $video)
  {

    $req = $this->getBdd()->prepare("INSERT INTO countries (country,title,text,image,video) VALUES (:country,:title,:text,:image,:video)");
    $data_type = PDO::PARAM_STR;
    $req->bindValue(":country", $country,  $data_type);
    $req->bindValue(":title", $title,  $data_type);
    $req->bindValue(":text", $text, $data_type);
    $req->bindValue(":image", $image,  $data_type);
    $req->bindValue(":video", $video,  $data_type);
    $req->execute();
    return true;
  }

  protected function deleteOneCountry($table, $countryId)
  {
    $req = $this->getBdd()->prepare("DELETE FROM $table WHERE  id = $countryId");

    $req->execute();
    return true;
  }

  protected function deleteOneDefinition($table, $definitionId)
  {
    $req = $this->getBdd()->prepare("DELETE FROM $table WHERE  id = $definitionId");

    $req->execute();
    return true;
  }

  protected function postOneDefinition($word, $text)
  {
    $req = $this->getBdd()->prepare("INSERT INTO definition (word, text) VALUES (:word,:text)");
    $data_type = PDO::PARAM_STR;
    $req->bindValue(":word", $word,  $data_type);
    $req->bindValue(":text", $text,  $data_type);
    $req->execute();
    return true;
  }

  protected function getOne($table, $email, $password)
  {
    $req = $this->getBdd()->prepare("SELECT email, password FROM $table WHERE email=:email");
    $req->bindValue(":email", $email, PDO::PARAM_STR);
    $req->execute();
    $user = $req->FETCH();

    if (!$user) {
      return false;
    }

    if ($user) {
      $_SESSION["email"] = ":email";
      $_SESSION["password"] = $password;
      $_SESSION["login"] = "OK";
      return true;
    } else {
      return false;
    }
  }

  protected function getAll($table)
  {
    $req = $this->getBdd()->prepare("SELECT * FROM $table");
    $req->execute();
    $var = $req->fetchAll(PDO::FETCH_ASSOC);

    return $var;
  }
  protected function updateAllcountries($table, $country, $title, $text, $image, $video, $id_country)
  {
    $req = $this->getBdd()->prepare("UPDATE $table SET country='$country', title='$title', text='$text', image='$image', video='$video'  WHERE id=$id_country");

    $req->execute();

    var_dump($table, $country, $title, $text, $image, $video, $id_country);

    return true;
  }
  protected function updateAlldefinitions($table, $word, $text, $id_definition)
  {
    $req = $this->getBdd()->prepare("UPDATE $table SET word='$word', text='$text' WHERE id=$id_definition");
    $req->execute();
    var_dump($req);

    return true;
  }
}
