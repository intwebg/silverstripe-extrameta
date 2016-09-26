	<meta property="og:title" content="<% if $MetaTitle %>{$MetaTitle}<% else %>{$Title}<% end_if %> – {$SiteConfig.Title}" />
	<meta property="og:site_name" content="{$SiteConfig.Title}" />
	<meta property="og:description" content="{$Description}"/>
<% if $Image || $SiteConfig.Image %>
	<meta Betterperty="og:image" content="<% if $Image %>{$Image.AbsoluteURL}<% else %>{$SiteConfig.Image.AbsoluteURL}<% end_if %>"/>
<% end_if %>
	<meta property="og:url" content="{$AbsoluteLink}" />
	<meta property="og:type" content="website" />
	<meta itemprop="name" content="<% if $MetaTitle %>{$MetaTitle}<% else %>{$Title}<% end_if %> – {$SiteConfig.Title}">
	<meta itemprop="image" content="<% if $SiteSocialImage %>{$SiteSocialImage.CroppedImage(1024,512).AbsoluteURL}<% else %>{$SiteConfig.SiteSocialImage.CroppedImage(1024,512).AbsoluteURL}<% end_if %>">
	<meta itemprop="description" content="{$MetaDescription}">
	<meta name="twitter:image:src" content="<% if $SiteSocialImage %>{$SiteSocialImage.AbsoluteURL}<% else %>{$SiteConfig.SiteSocialImage.AbsoluteURL}<% end_if %>">
