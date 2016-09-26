<?php
class SocialMediaShare extends DataObject {

	private static $db = array(
		'SortOrder' => 'Int',
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
			4 => 'GooglePlus',
			5 => 'Email',
		);
    }
	
}