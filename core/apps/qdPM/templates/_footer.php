<?php
/**
*qdPM
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@qdPM.net so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade qdPM to newer
* versions in the future. If you wish to customize qdPM for your
* needs please refer to http://www.qdPM.net for more information.
*
* @copyright  Copyright (c) 2009  Sergey Kharchishin and Kym Romanets (http://www.qdpm.net)
* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*/
?>

<!-- BEGIN FOOTER -->
<div><font size="5">PMBOT</font></div>
<div id="webchat" role="main"></div>
      <script src="https://cdn.botframework.com/botframework-webchat/latest/webchat.js"></script>
      <script>
         const styleOptions = {
            bubbleBackground: 'rgba(0, 0, 255, .1)',
			bubbleFromUserBackground: 'rgba(0, 255, 0, .1)',
			botAvatarInitials: 'BOT',
            userAvatarInitials: 'PM'
         };

         window.WebChat.renderWebChat(
            {
               directLine: window.WebChat.createDirectLine({
                  secret: 'oeOJ3dvjsIs.BCf3mnNF3G00zsO_jBZX_7kmZer_LzuY-urcV2YL3s0'
               }),

               // Passing 'styleOptions' when rendering Web Chat
               styleOptions
            },
            document.getElementById('webchat')
         );
      </script>

<div class="footer">
<div class="footer-inner">
	 <b><font color='black'>qdPM <?php echo sfConfig::get('app_qdpm_version') ?> enhanced by Makram JENAYAH </b> <br> Copyright &copy; <?php echo  date('Y') ?> <a href="http://makram.cloud" target="_blank">makram.cloud</a>
</div>
<div class="footer-tools">
	<span class="go-top">
		<i class="fa fa-angle-up"></i>
	</span>
</div>
</div>
<!-- END FOOTER -->
