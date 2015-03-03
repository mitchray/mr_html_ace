<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<style type="text/css">
  #ccm-block-html-value {
    width: 100%;
    border: 1px solid #eee;
    height: 495px;
  }
</style>

<div id="ccm-block-html-value"><?php echo htmlentities($controllerObj->content, ENT_COMPAT, APP_CHARSET); ?></div>

<textarea style="display: none" id="ccm-block-html-value-textarea" name="content"></textarea>

<script>
  $(function() {
    var editor = ace.edit("ccm-block-html-value");
    ace.config.set("basePath", "<?php echo BASE_URL . DIR_REL . "/" . DIRNAME_PACKAGES ?>/mr_html_ace/blocks/mr_html_ace/ace");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/html");
    refreshTextarea(editor.getValue());
    editor.getSession().on('change', function() {
      refreshTextarea(editor.getValue());
    });
  });

  function refreshTextarea(contents) {
    $('#ccm-block-html-value-textarea').val(contents);
  }
</script>
