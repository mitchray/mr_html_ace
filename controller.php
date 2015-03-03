<?php
defined('C5_EXECUTE') or die("Access Denied.");

class MrHtmlAcePackage extends Package
{

  protected $pkgHandle = 'mr_html_ace';
  protected $appVersionRequired = '5.6';
  protected $pkgVersion = '1.0';

  public function getPackageDescription() {
    return t("Edit HTML with the Ace Code Editor");
  }

  public function getPackageName() {
    return t("HTML with Ace Code Editor");
  }

  public function install() {
    $pkg = parent::install();

    $existing = BlockType::getByHandle('mr_html_ace');
    if (!is_object($existing) ) {
      BlockType::installBlockTypeFromPackage('mr_html_ace', $pkg);
    }
  }

}
?>
