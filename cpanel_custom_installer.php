//==========================================================================
// STEP I: INTERNAL CONFIGURABLES  
//==========================================================================
  
public function step1_init()
{
	$this->setStepLabel("_step_progress_settings");
	// TIP: custom inputs can be added here! see: http://www.installatron.com/sdk_commands#howinput
	
	   class i_installer_customcode{
	   	function init(){
	   		$this->registerArchive("etech-dashboard-widget_two-panel", "http://area51.as.ua.edu/rainer/wordpress-plugins/etech-dashboard-widget_two-panel.zip", "zip");
	   		//  $this->registerArchive("themea", "http://www.something.com.au/Theme_A.zip", "zip");
	   		$this->registerCustomCode("wordpress", "all", "install", 1, "init", "wordpressinstall");
	   		$this->registerCustomCode("wordpress", "all", "install", "last", "process", "wordpressinstall");
	   		$this->registerCustomCode("wordpress", "all", "upgrade", "last", "process", "wordpressupgrade");
	     }	/* End function init() */
	    function wordpressinstallinput($o){
	    	$o->setInputFields(array(
	    		array( "TYPE" => "header", "LABEL" => "Plugin Options" ),
	    		array(
	    			"ID" => "etech-dashboard-widget_two-panel",
	    			"LABEL" => "eTech Dashboard Widget (Two-Panel)",
	    			"TEXT" => "eTech Dashboard Widget (Two-Panel)",
	    			"TYPE" => "check",
	    			),
	    	 ));	/* End plugin setInputFields array */
	
/* 		    $o->setInputFields(array(
				array( "TYPE" => "header", "LABEL" => "Theme Options" ),
	       		array(
	           		"ID" => "themea",
	           		"LABEL" => "Theme A",
	           		"TEXT" => "Theme A",
	           		"TYPE" => "check",
	           		),
	   		));		/* End theme setInputFields array	*//*
*/
	       }	/* End function wordpressinstallinput($o) */
	   function wordpressinstall($o){
	   	if ( isset($o->input["field_etech-dashboard-widget_two-panel"]) && $o->input["field_etech-dashboard-widget_two-panel"] === "1" ){
	   		$o->extract("etech-dashboard-widget_two-panel","wp-content/plugins");
	   	 }
/*    if ( isset($o->input["field_themea"]) && $o->input["field_themea"] === "1" )
	   {
	       $o->extract("themea","wp-content/themes");
	   }
*/
	   	$o->write(".htaccess", "");
	   	$o->chmod(".htaccess", 755);
	   	$o->write(".dont_disable_plugins", "please");
	   	$o->rm("wp-content/plugins/hello.php");
	   	$o->rm("wp-content/plugins/akismet/");
	    } /* End function wordpressinstall($o) */
	       function wordpressupgrade($o) {
	       	// something to do at each upgrade
	        }
	   }	/* End class i_installer_customcode */
	
}	/* End public function step1_init()  */
	
	
public function step1_process()
{
	// TIP: error checking for custom inputs can be added here
}
	
//==========================================================================
// STEP II: ARCHIVE EXTRACTION
//==========================================================================
	
public function step2_init()
{
	$this->setStepLabel("_step_progress_extracting");
}
	
public function step2_process()
{
	// extract the 'main' archive:
	$this->extract("main");
}
	
//==========================================================================
// STEP III: CONFIGURING INSTALL
//==========================================================================
	
public function step3_init()
{
	$this->setStepLabel("_step_progress_processing");
}
	
public function step3_process()
{
	// TIP: this is where your install code goes. see: http://www.installatron.com/sdk
	// TIP: if no code is added here, the installer will simply extract the archive
	//      into the install directory.
	
	// TIP: install code is made of Installatron commands. some examples:
	//   move                $this->mv('FROM','TO');
	//   copy                $this->cp('FROM','TO');
	//   remove (delete)     $this->rm('FILE_OR_DIR');
	//   chmod               $this->chmod('FILE_OR_DIR',0777);
	//   edit file (regex)   $this->sr('FILE','#REGEX#","REPLACE_WITH");
	//   ...see all the commands at: http://www.installatron.com/sdk_commands
	
	// TIP: Installatron has a lot of useful variables. some examples:
	//   install url         $this->url
	//   install path        $this->path
	//   database host       $this->db_host
	//   database host       $this->db_host
	//   database name       $this->db_name
	//   database username   $this->db_user
	//   database password   $this->db_pass
	//   table prefix        $this->db_prefix
	//   ...see all the variables at: http://www.installatron.com/sdk_commands
	
	// TIP: you can add as many steps as you need
	// TIP: you can remove these comments if you don't need them.
	   }
