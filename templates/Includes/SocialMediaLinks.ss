
<div class="socialmedialinks">
	<% loop SocialMediaLinks.sort(SortOrder) %>
		<% if Type=0  %>	<a href="$Link"><i class="fa fa-facebook" aria-hidden="true"></i></a><% end_if %>
		<% if Type=1  %>	<a href="$Link"><i class="fa fa-twitter" aria-hidden="true"></i></a><% end_if %>
		<% if Type=2  %>	<a href="$Link"><i class="fa fa-linkedin" aria-hidden="true"></i></a><% end_if %>
		<% if Type=3  %>	<a href="$Link"><i class="fa fa-pinterest" aria-hidden="true"></i></a><% end_if %>
		<% if Type=4  %>	<a href="$Link"><i class="fa fa-instagram" aria-hidden="true"></i></a><% end_if %>
		<% if Type=5  %>	<a href="$Link"><i class="fa fa-google-plus" aria-hidden="true"></i></a><% end_if %>
		<% if Type=6  %>	<a href="$Link"><i class="fa fa-blog" aria-hidden="true"></i></a><% end_if %>
		<% if Type=7  %>	<a href="$Link"><i class="fa fa-flickr" aria-hidden="true"></i></a><% end_if %>
		<% if Type=8  %>	<a href="$Link"><i class="fa fa-youtube" aria-hidden="true"></i></a><% end_if %>
		<% if Type=9  %>	<a href="$Link"><i class="fa fa-vimeo" aria-hidden="true"></i>v<% end_if %>
		<% if Type=10 %>	<a href="$Link"><i class="fa fa-tumblr" aria-hidden="true"></i></a><% end_if %>
		<% if Type=11 %>	<a href="$Link"><i class="fa fa-houzz" aria-hidden="true"></i></a><% end_if %>
	<% end_loop %>
</div>