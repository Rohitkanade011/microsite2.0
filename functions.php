<?php 

	function checkCDNStaus($url){
		$handle = curl_init($url);
		curl_setopt($handle,  CURLOPT_RETURNTRANSFER, TRUE);
		$response = curl_exec($handle);
		$httpCode = curl_getinfo($handle, CURLINFO_HTTP_CODE);
		curl_close($handle);
		$httpCode = 0;
		return $httpCode;
	}

	function loadURL($cdn, $local){
		$httpCode = checkCDNStaus($cdn);
		if($httpCode >= 200 && $httpCode < 300){ $url = $cdn; }else{ $url = $local; }
		return $url;
	}

	function lazyLoadCSS($cdn, $local){
		$httpCode = checkCDNStaus($cdn);
		if($httpCode >= 200 && $httpCode < 300){
			echo '<link rel="preload" as="style" href="'. $cdn .'" onload="this.onload=null;this.rel=\'stylesheet\'" crossorigin="anonymous" /><noscript><link rel="stylesheet" href="'. $cdn .'"></noscript>';
		}else{
			echo '<link rel="preload" as="style" href="'. $local .'" onload="this.onload=null;this.rel=\'stylesheet\'" /><link rel="stylesheet" href="'. $local .'"></noscript>';
		}
	}
	
	function loadCSS($cdn, $local){
		$httpCode = checkCDNStaus($cdn);
		if($httpCode >= 200 && $httpCode < 300){
			echo '<link rel="stylesheet" href="'. $cdn .'" crossorigin="anonymous" async />';
		}else{
			echo '<link rel="stylesheet" href="'. $local .'" async />';
		}
	}

	function loadJS($cdn, $local){
		$httpCode = checkCDNStaus($cdn);
		if($httpCode >= 200 && $httpCode < 300){
			echo '<script src="'. $cdn .'" crossorigin="anonymous"></script>';
		}else{
			echo '<script src="'. $local .'"></script>';
		}
	}

	function lazyLoadJS($cdn, $local){
		$httpCode = checkCDNStaus($cdn);
		if($httpCode >= 200 && $httpCode < 300){
			echo 'var tag = document.createElement("script");
		      tag.src = "'. $cdn .'";
		      tag.setAttribute("defer", "");
		      tag.setAttribute("crossorigin", "anonymous");
		      document.getElementsByTagName("body")[0].appendChild(tag);';
		}else{
			echo 'var tag = document.createElement("script");
		      tag.src = "'. $local .'";
		      tag.setAttribute("defer", "");
		      document.getElementsByTagName("body")[0].appendChild(tag);';
		}
	}


	function loadImg($data){
        $fileName = pathinfo($data['src'], PATHINFO_FILENAME);
        $fileExt = pathinfo($data['src'], PATHINFO_EXTENSION);
        $filePath = "assets/img/";
        if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
          $filePath = "assets/img/webp/";
          $fileExt = "webp";  
        }
        echo '<img data-sizes="auto" data-src="'. $filePath.$fileName .'-thumb.'. $fileExt .'" class="lazyload '. $data['class'] .'" data-srcset="'. $filePath.$fileName .'-200w.'. $fileExt .' 200w,'. $filePath.$fileName .'-320w.'. $fileExt .' 320w,'. $filePath.$fileName .'-360w.'. $fileExt .' 360w,'. $filePath.$fileName .'-420w.'. $fileExt .' 420w,'. $filePath.$fileName .'-768w.'. $fileExt .'" '; if($data['style'] != "" ){ echo 'style="'. $data['style'] .'" '; } echo ' />';
        $fileExt = pathinfo($data['src'], PATHINFO_EXTENSION);
        $filePath = "assets/img/";
        echo '<noscript><img src="'. $filePath.$fileName .'-thumb.'. $fileExt .'" class="'. $data['class'] .'" srcset="'. $filePath.$fileName .'-200w.'. $fileExt .' 200w,'. $filePath.$fileName .'-320w.'. $fileExt .' 320w,'. $filePath.$fileName .'-360w.'. $fileExt .' 360w,'. $filePath.$fileName .'-420w.'. $fileExt .' 420w,'. $filePath.$fileName .'-768w.'. $fileExt .'" '; if($data['style'] != "" ){ echo 'style="'. $data['style'] .'" '; } echo ' /></noscript>';
    }


      function loadImgLg($data){
        $fileName = pathinfo($data['src'], PATHINFO_FILENAME);
        $fileExt = pathinfo($data['src'], PATHINFO_EXTENSION);
        $filePath = "assets/img/";
        if( strpos( $_SERVER['HTTP_ACCEPT'], 'image/webp' ) !== false ) {
          $filePath = "assets/img/webp/";
          $fileExt = "webp";  
        }
        echo '<img data-sizes="auto" data-src="'. $filePath.$fileName .'-thumb.'. $fileExt .'" class="lazyload '. $data['class'] .'" data-srcset="'. $filePath.$fileName .'-200w.'. $fileExt .' 200w,'. $filePath.$fileName .'-320w.'. $fileExt .' 320w,'. $filePath.$fileName .'-360w.'. $fileExt .' 360w,'. $filePath.$fileName .'-420w.'. $fileExt .' 420w,'. $filePath.$fileName .'-768w.'. $fileExt .' 768w,'. $filePath.$fileName .'-1000w.'. $fileExt .' 1000w,'. $filePath.$fileName .'-1200w.'. $fileExt .' 1200w,'. $filePath.$fileName .'-1280w.'. $fileExt .' 1280w,'. $filePath.$fileName .'-1366w.'. $fileExt .' 1366w,'. $filePath.$fileName .'-1400w.'. $fileExt .'" '; if($data['style'] != "" ){ echo 'style="'. $data['style'] .'" '; } echo ' />';
        $fileExt = pathinfo($data['src'], PATHINFO_EXTENSION);
        $filePath = "assets/img/";
        echo '<noscript>
                <img src="'. $filePath.$fileName .'-thumb.'. $fileExt .'" class="'. $data['class'] .'" srcset="'. $filePath.$fileName .'-200w.'. $fileExt .' 200w,'. $filePath.$fileName .'-320w.'. $fileExt .' 320w,'. $filePath.$fileName .'-360w.'. $fileExt .' 360w,'. $filePath.$fileName .'-420w.'. $fileExt .' 420w,'. $filePath.$fileName .'-768w.'. $fileExt .' 768w,'. $filePath.$fileName .'-1000w.'. $fileExt .' 1000w,'. $filePath.$fileName .'-1200w.'. $fileExt .' 1200w,'. $filePath.$fileName .'-1280w.'. $fileExt .' 1280w,'. $filePath.$fileName .'-1366w.'. $fileExt .' 1366w,'. $filePath.$fileName .'-1400w.'. $fileExt .'" '; if($data['style'] != "" ){ echo 'style="'. $data['style'] .'" '; } echo ' /></noscript>';
      }

?>