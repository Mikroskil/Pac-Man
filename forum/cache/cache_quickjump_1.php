<?php

if (!defined('FORUM')) exit;
define('FORUM_QJ_LOADED', 1);
$forum_id = isset($forum_id) ? $forum_id : 0;

?><form id="qjump" method="get" accept-charset="utf-8" action="http://localhost/punbb-1.4.2/viewforum.php">
	<div class="frm-fld frm-select">
		<label for="qjump-select"><span><?php echo $lang_common['Jump to'] ?></span></label><br />
		<span class="frm-input"><select id="qjump-select" name="id">
			<optgroup label="Test category">
				<option value="4"<?php echo ($forum_id == 4) ? ' selected="selected"' : '' ?>>Berita</option>
				<option value="1"<?php echo ($forum_id == 1) ? ' selected="selected"' : '' ?>>Diskusi</option>
				<option value="3"<?php echo ($forum_id == 3) ? ' selected="selected"' : '' ?>>Perkembangan Fitur</option>
			</optgroup>
		</select>
		<input type="submit" id="qjump-submit" value="<?php echo $lang_common['Go'] ?>" /></span>
	</div>
</form>
<?php

$forum_javascript_quickjump_code = <<<EOL
(function () {
	var forum_quickjump_url = "http://localhost/punbb-1.4.2/viewforum.php?id=$1";
	var sef_friendly_url_array = new Array(3);
	sef_friendly_url_array[4] = "berita";
	sef_friendly_url_array[1] = "diskusi";
	sef_friendly_url_array[3] = "perkembangan-fitur";

	PUNBB.common.addDOMReadyEvent(function () { PUNBB.common.attachQuickjumpRedirect(forum_quickjump_url, sef_friendly_url_array); });
}());
EOL;

$forum_loader->add_js($forum_javascript_quickjump_code, array('type' => 'inline', 'weight' => 60, 'group' => FORUM_JS_GROUP_SYSTEM));
?>
