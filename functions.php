<?php
if (isset($_GET['pages'])) {
    $service_url = ($_SERVER['HTTP_HOST'] == 'localhost') ? 'http://localhost/essaygurus/api/fetchNoOfPages' : 'https://admins.writersplanet.net/api/fetchNoOfPages';
    $curl = curl_init($service_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $curl_response = curl_exec($curl);
    curl_close($curl);
    echo $curl_response;
}
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    if (is_numeric($number) && $number > 0 && $number == round($number, 0)) {
        $factors = factor($number);
        echo "The factors of $number are: " . implode(', ', $factors);
    } else {
        echo "Please enter a positive integer.";
    }
    die;
}
function factor($number)
{
    $factors = array();
    for ($i = 1; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            $factors[] = $i;
            if ($i != $number / $i) {
                $factors[] = $number / $i;
            }
        }
    }
    sort($factors);
    return $factors;
    die;
}
if (isset($_GET['documentType'])) {
    $service_url = ($_SERVER['HTTP_HOST'] == 'localhost') ? 'http://localhost/essaygurus/api/fetchDocumentType' : 'https://admins.writersplanet.net/api/fetchDocumentType';
    $curl = curl_init($service_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $curl_response = curl_exec($curl);
    curl_close($curl);
    echo $curl_response;
}
if (isset($_GET['hours'])) {
    $service_url = ($_SERVER['HTTP_HOST'] == 'localhost') ? 'http://localhost/essaygurus/api/fetchHours' : 'https://admins.writersplanet.net/api/fetchHours';
    $curl = curl_init($service_url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    $curl_response = curl_exec($curl);
    curl_close($curl);
    echo $curl_response;
}
// Hasnat added
include_once 'simple_html_dom.php';
include_once 'fpdf185/fpdf.php';
if (isset($_POST['text'])) {
    $text = $_POST['text'];
    if (!empty($text)) {
        $text_array = explode(" ", $text);
        if (count($text_array) <= 1000) {
            $text = trim($text);
            $data = preg_replace('/\s+/', ' ', $text);
            // The base URL to send the request to
        $url = 'https://spellchecker.encrypter.online/';
        
        // The data to send in the request
        $param = array(
            'sentence' => $data
        );

        // Append the data to the URL as a query string
        $url .= '?' . http_build_query($param);
        
        // Initialize a cURL session
        $ch = curl_init();
        
        // Set the URL for the session
        curl_setopt($ch, CURLOPT_URL, $url);
        
        // Set some optional cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        
        // Execute the request and get the response
        $response = curl_exec($ch);
        echo curl_error($ch);
        // Close the cURL session
        curl_close($ch);

        // Handle the response
            if ($response !== null) {
                   echo $response;
            } else {
                // The Python script has not run
                echo "Python script has not run.";
            }
          
            die;
        } else {
            echo 'Not more than 1000 words';
            die;
        }
    } else {
        echo 'Please Enter some text';
        die;
    }
}

if (isset($_POST['pla_text'])) {
    $text =  trim($_POST['pla_text']);
    $sentence = '';
    $sentences_array = array();
    $response = array();
    $ref_link = array();
    $pla_text = array();
    if (!empty($text)) {
        $text_array = explode(" ", $text);
        if (count($text_array) >= 15 && count($text_array) <= 1000) {
            $loop = 15;
            $plagarised_count = 0;
            $plagarised_words = 0;

            foreach ($text_array as $key) {
                --$loop;
                $sentence .= $key . ' ';

                if ($loop == 0) {
                    array_push($sentences_array, $sentence);
                    $loop = 15;
                    $sentence = '';
                }
            }
            $total_words = count($text_array);
            foreach ($sentences_array as $key) {
                $search = strtr($key, array('(' => '', ')' => '', '/' => ''));
                $key = rtrim($search, " ");
                // echo $key;die;
                $endpoint = preg_replace('/\s+/', '+', $key);

                $html = file_get_html("https://www.google.com/search?q=$endpoint");
                $count = 0;
                if ($html !== false) {
                    foreach ($html->find('div[id]') as $item => $data) {
                        if (preg_match('/' . $key . '/i', $data->outertext)) {

                            $pla_text[] = 'Plagarised Text:' . $key;
                            $count = 1;
                        }
                    }
                    if ($count == 1) {
                        $link_count = 6;
                        foreach ($html->find('a') as $item) {

                            $link = explode("=", $item->href);
                            if (strpos($item->href, 'http')) {
                                --$link_count;
                                $url = explode("&", $link[1]);

                                $ref_link[] = 'Reference Link: ' . $url[0];
                                if ($link_count == 0) {
                                    break;
                                }
                            }
                        }
                    }
                }
                if ($count == 1) {
                    ++$plagarised_count;
                }
            }

            $palagarised_words = $plagarised_count * 15;

            $palagarised_percentage = ($palagarised_words / $total_words) * 100;
            $uniqueness_perecentage = (($total_words - $palagarised_words) / $total_words) * 100;
            $response['plagiarism'] = 'Plagiarism: ' . round($palagarised_percentage) . "%";
            $response['uniqueness'] = 'Uniqueness: ' . round($uniqueness_perecentage) . '%';
            $response['pla_text'] = $pla_text;
            $response['ref_link'] = $ref_link;
        } else {
            echo 'Text should be atleast of 15 words and not greater than 1000 words';
            die;
        }
    } else {
        echo 'Please enter some text';
        die;
    }

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', 16);
    // echo '<pre>';print_r($response);
    foreach ($response as $key => $data) {
        $pdf->SetX(100);
        $pdf->Ln(40);

        if ($key == 'pla_text' && !empty($pla_text)) {
            foreach ($data as $key2) {

                $pdf->SetFillColor(255, 102, 102); // input R ,G , B 
                $pdf->SetDrawColor(255, 1, 1); // input R , G , B 
                $pdf->SetLineWidth(1);
                $pdf->MultiCell(170, 10, $key2, 1, 'L', true);
            }
        }

        if ($key == 'ref_link' && !empty($ref_link)) {
            foreach ($data as $key3) {
                $pdf->SetFillColor(51, 153, 255); // input R ,G , B 
                $pdf->SetDrawColor(0, 0, 153); // input R , G , B 
                $pdf->SetLineWidth(1);
                $pdf->MultiCell(170, 10, $key3, 1, 'L', true);
            }
        }
        if ($key == 'plagiarism') {
            $pdf->SetFillColor(255, 51, 0); // input R ,G , B 
            $pdf->SetDrawColor(255, 1, 1); // input R , G , B 
            $pdf->SetLineWidth(1);
            $pdf->MultiCell(170, 10, $data, 1, 'L', true);
        }

        if ($key == 'uniqueness') {
            $pdf->SetFillColor(0, 255, 0); // input R ,G , B 
            $pdf->SetDrawColor(0, 102, 0); // input R , G , B 
            $pdf->SetLineWidth(1);
            $pdf->MultiCell(170, 10, $data, 1, 'L', true);
        }
    }

    $pdf->Output('plagiarism_report.pdf', 'I');
    die;
    // $pdf->Output('my_file.pdf','D'); // to force download 
}
if (isset($_FILES['plagiarism_file']['name']) &&  !empty($_FILES['plagiarism_file']['name'])) {

    $fileName = $_FILES['plagiarism_file']['name'];
    $fileTmpName = $_FILES['plagiarism_file']['tmp_name'];
    $fileSize = $_FILES['plagiarism_file']['size'];
    $fileError = $_FILES['plagiarism_file']['error'];
    $fileType = $_FILES['plagiarism_file']['type'];

    $fileExt = explode('.', $fileName);
    $originalName = current($fileExt);
    $name = str_replace(' ', '_', $originalName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('doc', 'docx');

    if (in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 31457280) {
                $fileNameNew = $name . time() . "." . $fileActualExt;

                $fileDestination = '../../../assets/documents/' . $fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

                echo read_docx('../../../assets/documents/' . $fileNameNew);
                unlink('../../../assets/documents/' . $fileNameNew);
                die;
            } else {
                echo "Your file is to big!";
                die;
            }
        } else {
            echo "There was an eroor uploading your file!";
            die;
        }
    } else {
        echo "You can not upload file of this type!";
        die;
    }
}



function read_docx($filename)
{

    $striped_content = '';
    $content = '';
    if (!$filename || !file_exists($filename)) return false;

    $zip = zip_open($filename);
    if (!$zip || is_numeric($zip)) return false;

    while ($zip_entry = zip_read($zip)) {

        if (zip_entry_open($zip, $zip_entry) == FALSE) continue;

        if (zip_entry_name($zip_entry) != "word/document.xml") continue;

        $content .= zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));

        zip_entry_close($zip_entry);
    }
    zip_close($zip);
    $content = str_replace('</w:r></w:p></w:tc><w:tc>', " ", $content);
    $content = str_replace('</w:r></w:p>', "\r\n", $content);
    $striped_content .= strip_tags($content);

    return $striped_content;
    die;
}
function url_segment() {
    
     $path = "http" . (isset($_SERVER["HTTPS"]) ? "s" : "") . "://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
      $pathSegments = explode('/', rtrim($path, '/'));
      $lastSegment = end($pathSegments);
      return $lastSegment;
}

