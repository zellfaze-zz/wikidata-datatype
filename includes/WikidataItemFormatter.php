<?php
use ValueFormatters\ValueFormatter;

class WikidataItemFormatter implements ValueFormatter {
  public function format($value) {
    return $value;
  }
}