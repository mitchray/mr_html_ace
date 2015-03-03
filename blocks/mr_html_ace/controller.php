<?php
defined('C5_EXECUTE') or die("Access Denied.");

class MrHtmlAceBlockController extends Concrete5_Controller_Block_Html
{
  protected $btTable = 'btMrHtmlAce';
  protected $btInterfaceWidth = "600";
  protected $btWrapperClass = 'ccm-ui';
  protected $btInterfaceHeight = "510";

  public function getBlockTypeDescription() {
    return t("For adding HTML by hand (with Ace Code Editor).");
  }

  public function getBlockTypeName() {
    return t("HTML (with Ace Code Editor)");
  }
}
