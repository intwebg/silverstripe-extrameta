<?php
class SocialMediaPackSiteConfig extends DataExtension {

	private static $has_one = array(
		'Image' => 'Image',
	);

	private static $has_many = array(
		'SocialMediaLinks' => 'SocialMediaLink',
		'SocialMediaShares' => 'SocialMediaShare',
	);

	function updateCMSFields(FieldList $fields) { 
	
		$fields->addFieldToTab(
            'Root.Main',    
            $uploadField = new UploadField(
                $name = 'Image',
                $title =  _t('SocialMediaPack.SHAREDIMAGE', 'Image to share')
            )    
        );
		$uploadField->setFolderName('Uploads/SocialMedia');
	
	
		$conf=GridFieldConfig_RelationEditor::create();
		$conf->addComponent(new GridFieldOrderableRows('SortOrder'));
		$fields->addFieldToTab('Root.SocialMedia',
			new GridField('SocialMediaLinks', 'SocialMediaLink',
			$this->owner->SocialMediaLinks(),
			$conf)
		);
		
		$conf=GridFieldConfig_RelationEditor::create();
		$conf->addComponent(new GridFieldOrderableRows('SortOrder'));
		$fields->addFieldToTab('Root.SocialMedia',
			new GridField('SocialMediaShares', 'SocialMediaShare',
			$this->owner->SocialMediaShares(),
			$conf)
		);
		
		return $fields; 

	}

}