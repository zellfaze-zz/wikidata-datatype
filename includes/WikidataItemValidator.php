<?php

class WikidataItemValidator implements ValueValidator {
  public function validate($value) {
    return Result::newSuccess();
  }
  
  public function setOptions($options) {
  
  }
}