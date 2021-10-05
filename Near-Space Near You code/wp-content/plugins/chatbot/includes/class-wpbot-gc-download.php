<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class WPBotGCDownload
{
    private $download_url = 'https://github.com/qcloud/gc/raw/master/wpbotgc.zip';
    private $filename = 'wpbotgc.zip';
    public function __construct(){
        add_action('wp_ajax_qcld_wp_chatbot_gc_client_download', array($this, 'downloadgc'));
        add_action('wp_ajax_nopriv_qcld_wp_chatbot_gc_client_download', array($this, 'downloadgc'));
        add_action('wp_ajax_qcld_wp_chatbot_gc_client_extract', array($this, 'extractgc'));
        add_action('wp_ajax_nopriv_qcld_wp_chatbot_gc_client_extract', array($this, 'extractgc'));
        
    }

    public function create_folder($gcdirectory){
        return @mkdir( $gcdirectory, 0777, true );
    }

    public function create_file($filename){
        if ( ! @file_exists( $filename ) ) {
			if ( ! @is_writable( dirname( $filename ) ) ) {
				return false;
			}

			if ( ! @touch( $filename ) ) {
				return false;
			}
		} elseif ( ! @is_writable( $filename ) ) {
			return false;
		}

		$is_written = false;
		if ( ( $handle = @fopen( $filename, 'w' ) ) !== false ) {
			if ( @fwrite( $handle, '<?php //silence is golden' ) !== false ) {
				$is_written = true;
			}

			@fclose( $handle );
		}

		return $is_written;
    }

    public function downloadgc(){
        $gcdirectory = QCLD_wpCHATBOT_GC_DIRNAME;

        if ( ! is_dir( $gcdirectory ) ) {
			$this->create_folder( $gcdirectory );
		}
        if(!file_exists($gcdirectory.'/index.php')){
            $this->create_file( $gcdirectory.'/index.php' );
        }

        if(is_dir($gcdirectory)){

            $zipFile = $gcdirectory."/".$this->filename; // Local Zip File Path
            $zipResource = fopen($zipFile, "w");
            // Get The Zip File From Server
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->download_url);
            curl_setopt($ch, CURLOPT_FAILONERROR, true);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_AUTOREFERER, true);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER,true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
            curl_setopt($ch, CURLOPT_FILE, $zipResource);
            $page = curl_exec($ch);
            if(!$page) {
                $response = array('status'=>'error','content'=> curl_error($ch));
                echo wp_send_json($response);
                wp_die();
            }
            curl_close($ch);
            $response = array('status'=>'success','content'=> 'File downloaded successfully');
        }else{
            $response = array('status'=>'error','content'=> 'Server does not allow to create files and folders');
        }

        echo wp_send_json($response);
        wp_die();
    }

    function extractgc(){
        $gcdirectory = QCLD_wpCHATBOT_GC_DIRNAME;
        $gcfilename = QCLD_wpCHATBOT_GC_DIRNAME.'/'.$this->filename;
        /* Open the Zip file */
        $zip = new ZipArchive;
        $extractPath = "path_to_extract";
        if($zip->open($gcfilename) != "true"){
            $response = array('status'=>'error','content'=> 'File Not Found!');
            echo wp_send_json($response);
            wp_die();
        } 
        /* Extract Zip File */
        $zip->extractTo($gcdirectory);
        $zip->close();
        @unlink($gcfilename);
        $response = array('status'=>'success','content'=> 'Files Extracted successfully!');
        echo wp_send_json($response);
        wp_die();

    }
}

new WPBotGCDownload();
