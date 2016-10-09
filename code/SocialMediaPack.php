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

class SocialMediaPackExtension extends DataExtension {

public function contentcontrollerInit() {
	
	
	if (!$this->MetaTitle) {
		$Title=$this->owner->Title;
	}
	$Description=$this->owner->MetaDescription;
	
	$SiteName = SiteConfig::get()->first()->Title;
	$AbsoluteLink = $this->owner->AbsoluteLink();
	
	var_dump( ($this->owner->Image()->Title));
	
	
	
	
	if (!is_null($this->owner->Image()->Title)) {
		$Image=$this->owner->Image()->AbsoluteLink();
	} else {
		$Image=SiteConfig::get()->first()->Image()->AbsoluteLink();
	}
	
		
	Requirements::insertHeadTags(<<<EOF
<meta property="og:title" content="$Title – $SiteName" />
<meta itemprop="name" content="$Title – $SiteName">
<meta property="og:site_name" content="$SiteName" />
<meta property="og:description" content="{$Description}"/>
<meta itemprop="description" content="{$Description}">
<meta property="og:url" content="$AbsoluteLink" />
<meta property="og:type" content="website" />
<meta property="og:image" content="$Image"/>
<meta itemprop="image" content="$Image">
<meta name="twitter:image:src" content="$Image">

EOF
);

		}
		
}