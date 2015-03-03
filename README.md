# Ace Code Editor HTML block for concrete5 5.6
Concrete5 5.7 uses the [Ace Code Editor](http://ace.c9.io/) for its HTML block, this lets you use it in 5.6!

## Option 1: Install a new block type

Installing this package will create a new "HTML (with Ace Code Editor)" block alongside the existing core HTML block.

## Option 2: Manually override the core HTML block
Copy the **_blocks/html** folder into your ***your_site_root*/blocks** directory. You don't need to install the package if you choose this option as it will make the existing core HTML block use the Ace Code Editor.

### Prefer a light theme?
By default the editor uses the dark Monokai theme, but the light Eclipse theme (used in 5.7) is also included.

Copy/edit the form_setup.html.php from the *Option 1 or 2* you chose above into your ***your_site_root*/blocks** directory. Change `editor.setTheme("ace/theme/monokai");` to `editor.setTheme("ace/theme/eclipse")`;
