<?php
class SocialMediaPackSiteConfig extends DataExtension {

	private static $db = array(
		// Icons type
		'SocialMediasStyles' => 'Int',
		
		// Follow link
		'FacebookURL' => 'Text',
		'TwitterURL' => 'Text',
		'LinkedInURL' => 'Text',
		'PinterestURL' => 'Text',
		'InstagramURL' => 'Text',
		'GooglePlusURL' => 'Text',
		'FlickrURL' => 'Text',
		'YouTubeURL' => 'Text',
		'VimeoURL' => 'Text',
		'TumblrURL' => 'Text',
		'HouzzURL' => 'Text',
		
		// Share yes or no
		'FacebookSHARE' => 'Boolean',
		'TwitterSHARE' => 'Boolean',
		'LinkedInSHARE' => 'Boolean',
		'PinterestSHARE' => 'Boolean',
		'InstagramSHARE' => 'Boolean',
		'GooglePlusSHARE' => 'Boolean',
	  
	);
	
	private static $has_one = array(
		'Image' => 'Image',
	);
/*
	private static $has_many = array(
		'SocialMediaLinks' => 'SocialMediaLink',
		'SocialMediaShares' => 'SocialMediaShare',
	);
*/
	function updateCMSFields(FieldList $fields) { 
	
	  	$fields->addFieldToTab('Root.Main', new Tab('' . _t('SocialMediaPack.SHARE', 'Share') ));
        $fields->addFieldToTab('Root.Main', new Tab('' . _t('SocialMediaPack.FOLLOW', 'Follow') ));
        $fields->addFieldToTab('Root.Main', new Tab('Style'));
		
		$fields->addFieldToTab('Root.SocialMedia.Style', new DropdownField('SocialMediasStyles','Buttons style',
			array(
				0 => 'I will do it myself',
				1 => 'Soft squares',
				2 => 'Round shapes',
				3 => '--Not used for the moment--',
				4 => 'Border squares to full round',
				5 => 'Light squares monochromes',
				6 => 'Gray bottom squares',
				7 => 'Bottom border smiling',
				8 => 'Small round shapes',
			)) 
		);
   
   
		
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.SHARE', 'Share') , new CheckboxField('FacebookSHARE'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.SHARE', 'Share') , new CheckboxField('TwitterSHARE'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.SHARE', 'Share') , new CheckboxField('LinkedInSHARE'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.SHARE', 'Share') , new CheckboxField('PinterestSHARE'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.SHARE', 'Share') , new CheckboxField('InstagramSHARE'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.SHARE', 'Share') , new CheckboxField('GooglePlusSHARE'));
	
		
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('FacebookURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('TwitterURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('LinkedInURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('PinterestURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('InstagramURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('GooglePlusURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('FlickrURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('YouTubeURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('VimeoURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('TumblrURL'));
        $fields->addFieldToTab('Root.SocialMedia.' . _t('SocialMediaPack.FOLLOW', 'Follow') , new TextField('HouzzURL'));
		
		
		
		/*
		$fields->addFieldToTab(
            'Root.SocialMedia.Share',    
            $uploadField = new UploadField(
                $name = 'Image',
                $title =  _t('SocialMediaPack.SHAREDIMAGE', 'Image to share')
            )    
        );
		$uploadField->setFolderName('Uploads/SocialMedia');
		*/
	/*
	
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
		*/
		return $fields; 

	}

}