function load_conditional_stylesheets_and_scripts() {
    // Check if this is one of the pages where you want to load the conditional files
    if (is_page('free-tool/chemical-equation-checker') || is_page('free-tool/apa-referencing') || is_page('free-tool/gpa-calculator') || is_page('free-tool/chicago-referencing') || is_page('free-tool/factoring-calculator') || is_page('free-tool/grammar-checker') || is_page('free-tool/harvard-referencing') || is_page('free-tool/paper-checker') || is_page('free-tool/plagiarism-checker') || is_page('free-tool/spell-checker') || is_page('free-tool/word-counter') || is_page('free-tool/mla-referencing') || is_page('free-tool/thesis-statement-generator') || is_page('free-tool/ai-essay-writer'))  {
        // Enqueue your conditional CSS and JavaScript files here
        wp_enqueue_style('zoomslider', get_template_directory_uri() . '/tools-css/zoomslider.css');
        wp_enqueue_style('style', get_template_directory_uri() . '/tools-css/style_tools.css');
        wp_enqueue_style('custom', get_template_directory_uri() . '/tools-css/custom.css');
        wp_enqueue_style('slick', get_template_directory_uri() . '/tools-css/slick.css');
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/tools-css/bootstrap.css');
        wp_enqueue_style('slick-theme', get_template_directory_uri() . '/tools-css/slick-theme.css');
        wp_enqueue_script('jquery3', get_template_directory_uri() . '/tools-js/jquery-3.1.1.js', array('jquery'), 1, true);
        wp_enqueue_script('zoomsliderjs', get_template_directory_uri() . '/tools-js/jquery.zoomslider.min.js', array('jquery'), 1, true);
        wp_enqueue_script('slickjs', get_template_directory_uri() . '/tools-js/slick.js', array('jquery'), 1, true);
        wp_enqueue_script('ddaccordion', get_template_directory_uri() . '/tools-js/ddaccordion.js', array('jquery'), 1, true);
        wp_enqueue_script('customjs', get_template_directory_uri() . '/tools-js/custom1.js', array('jquery'), 1, true);
      
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/tools-js/bootstrap.js', array('jquery'), 1, true);
        
        wp_enqueue_script('chemical-script', get_template_directory_uri() . '/tools-js/chemical-script.js', array('jquery'), 1, true);
    }
}
add_action('wp_enqueue_scripts', 'load_conditional_stylesheets_and_scripts');


