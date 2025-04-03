<?php
// Detect if HTTPS is used
if (isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
    $ssl = 'https';
} else {
    $ssl = 'http';
}

// Construct the application URL
$app_url = $ssl . '://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['SCRIPT_NAME']);
$app_url = rtrim($app_url, '/');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Zero Louise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Invoice for Zero Louise">
    <meta name="author" content="Griffmass">
    <meta name="authorUrl" content="https://github.com/griffmass">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <div class="text-center" style="padding:20px;">
        <input type="button" id="rep" value="Print" class="btn btn-info btn_print">
    </div>
    <div class="container_content" id="container_content">
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="<?php echo $app_url; ?>/zero.jpg" style="width: 100%; max-width: 300px" />
                                </td>
                                <td>
                                    Invoice #: 001<br />
                                    Created: April 2, 2025<br />
                                    Due: May 2, 2025
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td>
                                    Tristain Magic Academy<br />
                                    Magical District<br />
                                    Tristain Kingdom
                                </td>
                                <td>
                                    Louise de La Vallière<br />
                                    Familiar: Saito Hiraga<br />
                                    louise@tristain.com
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>Method of Payment</td>
                    <td>Scroll Reference</td>
                </tr>
                <tr class="details">
                    <td>Parchment Check</td>
                    <td>Ancient Seal #1000</td>
                </tr>
                <tr class="heading">
                    <td>Magic Service</td>
                    <td>Fee</td>
                </tr>
                <tr class="item">
                    <td>Summoning a Familiar</td>
                    <td>10,000 Gold</td>
                </tr>
                <tr class="item">
                    <td>Explosion Spell Training</td>
                    <td>5,000 Gold</td>
                </tr>
                <tr class="item last">
                    <td>Royal Ball Attendance</td>
                    <td>3,000 Gold</td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td>Total: 18,000 Gold</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
