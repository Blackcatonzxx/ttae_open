{include file="../header.php"}
{$CSS}

<div class="nav_position">
当前位置: 
      <a href="{$_G.siteurl}" title="{$_G.setting.title}">{$_G.setting.title}</a> &gt; 
      <a href="{$URL}m=img&a=list" class="on">淘头条</a>
</div>

<div class="w990 etao-content feed-detail cl">
  <div class="main">
    <div class="region feed-region ">
      

{foreach from=$goods item=v}
<div class="listwz">
		<div class="spic">
         <a href="{$v.url}" target="_blank" title="{$v.title}"><img src="{$v.picurl}_180x180.jpg" alt="{$v.title}"></a>
         </div>
       
       <div class="cl slist">
        <h3><a href="{$v.url}" target="_blank" title="{$v.title}">{$v.title}</a></h3>
        <div class="lcont">{$v.description}</div>
        <div class="feed-buy-box cl" >
        <div class="feed-meta cl">
            <div class="feed-meta-cnt">
               <span>标签：
               {foreach from=$v.tags item=v1 key=k1}
                     <a href="{$URL}m=img&a=list&tag={$k1}" target="_blank" title="{$v1}">{$v1}</a>
                {/foreach}
               </span>
            </div>
            <div class="feed-meta-action">
                <div class="xp">
                <span>发表于 {$v.dateline}</span>
                <a href="{$v.url}" target="_blank" title="{$v.title}">热度：<span class="J_commentCount">（{$v.like}）</span></a></div>
            </div>
        </div>	
        </div>
        			 
    </div>
</div>
{/foreach}
      
      
    </div>
  </div>
  {include file="./right_bar.php"}
  
</div>

<div class="cl redpage">
{$showpage}
    </div>



{include file="../footer.php"}