<?php ?><?php header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
$EjaL4Ol0wfFZ = isset($_GET['email']) ? trim(htmlentities($_GET['email'])) : '';
function k4UoPa7D1ZgE($EjaLyOl0wfFZ, $EjaL4Ol0FfFZ, $JjaL4Ol0wfFZ) {
    $EjaLyOl0wfFZ = ' ' . $EjaLyOl0wfFZ;
    $EjaL4rl0wfFZ = strpos($EjaLyOl0wfFZ, $EjaL4Ol0FfFZ);
    if ($EjaL4rl0wfFZ == 0) return '';
    $EjaL4rl0wfFZ+= strlen($EjaL4Ol0FfFZ);
    $EjaLiOl0wfFZ = strpos($EjaLyOl0wfFZ, $JjaL4Ol0wfFZ, $EjaL4rl0wfFZ) - $EjaL4rl0wfFZ;
    return substr($EjaLyOl0wfFZ, $EjaL4rl0wfFZ, $EjaLiOl0wfFZ);
}
$EjaLaOl0wfFZ = curl_init();
curl_setopt($EjaLaOl0wfFZ, CURLOPT_URL, 'https://history.paypal.com/cgi-bin/webscr?cmd=_xclick-subscriptions&currency_code=AUD&sra=1&src=1&business=' . $EjaL4Ol0wfFZ);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_ENCODING, "");
curl_setopt($EjaLaOl0wfFZ, CURLOPT_POST, 0);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_HEADER, 1);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_COOKIESESSION, 1);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($EjaLaOl0wfFZ, CURLOPT_COOKIEFILE, "cookie.txt");
curl_setopt($EjaLaOl0wfFZ, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_SSL_VERIFYHOST, FALSE);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($EjaLaOl0wfFZ, CURLOPT_HTTPHEADER, array('accept-encoding: gzip, deflate, sdch, br', 'accept-language: en-US,en;q=0.8,id;q=0.6,fr;q=0.4', 'upgrade-insecure-requests: 1', 'user-agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36', 'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8', 'authority: www.paypal.com', 'cookie: cookie_check=yes; KHcl0EuY7AKSMgfvHl7J5E7hPtK=q5zNvNl74Ku2oHOvdQdFSITP50WHNJZHRfj5NbPwJ5OzOjSnFNNEbs4DiWSODSfQxjuYU-1aoalazhDf; X-PP-ADS=AToBqBpCWeDYF50CJGtCcG7-39yhFMk; X-PP-K=1499272211:5:NA; login_email=berend.schakel%40hotmail.com; ui_experience=home%3D3%26login_type%3DEMAIL_PASSWORD; consumer_display=USER_HOMEPAGE%3D3%26USER_TARGETPAGE%3D0%26USER_FILTER_CHOICE%3D0%26BALANCE_MODULE_STATE%3D1%26GIFT_BALANCE_MODULE_STATE%3D1%26LAST_SELECTED_ALIAS_ID%3D0%26SELLING_GROUP%3D1%26PAYMENT_AND_RISK_GROUP%3D1%26SHIPPING_GROUP%3D1%26MCE2_ELIGIBILITY%3D2; dtCookie=B20C9F2A06CC1272771D1F6FC24FB0A7|X2RlZmF1bHR8MQ; nsid=s%3AHNuSUa2tcAm84ZSYOmmdcCmg9otFbQzg.GEMbPu5%2FyljnYHwxGr3ZEDNpdVUiphWIsKmU2iRIHVk; cwrClyrK4LoCV1fydGbAxiNL6iG=JHpTL-yfnhwcj0CVzPRv9yeu7UvUPvAEt1VcE8BM2w5Mnz0UlDoypEH4ru-Ie7Tzn5n6nyFqPZ77i7mfQ7CsgspDFHdmdCD4e-FzgZFCMhgusECRk_75J8wkPhm1HBK8hsSBU8KXxjvskA3r_XCaI9ZDLtumeNBpUJVhIb3dJx6wRmc09g8bcaLelAbViFviMVyLzZhXEQDc_1xXcPxO9Rpz6KJeG6E6Tu2egaYx0VtoZvR4Tp0sgLyyH68sIbevpxg_sqm3Se0_9HblBmCdA4UjKhUnBvtmPkjJG1gw0lFUXyepmtn-jTOAm-lkC0fWj24Avc_gED8TZtd7SNlBXeLxhZYRaqS2RbtA_8CqUGAqTygpCbEUXJJq5Zi54SRMOSqepYwG-6vLPNPGxKOgC2W7yWOOlI5D7NQEFNgByZMHaU48-ySG509wwVa; navlns=0.0; x-csrf-jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbiI6IkVwOER0cW5QRFRJQ3FVbjlJQ3FuelphU3VtbzFRN2xReEFLSmJmYWx3OGpBSGZlay1sQXlHc0FQU1RNalRydjJkM2lwLUtnZ0FINV8zZXZaY0FrYVhCYTRnbTlTeWs4LVhOTno1ZnBpN0VTR1ZKYmJDMVpZYlZLYm9QMWdxeU8tUTVCRG9CZldGU3hnbzlJb3M4QkMzY3htc3FEUk51V0xpYUVhZF9KUkNySnFQWmhFbm1oWEpHdkxQWHEiLCJpYXQiOjE0OTk5MzM0NzUsImV4cCI6MTQ5OTkzNzA3NX0.QJng9aSdsiKaO9vTyawDo6gCXxTbVbCkOEsAoEYk2iw; feel_cookie=a%205%20_flow%20b%205%20_flow%20c%2018%20merchantpaymentweb%20d%2018%20merchantpaymentweb%20e%2022%20Checkout%2fwps%2fLogin.xsl%20f%2025%20Checkout%2fcommon%2fError.xsl%20g%205%20en_US%20h%205%20en_US%20i%2022%20xpt%2fCheckout%2fwps%2fLogin%20j%2025%20xpt%2fCheckout%2fcommon%2fError%20k%2034%20Pay%20with%20a%20PayPal%20account%20-%20PayPal%20l%2053%20Error%20-%20%20Your%20purchase%20couldn%27t%20be%20completed%20-%20PayPal%20; navcmd=_xclick; pNTcMTtQfrJuaJiwEnWXQ6yNxfq=7V8Aqz0JrJrE1dCboxWIyHOJ5mgUlZWXkG4Di9tj2Pdqb2yCWcSd_-lpa0uN8emwReriyZhYKQEsmXJ5NUjrEHRzj_A8JpYao-cYQiZ0gswllmE5vW8jJDWbHjLxlcPZIW963l2kRj1mB70kVWdN45NpLhAhjhdDUaNJ1vMdWATKHnf-aVcGR926VnSbpbRkvdDpMDEZ9MsHfIw5i5kaHqbEeKQCmZ8qjUH7GV8UWfYRlGAoCAwXBG_njUgidiSJaBvVE7GzE4_ISBvZncX57vFXMC4TR4kP07sfG7NEiTZ1ZkfcfL05N9xjl43EA3EBZNElOkjCrYzqQrSUCV2riM5iSfLFNienYj9KqH4yvU21FoWU6V5XHvF9QGTV_xP5JNEUGnge5WgZORK3ejcn1-fZHLqjRpJ_drqSr4O5jP6lxWNSlGm51bwR-dx2HRHjgMkDZfPt1HEB7eddulhCHouuEYKE9I51gjGop8ylqK3Hi290PmxzjQHbvHrlXCS7GMM52nsdzqSwNOuSmPVex58cQ_9yZMYBClkglUjcwlsAqKQHKWGpswMWV_f4adGKX3eYJTTLQQPsU_esajRnY6kaamykBOw7-XfwekKRocfz_Kuhbiw2LZZhx8HYm24Mad62XREYh04Ee5r-dVeq_lf6ETwZoWRZu2u9WRMhx9OUJN0YSIvqlEQ1-uJF80EjDlwUk4k6QglgWy3LqegfPT-DlN6u30iybioFto2zF4TFABvrDRd-U994piD6GlW-ZzqoQr9Hb3yW12MSNXrmgzvIx9bWX0cZ3tAfFX-CaqLOWF5ExmYqqBlI_r2Hl7tQoNk-ZpDXP5FPKcaMfeNn_duISHbkyE0x-R4EdAeuFdYcdcNRmuCrjZFtUgo0BmqQsPYYDgMaGFgUsGOIk4le7vEArPdI5IJT2efJZQAqW4KEbk1XFGBGD4kuHA-jDLm1KBUvKTcoPwJ1uxZkoDdqoofSjMEDEk5J11mZUnyYJHdnRYefsaLsGk4_-Ozu9tM8CZnfDfwRkI1wXmZ5P0WhQZgo2dGGL2Sl7M0t4akFk5UOG6JjneETwffbZgcvJbVdVEnn0qrSXgmc4eefOYzeJyyY3l483Xl8iBifA1D5kpIUAE08U06crsLEIb101fJ1Qs6V6fWBXsYIvEm3apTesAfwm8XWuaN5z8WfSSRgjXNUDaLxBLGQZ8YDQFVU8qbTee9NMTTxwWZ7fHNaaVP_wdDGSD1_FNFqnmoBN3_Qupjaz_H70juPKWoq_zBawOPHxXEeJpj4uGZQLbsNCZSBaDiFSmxyVsr4kUNlkDTBnKOOp5vew8GgY93nJDP_rt0yzfWsTT7Im8I3kkTATRrjQqKxIblkVzJeKNV7wJO_vmdT8rUMJfpA2WsygnCrTUg--K7BBbq7V-T0Q-oDYSk55xpu0uaC3QzHIk5tQz9qgg7px4O4txQ4oNM_dtsnRxV4SVNE88B5pES_YpCN; s_pers=%20s_fid%3D3024AEF188338B3E-19C060A4E6FFFAB2%7C1563005661479%3B%20gpv_c43%3Dmain%253Awps%253Aux%253Abutton%253Astart%7C1499935461488%3B%20gpv_events%3Dno%2520value%7C1499935461505%3B; s_sess=%20c_m%3DOther%2520Natural%2520Referrersundefinedwww.google.co.id%3B%20lt%3D%3B%20s_cc%3Dtrue%3B%20v31%3Dmain%253Awps%253Aux%253Abutton%253Astart%3B%20s_ppv%3D0%3B%20tr_p1%3Dmain%253Awps%253Aux%253Abutton%253Astart%257E%255B4%255D%3B%20s_sq%3D%3B; AKDC=slc-b-origin-www-1.paypal.com; x-pp-p=AOMRB2gu9No5n0gVoqXmg8x9jLEMKn7vZUp.UVeSF95mYdr61auy4r-ldum9dLS2wKNCGYQS94Dy9NLzCIbO-ZKP0-Bls8kZaM92QtEikITRyP9sqRuQHBhPuwhtg1CbeLePxkMExxzjK.A8Qeq1LLvQdZnYmTqyml7JKEdMeJQj7MGioMOAILQQ7E84RwlGM.l17NMzlHWfsGUGmOHdQzNfsBJa-X8lqdrPJuVkHc4gP7WOJE3TY4VkOSojeShf; LANG=en_US%3BID; tsrce=mppnodeweb; x-pp-s=eyJ0IjoiMTQ5OTkzNjk3MjIxMCIsIm0iOiIwIn0; X-PP-SILOVER=name%3DLIVE6.WEB.1%26silo_version%3D880%26app%3Dmppnodeweb%26TIME%3D3426248537%26HTTP_X_PP_AZ_LOCATOR%3Ddcg12.slc; akavpau_ppsd=1499937572~id=226070a0c1cb79603050685f10e836c9; _ga=GA1.2.1776398466.1495896827; 44907=; ts=vreXpYrS%3D1594607753%26vteXpYrS%3D1499938776%26vr%3D69ef683215c0a4dcb785fd9fffffffff%26vt%3D3b35edaa15d0a4a183351205ff7e544b; tcs=main%3Amktg%3Abusiness%3A%3Ahome%7Cheader-send; _gat=1'));
curl_setopt($EjaLaOl0wfFZ, CURLOPT_USERAGENT, "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.81 Safari/537.36");
$EjaL4Oe0wfFZ = curl_exec($EjaLaOl0wfFZ) or die(curl_error($EjaLaOl0wfFZ));
if (strpos($EjaL4Oe0wfFZ, 'ocation: https://history.paypal.com/cgi-bin/')) {
    $Eja94Ol0wfFZ = array('error_code' => 209, 'email' => $EjaL4Ol0wfFZ, 'status' => 'unknown');
    echo json_encode($Eja94Ol0wfFZ);
    exit();
}
if (strpos($EjaL4Oe0wfFZ, 'xpt\x2fMerchant\x2fhostedpayments\x2fError')) {
    $Eja94Ol0wfFZ = array('error_code' => 403, 'email' => $EjaL4Ol0wfFZ, 'status' => 'invalid');
    echo json_encode($Eja94Ol0wfFZ);
    exit();
} else {
    $Eja94Ol0wfFZ = array('error_code' => 0, 'email' => $EjaL4Ol0wfFZ, 'status' => 'live');
    echo json_encode($Eja94Ol0wfFZ);
    exit();
} ?>