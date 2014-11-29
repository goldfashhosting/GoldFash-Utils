<?PHP
// Include the integration code. 
include_once '.license.php'; ?>
  <?php if ($spbas->errors && $spbas->offline_token): ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>License Activation Required</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!--
                Attention!!
                - Customers seeing this message will most likely not have Internet access.
                - You need to distribute the bootstrap minimum CSS file with your application.
                - Remove this comment when integrating with your application.
            -->
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" media="screen">
            <style> #spbas { margin: 0 auto; width: 570px; } </style>
        </head>
    <body>
        <br />
        <div id='spbas'>
            <p class='alert alert-error'><?php echo $spbas->errors; ?></p>
            <h4>Follow the instructions below to activate your license:</h4>
            <div class='alert'>
                <ol>
                    <li>
                        <p>Copy the <b>entire</b> activation key below:</p>
                        <pre><?php echo $spbas->offline_token; ?></pre>
                    </li>
                    <li>
                        <p>Visit us on the web to activate the license:</p>
                        <pre><?php echo $spbas->offline_token_url; ?></pre>
                    </li>
                    <li>
                        <p>Refresh this page once you've completed step #2 above.</p>
                    </li>
                <ol>
            </div>
        </div>
        </body>
    </html>
    <?php die; ?>
<?php elseif ($spbas->errors): die($spbas->errors); endif; ?>
<?php 
// Cleanup 
unset($spbas); 
 
echo ''; 
?>
