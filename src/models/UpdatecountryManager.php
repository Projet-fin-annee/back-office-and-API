<?php
class UpdatecountryManager extends Model
{
  public function getCountry($id_country)
  {
    return $this->getOneCountry("countries", $id_country);
  }
  public function update_country($country, $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video, $id_country)
  {
    $this->updateOnecountries("countries", $country, $imageBackground, $htag, $victimsName, $citationOne,  $title, $citationTwo, $imageOne, $textIntro, $titleSpeech, $audio, $citationSpeech, $person, $imageTwo, $textOne, $imageThree, $textTwo, $video, $id_country);
  }
}
