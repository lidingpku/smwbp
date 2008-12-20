<?php
/*  Copyright 2007, ontoprise GmbH
*  This file is part of the halo-Extension.
*
*   The halo-Extension is free software; you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation; either version 3 of the License, or
*   (at your option) any later version.
*
*   The halo-Extension is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*
*   You should have received a copy of the GNU General Public License
*   along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/*
 * Created on 24.07.2007
 *
 * Author: kai
 *
 * Used to pack javascript files to one big file.
 */

if (array_key_exists('SERVER_NAME', $_SERVER) && $_SERVER['SERVER_NAME'] != NULL) {
	echo "Invalid access! A maintenance script MUST NOT accessed from remote.";
	return;
}

 // license constants
 define('MIT_LICENSE_PROTOTYPE', 1);
 define('MIT_LICENSE_SCRIPTACULOUS', 2);
 define('GPL_LICENSE_ONTOPRISE', 3);
 define('GPL_LICENSE_XTREEVIEW', 4);
 define('WICK_LICENSE', 5);
 define('APACHE_LICENSE', 6);
 define('LGPL_LICENSE', 7);
 define('BSD_LICENSE', 8);
 define('LGPL_LICENSE_TOOLTIPS', 9);

 // license hints
 $licenses = array( MIT_LICENSE_PROTOTYPE => 'MIT-License; Copyright (c) 2005-2007 Sam Stephenson',
 					MIT_LICENSE_SCRIPTACULOUS => 'MIT-License; Copyright (c) 2005, 2006 Thomas Fuchs',
 					GPL_LICENSE_ONTOPRISE => 'GPL-License; Copyright (c) 2007 Ontoprise GmbH',
 					GPL_LICENSE_XTREEVIEW => 'GPL-License; (c) 2003-2004 Jean-Michel Garnier (garnierjm@yahoo.fr)',
 					WICK_LICENSE => 'WICK-License; Copyright (c) 2004, Christopher T. Holland',
 					APACHE_LICENSE => 'Apache-License',
 					LGPL_LICENSE => 'LGPL-License',
 					BSD_LICENSE => 'BSD-License',
 					LGPL_LICENSE_TOOLTIPS => 'LGPL-License; (c) 2002-2007 Walter Zorn (http://www.walterzorn.com)');

 // add script name as hint or not?
 $addScriptName = true;

 $mediaWikiLocation = dirname(__FILE__) . '/..';

 // directory where the scripts are located
 $sourcePath = 'c:/temp/halo_js_scripts/';

 $buildAll = count($argv) == 1; // build all if no parameter is set

