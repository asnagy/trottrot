<div class="well">
<h3>You've recently traveled!</p>

<ul class="media-list feed-main">
{foreach from=$cityList item=post}
  <li class="media">
    <a class="pull-left" href="#">
      <img class="media-object" src="/photos/avatar/{$post.city->id}.jpg" width="50" alt="{$city->id}">
    </a>
    <div class="media-body">
      <h4 class="media-heading"><a href="/destination/{$post.city->id}">{$post.city->city}</a></h4>
      <p class="feed-post-meta text-muted"><small>{$post.visited|date_format}</small></p>  
      <div>
        <a href="#" class="btn btn-default btn-sm pull-right"><span class="fa fa-times"></span> No, I did not.</a>
        <a href="#" class="btn btn-primary btn-sm"><span class="fa fa-map-marker"></span> Tag {$post.city->city}</a>
        <a href="#" class="btn btn-primary btn-sm"><span class="fa fa-pencil-square-o"></span> Review {$post.city->city}</a>
      </div>
    </div>
  </li>
{/foreach}
</ul>

</div>

<div 