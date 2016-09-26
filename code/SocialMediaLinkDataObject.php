<?php
class SocialMediaLink extends DataObject {

	private static $db = array(
		'SortOrder' => 'Int',
		'Link' => 'Text',
		'Type' => 'Int',
		'Title' => 'Text',
	);
	private static $has_one = array(
		'SiteConfig' => 'SiteConfig',
	);
	

	function getCMSFields() {
        $fields = parent::getCMSFields();
	
		$conf=GridFieldConfig_RelationEditor::create();
        $conf->addComponent(new GridFieldOrderableRows('SortOrder'));

		$fields->addFieldToTab('Root.Main',
			new DropdownField('Type', 'Type', $this->SocialList()
		));
		$fields->addFieldToTab('Root.Main', new TextField("Link", "Link"));
		$fields->removeByName('SiteConfigID');
		$fields->removeByName('SortOrder');
		$fields->removeByName('Title');
		
		return $fields; 
		
	}
	
	function onBeforeWrite() {
		parent::onBeforeWrite();
		$type = $this->SocialList();
		$this->Title = $type[$this->Type];
	}

	public function SocialList() {
		return array(
			0 => 'Facebook',
			1 => 'Twitter',
			2 => 'LinkedIn',
			3 => 'Pinterest',
			4 => 'Instagram',
			5 => 'GooglePlus',
			6 => 'Blog',
			7 => 'Flickr',
			8 => 'YouTube',
			9 => 'Vimeo',
			10 => 'Tumblr',
			11 => 'Houzz',
		);
    }
	
}
