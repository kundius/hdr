<?php  return array (
  'resourceClass' => 'modDocument',
  'resource' => 
  array (
    'id' => 1,
    'type' => 'document',
    'contentType' => 'text/html',
    'pagetitle' => 'Главная',
    'longtitle' => '',
    'description' => '',
    'alias' => 'index',
    'link_attributes' => '',
    'published' => 1,
    'pub_date' => 0,
    'unpub_date' => 0,
    'parent' => 0,
    'isfolder' => 0,
    'introtext' => '',
    'content' => '',
    'richtext' => 1,
    'template' => 2,
    'menuindex' => 0,
    'searchable' => 1,
    'cacheable' => 1,
    'createdby' => 1,
    'createdon' => 1504008436,
    'editedby' => 1,
    'editedon' => 1504470429,
    'deleted' => 0,
    'deletedon' => 0,
    'deletedby' => 0,
    'publishedon' => 0,
    'publishedby' => 0,
    'menutitle' => '',
    'donthit' => 0,
    'privateweb' => 0,
    'privatemgr' => 0,
    'content_dispo' => 0,
    'hidemenu' => 0,
    'class_key' => 'modDocument',
    'context_key' => 'web',
    'content_type' => 1,
    'uri' => 'index',
    'uri_override' => 0,
    'hide_children_in_tree' => 0,
    'show_in_tree' => 1,
    'properties' => NULL,
    '_content' => '{include \'file:templates/home.tpl\'}',
    '_isForward' => false,
  ),
  'contentType' => 
  array (
    'id' => 1,
    'name' => 'HTML',
    'description' => 'HTML content',
    'mime_type' => 'text/html',
    'file_extensions' => '',
    'headers' => NULL,
    'binary' => 0,
  ),
  'policyCache' => 
  array (
  ),
  'elementCache' => 
  array (
    '[[pdoCrumbs?showLog=``&fastMode=``&from=`0`&to=`1`&limit=`3`&exclude=``&outputSeparator=` / `&toPlaceholder=``&includeTVs=``&prepareTVs=`1`&processTVs=``&tvPrefix=`tv.`&where=``&showUnpublished=``&showDeleted=``&showHidden=`1`&hideContainers=``&tpl=`@INLINE [[+menutitle]]`&tplCurrent=`@INLINE [[+menutitle]]`&tplMax=``&tplHome=``&tplWrapper=`@INLINE [[+output]]`&wrapIfEmpty=``&showCurrent=`0`&showHome=`0`&showAtHome=`0`&hideSingle=``&direction=`rtl`&scheme=``&useWeblinkUrl=`1`&id=`0`&titleField=`longtitle`&cache=``&cacheTime=`0`&tplPages=`@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]`&pageVarKey=`page`&tplSearch=`@INLINE «[[+mse2_query]]»`&queryVarKey=`query`&minQuery=`3`&registerJs=``]]' => '',
    '[[pdoTitle?id=`0`&exclude=``&limit=`3`&titleField=`longtitle`&cache=``&cacheTime=`0`&tplPages=`@INLINE [[%pdopage_page]] [[+page]] [[%pdopage_from]] [[+pageCount]]`&pageVarKey=`page`&tplSearch=`@INLINE «[[+mse2_query]]»`&queryVarKey=`query`&minQuery=`3`&outputSeparator=` / `&registerJs=``]]' => 'Главная',
    '[[pdoMenu?showLog=``&fastMode=``&level=`1`&parents=`0`&displayStart=``&resources=``&templates=``&context=``&cache=``&cacheTime=`3600`&cacheAnonymous=``&plPrefix=`wf.`&showHidden=``&showUnpublished=``&showDeleted=``&previewUnpublished=``&hideSubMenus=``&useWeblinkUrl=`1`&sortdir=`ASC`&sortby=`menuindex`&limit=`0`&offset=`0`&rowIdPrefix=``&firstClass=`first`&lastClass=`last`&hereClass=`active`&parentClass=``&rowClass=``&outerClass=`menu__list`&innerClass=``&levelClass=``&selfClass=``&webLinkClass=``&tplOuter=`@INLINE <ul[[+classes]]>[[+wrapper]]</ul>`&tpl=`@INLINE <li[[+classes]]><a href="[[+link]]" [[+attributes]]>[[+menutitle]]</a>[[+wrapper]]</li>`&tplParentRow=``&tplParentRowHere=``&tplHere=``&tplInner=``&tplInnerRow=``&tplInnerHere=``&tplParentRowActive=``&tplCategoryFolder=``&tplStart=`@INLINE <h2[[+classes]]>[[+menutitle]]</h2>[[+wrapper]]`&checkPermissions=``&hereId=``&where=``&select=``&scheme=``&toPlaceholder=``&countChildren=``]]' => '<ul class="menu__list"><li class="first active"><a href="/" >Главная</a></li><li><a href="about-us" >О нас</a></li><li><a href="portfolio" >Портфолио</a></li><li><a href="reviews" >Отзывы</a></li><li><a href="before-and-after" >До и после</a></li><li><a href="video" >Видео</a></li><li><a href="journal" >Журнал</a></li><li><a href="services" >Услуги</a></li><li><a href="prices" >Цены</a></li><li><a href="master-classes" >Мастер-классы</a></li><li class="last"><a href="contacts" >Контакты</a></li></ul>',
  ),
  'sourceCache' => 
  array (
    'modChunk' => 
    array (
      'tpl.AdminPanel.outer' => 
      array (
        'fields' => 
        array (
          'id' => 34,
          'source' => 1,
          'property_preprocess' => false,
          'name' => 'tpl.AdminPanel.outer',
          'description' => '',
          'editor_type' => 0,
          'category' => 13,
          'cache_type' => 0,
          'snippet' => '<nav class="adminpanel ap-navbar ap-navbar-fixed-bottom [[+class_theme]] [[+class_status]]" role="navigation"
     style="opacity:[[+inactive_opacity]];">
    <ul class="ap-nav ap-navbar-nav">
        <li class="ap-link-first"><a href="[[+resource_update]]&id=[[*id]]" class="ap-navbar-link">[[%ap_edit_this]]</a>
        </li>
        [[+groups]]
    </ul>

    <ul class="ap-nav ap-navbar-nav ap-pull-right">
        <li>
            <a href="https://modstore.pro/adminpanel" class="ap-navbar-brand ap-pull-right" target="_blank">[[%adminpanel]]</a>
        </li>
        <li>
            <a href="#" class="ap-scroll-up" style="display:none;">
                &uarr;
            </a>
        </li>
    </ul>

    [[+msearch2_index:notempty=`
    <form class="ap-navbar-form ap-pull-right ap-msearch2" role="search" method="get" action="[[+msearch2_index]]"
          target="_blank">
        <input type="hidden" name="a" value="[[+msearch2_index_id]]">
        <input type="text" name="query" class="ap-msearch-query" placeholder="[[%ap_mse2_search]]" autocomplete="off">
    </form>
    `]]
</nav>
<div class="ap-close [[+class_theme]]"><b class="ap-caret [[+class_status]]"></b></div>',
          'locked' => false,
          'properties' => NULL,
          'static' => false,
          'static_file' => 'core/components/adminpanel/elements/chunks/chunk.outer.tpl',
          'content' => '<nav class="adminpanel ap-navbar ap-navbar-fixed-bottom [[+class_theme]] [[+class_status]]" role="navigation"
     style="opacity:[[+inactive_opacity]];">
    <ul class="ap-nav ap-navbar-nav">
        <li class="ap-link-first"><a href="[[+resource_update]]&id=[[*id]]" class="ap-navbar-link">[[%ap_edit_this]]</a>
        </li>
        [[+groups]]
    </ul>

    <ul class="ap-nav ap-navbar-nav ap-pull-right">
        <li>
            <a href="https://modstore.pro/adminpanel" class="ap-navbar-brand ap-pull-right" target="_blank">[[%adminpanel]]</a>
        </li>
        <li>
            <a href="#" class="ap-scroll-up" style="display:none;">
                &uarr;
            </a>
        </li>
    </ul>

    [[+msearch2_index:notempty=`
    <form class="ap-navbar-form ap-pull-right ap-msearch2" role="search" method="get" action="[[+msearch2_index]]"
          target="_blank">
        <input type="hidden" name="a" value="[[+msearch2_index_id]]">
        <input type="text" name="query" class="ap-msearch-query" placeholder="[[%ap_mse2_search]]" autocomplete="off">
    </form>
    `]]
</nav>
<div class="ap-close [[+class_theme]]"><b class="ap-caret [[+class_status]]"></b></div>',
        ),
        'policies' => 
        array (
        ),
        'source' => 
        array (
          'id' => 1,
          'name' => 'Filesystem',
          'description' => '',
          'class_key' => 'sources.modFileMediaSource',
          'properties' => 
          array (
          ),
          'is_stream' => true,
        ),
      ),
    ),
    'modSnippet' => 
    array (
    ),
    'modTemplateVar' => 
    array (
    ),
  ),
);