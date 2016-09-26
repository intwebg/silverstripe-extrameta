# SocialMediaPack
Bring social media links and shared to SilverStripe

What it do:
- Add default shared image to SiteConfig as $SiteConfig.Image
- Add shared image to page as $Image

How it works:
- The page containing $Image in MetaData is taken instead of $SiteConfig.Image when configured.
- The $SiteConfig.Image will be taken if $image isnt added inside pages.

Social media image usage:
- You must include SocialMediaLinks to display social media link into a templates
- And include SocialMediaShares to display social media sharing capabilities

Good for:
- News shared image
- Blog shared image
- Show social links in footer or header

Informations for your page templates:
- If you use a different image field name (ex.: NewsImage), you can duplicate it like:

    $this->ImageID = $this->NewsImageID;

- Remember to hide $Image when doing this operation:

    $fields->addFieldToTab('Root.Main.Metadata', new HiddenField("Image","Image"));

TODO:
- Translation to other language
- Make some interesting style sheets