// function load_global_stylesheets_and_scripts() {
//     // Enqueue your global stylesheets and scripts here (for all pages)
//     wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
//     wp_enqueue_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    
//     // wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-2.2.0.min.js', array(), 1, true);
//     wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), 1, true);
//     wp_enqueue_script('customjs', get_template_directory_uri() . '/custom.js', array(), 1, true);
//     wp_enqueue_script('scrolltopcontrol', get_template_directory_uri() . '/js/scrolltopcontrol.js', array(), 1, true);
// }
// add_action('wp_enqueue_scripts', 'load_global_stylesheets_and_scripts');

function load_global_stylesheets_and_scripts() {
    // Enqueue your global stylesheets and scripts here (for all pages)
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), 1, 'all');
    wp_enqueue_style('custom', get_template_directory_uri() . '/custom.css', array(), 1, 'all');
    
    // Enqueue the latest version of jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '3.6.0', true);

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array(), 1, true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/custom.js', array(), 1, true);
    wp_enqueue_script('scrolltopcontrol', get_template_directory_uri() . '/js/scrolltopcontrol.js', array(), 1, true);
}
add_action('wp_enqueue_scripts', 'load_global_stylesheets_and_scripts');

// Add a custom endpoint for fetching post meta data
function custom_get_post_meta_endpoint( $data ) {
    // Check if API key is provided as a query parameter (you can also implement other authentication methods)
    $api_key = sanitize_text_field( $_GET['api_key'] ?? '' );

    // Validate the API key (Replace 'your_secret_key' with your actual API key)
    $valid_api_key = 'bf2ba573b723aefe1830d4dfea396193'; // Replace this with your desired API key

    if ( $api_key !== $valid_api_key ) {
        return new WP_Error( 'unauthorized', 'Invalid API Key', array( 'status' => 401 ) );
    }

    $post_id = $data['id'];
    $meta_data = get_post_meta( $post_id );

    return rest_ensure_response( $meta_data );
}

