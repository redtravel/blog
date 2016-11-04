      This entry was posted on {$locale->formatDate($postDate,"%d %B, %Y %H:%M")}
      and file under
      {foreach name=categories from=$post->getCategories() item=postcategory}
      <a href="{$url->categoryLink($postcategory)}">{$postcategory->getName()}</a>{if !$smarty.foreach.categories.last}, {/if}
      {/foreach}. <br/>
      You can leave a response below,
      or <a href="{$url->postTrackbackStatsLink($post)}">{$locale->tr("trackbacks")}</a> from your own site.
