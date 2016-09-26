
<div class="socialmediashares">

	<% loop SocialMediaShares.sort(SortOrder) %>
		<% if Type=0  %>
			<a class="social" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={$AbsoluteLink.URLATT}%3Fm%3D{$showDateTimecode}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		<% end_if %>
		<% if Type=1  %>
			<a class="social" target="_blank" href="http://twitter.com/intent/tweet?status=<% if $MetaTitle %>$MetaTitle.URLATT<% else %>$Title.URLATT<% end_if %> &ndash; {$SiteConfig.Title}+{$AbsoluteLink.URLATT}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
		<% end_if %>
		<% if Type=2  %>
			<a class="social" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url={$AbsoluteLink.URLATT}%3Fm%3D{$showDateTimecode}&title=<% if $MetaTitle %>$MetaTitle.URLATT<% else %>$Title.URLATT<% end_if %> &ndash; {$SiteConfig.Title.URLATT}&source={$BaseHref.URLATT}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		<% end_if %>
		<% if Type=3  %>
			<a class="social" target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?media=<% if $Image %>{$Image.AbsoluteURL}<% else %>{$SiteConfig.Image.AbsoluteURL}<% end_if %>&url={$AbsoluteLink}&is_video=false&description=<% if $MetaTitle %>$MetaTitle.URLATT<% else %>$Title.URLATT<% end_if %> &raquo; {$SiteConfig.Title} <% if $Content %>: $Content.NoHTML<% else %> $MetaDescription.URLATT<% end_if %>" ><i class="fa fa-pinterest" aria-hidden="true"></i></a>
		<% end_if %>
		<% if Type=4  %>
			<a class="social" target="_blank" href="https://plus.google.com/share?url={$AbsoluteLink.URLATT}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		<% end_if %>
		<% if Type=5  %>
			<a class="" href="mailto:?subject=<% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &ndash; {$SiteConfig.Title}&amp;body={$AbsoluteLink}"><i class="fa fa-envelope" aria-hidden="true"></i></a>
		<% end_if %>
	<% end_loop %>
	
</div>