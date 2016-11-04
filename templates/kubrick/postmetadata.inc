      This entry was posted on {$locale->formatDate($postDate,"%d %B, %Y %H:%M")}
      and filed under
      {foreach name=categories from=$post->getCategories() item=postcategory}
      <a href="{$url->categoryLink($postcategory)}">{$postcategory->getName()}</a>{if !$smarty.foreach.categories.last}, {/if}
      {/foreach}. 
      {if $blogsettings->getValue("comments_enabled") && $post->getCommentsEnabled()==1}
      You can leave a <a href="{$url->postPermalink($post)}#CommentForm">response</a>.
    {/if}
    {if $post->getNumTrackbacks() > 0}
    This article was <a href="{$url->postTrackbackStatsLink($post)}">trackbacked</a> {$post->getNumTrackbacks()} times.
    {/if}
