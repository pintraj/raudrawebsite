<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Error</title>

        <style type="text/css">
            /* Reset Styles */
			body{margin:0; padding:0; font-family: Arial, sans-serif;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table td{border-collapse:collapse;}
        </style>
    </head>

    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
            	<tr>
                	<td align="left" valign="top" style="line-height: 2em;">
                        <b>Sent from page:</b> <a href="<?php echo $vars['userInfo']->referer ?>" target="_blank"><?php echo $vars['userInfo']->referer ?></a><br>
                        <b>Author's name:</b> <?php echo $vars['name'] ?><br>
                        <b>Author's email:</b> <?php echo $vars['mail'] ?><br>
                        <b>Author's IP:</b> <?php echo $vars['userInfo']->ip ?><br>
                        <b>Message:</b>
                    </td>
                </tr>
            	<tr>
                	<td align="left" valign="top" style="padding-top: 30px; line-height: 1.3em;"><?php echo $vars['question'] ?></td>
                </tr>
            	<tr>
                	<td align="center" valign="top" style="padding-top: 30px;"><i>You can reply directly to this email to answer the question.</i></td>
                </tr>
            </table>
        </center>
    </body>
</html>
