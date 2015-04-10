<?php

class Article {

  public function id() {
    return rand(1, 100);
  }

  public function title() {
    return "title " . rand(1, 100);
  }

  public function url() {
    return "http://apalah.com/" . rand(1, 100);
  }

  public function short_desc() {
    return "shot desc nya" . rand(1, 100);
  }
}