/* 'smw' section*/

 if ($buildAll || $argv[1] == 'smw') {  // standard scripts which are loaded always (except special pages)
 	 // name of output file
 	 $outputFile = $mediaWikiLocation.'/scripts/deployGeneralScripts.js';

 	 // scripts which will be packed in one JS file (in this order!)
	 $scripts = array(
	 				  'effects.js' => MIT_LICENSE_SCRIPTACULOUS,
	 				  'slider.js' => MIT_LICENSE_SCRIPTACULOUS,
	 				  'dragdrop.js' => MIT_LICENSE_SCRIPTACULOUS,
	 				  'wick.js' => WICK_LICENSE,
	 				  'SMW_Help.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Links.js' => GPL_LICENSE_ONTOPRISE,
	 				  'Annotation.js' => GPL_LICENSE_ONTOPRISE,
	 				  'WikiTextParser.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Ontology.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_DataTypes.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_GenericToolbarFunctions.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Container.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Marker.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Category.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Relation.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Rule.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_CategoryRule.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_CalculationRule.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Properties.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_Refresh.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_DragAndResize.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_ContextMenu.js' => GPL_LICENSE_ONTOPRISE,
	 				  'CombinedSearch.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_AdvancedAnnotation.js' => GPL_LICENSE_ONTOPRISE  ,
	 				  'SMW_AnnotationHints.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_GardeningHints.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_SaveAnnotations.js' => GPL_LICENSE_ONTOPRISE,
	 				  'SMW_SemanticNotifications.js' => GPL_LICENSE_ONTOPRISE,
	 				  'def-webservices.js' => GPL_LICENSE_ONTOPRISE,
	                  'webservices-rep.js' => GPL_LICENSE_ONTOPRISE,
	                  'termImport.js' => GPL_LICENSE_ONTOPRISE
	 				  /*'edit_area_loader.js',
	 				  'SMWEditInterface.js'*/
	 				  
	 				);
   	buildScripts($outputFile, $scripts);
 }

 if ($argv[1] == 'OntologyBrowser' || $buildAll) { // scripts which are only loaded on OntologyBrowser Special page
 	$outputFile = $mediaWikiLocation.'/scripts/OntologyBrowser/deployOntologyBrowser.js';

 	// scripts which will be packed in one JS file (in this order!)
 	$scripts = array(
 				     'effects.js' => MIT_LICENSE_SCRIPTACULOUS,
 				   	 'ontologytools.js' => GPL_LICENSE_ONTOPRISE,
					 'treeview.js' => GPL_LICENSE_XTREEVIEW,
					 'treeviewActions.js' => GPL_LICENSE_ONTOPRISE,
					 'treeviewData.js' => GPL_LICENSE_ONTOPRISE,
					 'SMW_tooltip.js' => GPL_LICENSE_ONTOPRISE);
 	buildScripts($outputFile, $scripts);
 }

 if ($argv[1] == 'Gardening' || $buildAll) { // scripts which are only loaded on Gardening Special page
 	$outputFile = $mediaWikiLocation.'/scripts/Gardening/deployGardening.js';

 	// scripts which will be packed in one JS file (in this order!)
 	$scripts = array(
 					 'effects.js' => MIT_LICENSE_SCRIPTACULOUS,
					 'gardening.js' => GPL_LICENSE_ONTOPRISE);
 	buildScripts($outputFile, $scripts);
 }

 if ($argv[1] == 'QueryInterface' || $buildAll) { // scripts which are only loaded on QueryInterface Special page
 	$outputFile = $mediaWikiLocation.'/scripts/QueryInterface/deployQueryInterface.js';

 	// scripts which will be packed in one JS file (in this order!)
 	$scripts = array(

 					 'treeviewQI.js' => GPL_LICENSE_XTREEVIEW,
					 'queryTree.js' => GPL_LICENSE_ONTOPRISE,
					 'Query.js' => GPL_LICENSE_ONTOPRISE,
					 'QIHelper.js' => GPL_LICENSE_ONTOPRISE,
					 'qi_tooltip.js' => LGPL_LICENSE_TOOLTIPS,
 					 'SMW_tooltip.js' => GPL_LICENSE_ONTOPRISE);
 	buildScripts($outputFile, $scripts);
 }

 if ($argv[1] == 'General' || $buildAll) { // scripts which are loaded always
 	$outputFile = $mediaWikiLocation.'/scripts/deployGeneralTools.js';

 	// scripts which will be packed in one JS file (in this order!)
 	$scripts = array('ajaxhalo.js' => GPL_LICENSE_ONTOPRISE,
 					 'generalTools.js' => GPL_LICENSE_ONTOPRISE,
 	                 'breadcrump.js' => GPL_LICENSE_ONTOPRISE,
 	                 'generalGUI.js' => GPL_LICENSE_ONTOPRISE,
 	                 'contentSlider.js' => GPL_LICENSE_ONTOPRISE,
 					 'smw_logger.js' => GPL_LICENSE_ONTOPRISE,
 					 'SMW_Language.js' => GPL_LICENSE_ONTOPRISE);

 	buildScripts($outputFile, $scripts);
 }

 /**
  * Build one script file consisting of all scripts given in $scripts array.
  */
function buildScripts($outputFile, $scripts) {
     global $sourcePath, $addScriptName, $licenses;
     $result = readLicenseFile()."\r\n";
     
     // make sure line endings are consistent (SVN!)
     $result = str_replace("\n", "\r\n", $result);
     $result = str_replace("\r\r\n", "\r\n", $result);
     echo "\r\n\r\nBilding scripts: $outputFile\r\n";
     foreach($scripts as $s => $licenseNum) {
        $filename = $sourcePath.$s;
        $handle = fopen($filename, "rb");
        $contents = fread ($handle, filesize ($filename));
        
        // make sure line endings are consistent (SVN!)
        $contents = str_replace("\n", "\r\n", $contents);
        $contents = str_replace("\r\r\n", "\r\n", $contents);
        // FIXME: ugly hack to remove purchase hint in jasob TRIAL version
        //$contents = preg_replace("/\/\*([^\*]|\*[^\/])*\*\/\r\r\n/", "", $contents);
        echo 'Add '.$filename."...\r\n";
        if ($addScriptName) {
            $result .= '// '.basename($filename)."\r\n";
        } else {
            $result .= $contents."\r\n\r\n";
        }
        $result .= "// under ".$licenses[$licenseNum]."\r\n";
        $result .= $contents."\r\n\r\n";
        fclose($handle);
     }

     $handle = fopen($outputFile,"wb");
     echo "Write in output file: ".$outputFile."\r\n";
     fwrite($handle, $result);
     fclose($handle);
     echo "Done!\r\n";
 }

 /**
  * Returns text of license file.
  */
 function readLicenseFile() {
 	global $mediaWikiLocation;
 	print "\nRead license file...";
 	$filename = $mediaWikiLocation."/maintenance/licenses.txt";
 	$handle = fopen($filename, "rb");
 	$contents = fread ($handle, filesize ($filename));
 	print "done!\n";
 	return $contents;
 }

?>