function register_custom_endpoints() {
    register_rest_route( 'custom/v1', '/posts/(?P<id>\d+)/meta', array(
        'methods'  => 'GET',
        'callback' => 'custom_get_post_meta_endpoint',
    ) );
}
add_action( 'rest_api_init', 'register_custom_endpoints' );




// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// Custom Image Sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-extra-large', 1000, 662, true);
add_image_size('blog-small', 355, 238, true);

// ----Seo related code------------
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'parent_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);


function disable_embeds_code_init() {
    remove_action( 'rest_api_init', 'wp_oembed_register_route' );
    remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    remove_action( 'wp_head', 'wp_oembed_add_host_js' );
    add_filter( 'embed_oembed_discover', '__return_false' );
    
}
add_action( 'init', 'disable_embeds_code_init', 9999 );

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

add_action( 'init', 'stop_heartbeat', 1 );
function stop_heartbeat() {
    wp_deregister_script('heartbeat');
}

function webp_upload_mimes($existing_mimes)
{
    // add webp to the list of mime types
    $existing_mimes['webp'] = 'image/webp';

    // return the array back to the function with our added mime type
    return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');



//** * Enable preview / thumbnail for webp image files.*/
function webp_is_displayable($result, $path)
{
    if ($result === false) {
        $displayable_image_types = array(IMAGETYPE_WEBP);
        $info = @getimagesize($path);

        if (empty($info)) {
            $result = false;
        } elseif (!in_array($info[2], $displayable_image_types)) {
            $result = false;
        } else {
            $result = true;
        }
    }

    return $result;
}
add_filter('file_is_displayable_image', 'webp_is_displayable', 10, 2);




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
// Get form data
if($_POST['full_name'] !='' && $_POST['phone'] && $_POST['email'] && $_POST['subject'] && $_POST['message']){
$name = $_POST['full_name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// Check for empty fields
if (empty($name) || empty($phone) || empty($email) || empty($subject) || empty($message)) {
echo 'Please fill in all required fields.';
exit; // Stop script execution
}

// Get user's country code and IP address
$ip_address = $_SERVER['REMOTE_ADDR'];
$json_data = file_get_contents('http://ipinfo.io/'.$ip_address.'/json');
$location_data = json_decode($json_data);
$country_code = $location_data->country;

// Format email message
$to = 'accounts@paperperk.com';
$subject = 'New form submission from ' . $name;
$body = "Name: $name\nEmail: $email\nPhone: $phone\nCountry Code: $country_code\nMessage:\n$message";

// Send email
if (mail($to, $subject, $body)) {
echo 'Message sent successfully!';
} else {
echo 'Message failed to send.';
}
}
}




// Remove Feeds
remove_action('wp_head', 'feed_links_extra', 3); // Remove Every Extra Links to Rss Feeds.
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'wc_products_rss_feed');



function add_lazyload_attribute($tag, $handle, $src) {
    if (strpos($tag, 'text/javascript') !== false) {
        return str_replace('<script', '<script loading="lazy"', $tag);
    }
    return $tag;
}
add_filter('script_loader_tag', 'add_lazyload_attribute', 10, 3);




function leverage_browser_caching() {
    if (!is_admin()) {
        header("Cache-Control: public, max-age=2592000"); // Cache for 30 days
        header("Expires: " . gmdate('D, d M Y H:i:s', strtotime("+30 days")) . " GMT");
    }
}
add_action('send_headers', 'leverage_browser_caching');

function enable_gzip_compression() {
    if (extension_loaded('zlib') && !ob_start('ob_gzhandler')) {
        ob_start();
    }
}
add_action('init', 'enable_gzip_compression');


function custom_handle_double_slashes() {
    if (preg_match('/[\/]{2,}/', $_SERVER['REQUEST_URI'])) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
        get_template_part(404);
        exit();
    }
}
add_action('template_redirect', 'custom_handle_double_slashes');