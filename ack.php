<?php
/*
  OpenPOM

  Copyright 2010, Exosec
  Licensed under GPL Version 2.
  http://www.gnu.org/licenses/
*/

require_once("config.php");
session_name($CODENAME);
session_start();
if (!isset($_SESSION['USER'])) die();
require_once("lang.php");
?>

  <div class="box-title box-title-default">
    <h2><?php echo ucfirst(_('acknowledge')) ?></h2>
  </div>

  <div class="box-content" id="box-ack">
    <form action="" method="post" onsubmit="return valid_ack(this, '<?php echo rawurlencode($ILLEGAL_CHAR); ?>');">
      <!-- BEGIN IE FIX -->
      <!-- 1x text input and submit disables submit on Enter -->
      <div style="display: none;">
        <input type="text" name="dummy_IE_FIX" />
      </div>
      <!-- END IE FIX -->

      <table>
        <tr>
          <th><?php echo ucfirst(_('comment')) ?></th>
          <td colspan="2">
            <input type="text"
                   maxlength="64"
                   name="comment"
                   id="comment" />
          </td>
        </tr>

        <tr>
          <td class="height-14"></td>
          <td class="height-14"></td>
          <td class="height-14"></td>
        </tr>

        <tr>
          <td></td>
          <td>
            <input type="hidden" name="action" value="ack" />
            <input type="submit" value="OK" />&#160;
            <input type="submit"
                   value="<?php echo ucfirst(_('track')) ?>"
                   onclick="append_track(this.form);" />&#160;
          </td>
          <td align="right">
            <input type="button"
                   value="<?php echo ucfirst(_('cancel')) ?>"
                   onclick="$.fn.colorbox.close();" />
          </td>
        </tr>
      </table>
    </form>
  </div>

  <script type="text/javascript">
    setTimeout(function () { $('#comment').focus(); }, 500);
  </script>
