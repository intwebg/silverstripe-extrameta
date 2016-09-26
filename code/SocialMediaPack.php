<?php
class SocialMediaPack extends DataExtension {

	private static $has_one = array(
		'Image' => 'Image',
	);

	function updateCMSFields(FieldList $fields) { 
	
		$fields->addFieldToTab(
            'Root.Main.Metadata',    
            $uploadField = new UploadField(
                $name = 'Image',
                $title = _t('SocialMediaPack.SHAREDIMAGE','Shared image')
            )    
        );
		$uploadField->setFolderName('Uploads/SocialMedia');

		return $fields; 
		
	}

}