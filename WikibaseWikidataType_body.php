<?php
class WikibaseWikidataType {
  
  public static function onExtensionLoad() {
    global $wgWBRepoDataTypes, $wgHooks;
    
    $wgHooks['WikibaseRepoDataTypes'][] = 'WikibaseWikidataType::WikibaseRepoDataTypes';
    //var_dump($wgWBRepoDataTypes);
    //die();
  }
  
  public static function WikibaseRepoDataTypes(&$dataTypeDefinitions) {
    $dataTypeDefinitions['wikidata-item'] = array();
    $dataTypeDefinitions['wikidata-item']['value-type'] = 'wikibase-entityid';
    $dataTypeDefinitions['wikidata-item']['validator-factory-callback'] = 'WikibaseWikidataType::WikidataItemValidatorCallback';
    $dataTypeDefinitions['wikidata-item']['parser-factory-callback'] = 'WikibaseWikidataType::WikidataItemParserCallback';
    $dataTypeDefinitions['wikidata-item']['formatter-factory-callback'] = 'WikibaseWikidataType::WikidataItemFormatterCallback';
    
    //var_dump($dataTypeDefinitions);
    //die();
  }
  
  public static function WikidataItemValidatorCallback() {
    $validator = new WikidataItemValidator();
    return $validator;
  }
  
  public static function WikidataItemParserCallback() {
    $parser = new WikidataItemParser();
    return $parser;
  }
  
  public static function WikidataItemFormatterCallback() {
    $formatter = new WikidataItemFormatter();
    return $formatter;
  }
}