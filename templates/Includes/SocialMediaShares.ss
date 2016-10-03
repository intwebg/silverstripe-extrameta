<% require javascript(socialmediapack/templates/javascript/script.js) %>


<div class="socialmediashares">
    <div class='row type{$SiteConfig.SocialMediasStyles}'>
        
            <% if $SiteConfig.FacebookSHARE  %>
                <a title="Share to Facebook" class="social" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={$Top.AbsoluteLink.URLATT}%3Fm%3D{$Top.showDateTimecode}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <% end_if %>
            <% if $SiteConfig.TwitterSHARE  %>
                <a title="Share to Twitter" class="social" target="_blank" href="http://twitter.com/intent/tweet?status=<% if $Top.MetaTitle %>$Top.MetaTitle.URLATT<% else %>$Top.Title.URLATT<% end_if %> &ndash; {$Top.SiteConfig.Title}+{$Top.AbsoluteLink.URLATT}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <% end_if %>
            <% if $SiteConfig.LinkedInSHARE  %>
                <a title="Share to LinkedIn" class="social" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&url={$Top.AbsoluteLink.URLATT}%3Fm%3D{$Top.showDateTimecode}&title=<% if $Top.MetaTitle %>$Top.MetaTitle.URLATT<% else %>$Top.Title.URLATT<% end_if %> &ndash; {$Top.SiteConfig.Title.URLATT}&source={$Top.BaseHref.URLATT}"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <% end_if %>
            <% if $SiteConfig.PinterestSHARE  %>
                <a title="Share to Pinterest" class="social" target="_blank" href="http://pinterest.com/pin/create/bookmarklet/?media=<% if $Top.Image %>{$Top.Image.AbsoluteURL}<% else %>{$Top.SiteConfig.Image.AbsoluteURL}<% end_if %>&url={$Top.AbsoluteLink}&is_video=false&description=<% if $Top.MetaTitle %>$Top.MetaTitle.URLATT<% else %>$Top.Title.URLATT<% end_if %> &raquo; {$Top.SiteConfig.Title} <% if $Top.Content %>: $Top.Content.NoHTML<% else %> $Top.MetaDescription.URLATT<% end_if %>" ><i class="fa fa-pinterest" aria-hidden="true"></i></a>
            <% end_if %>
            <% if $SiteConfig.InstagramSHARE  %>
                <a title="Share to Instagram" class="social" target="_blank" href="https://plus.google.com/share?url={$Top.AbsoluteLink.URLATT}"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            <% end_if %>
            <% if $SiteConfig.GooglePlusSHARE  %>
                <a title="Share to Google+" class="social" href="mailto:?subject=<% if $Top.MetaTitle %>$Top.MetaTitle<% else %>$Top.Title<% end_if %> &ndash; {$Top.SiteConfig.Title}&amp;body={$Top.AbsoluteLink}"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            <% end_if %>
                        
    </div>
	
</div>