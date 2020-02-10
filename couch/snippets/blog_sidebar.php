<h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Categories</font></font></h4>
<ul class="sidebar">
    <cms:folders masterpage='blog.php'>
        <li><a class="blog" href="<cms:show k_folder_link />"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><cms:show k_folder_title /></font></font></a></li>
    </cms:folders>
</ul>

<h4><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Archives</font></font></h4>
<ul class="sidebar">
    <cms:archives masterpage='blog.php' limit='5'>
        <li><a class="blog" href="<cms:show k_archive_link />"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><cms:date k_archive_date format='F Y' /></font></font></a></li>
    </cms:archives>
</ul>