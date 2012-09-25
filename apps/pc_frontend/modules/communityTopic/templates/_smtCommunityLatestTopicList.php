<?php use_helper('Javascript', 'opUtil', 'opAsset') ?>
<script id="topicEntry" type="text/x-jquery-tmpl">
<div class="row">
  <div class="span3">${ago}</div>
  <div class="span9"><a href="<?php echo public_path('communityTopic')?>/${id}">${name}</a></div>
</div>
</script>

<script type="text/javascript">
$(function(){
  var params = {
    apiKey: openpne.apiKey,
    format: 'mini',
    id: <?php echo $communityId ?>,
    limit: 5
  }

  $.getJSON(openpne.apiBase + 'topic/search.json',
    params,
    function(res)
    {
      if (res.data.length > 0)
      {
        var entry = $('#topicEntry').tmpl(res.data);
        $('#topic').append(entry);
        $('#readmore').show();
      }
    }
  )
})
</script>

<hr class="toumei" />
<div class="row">
  <div class="gadget_header span12">トピック一覧</div>
</div>
<hr class="toumei" />
<div id="topic" style="margin-left: 0px;">
</div>

<div class="row hide" id="readmore">
<a href="<?php echo public_path('communityTopic/listCommunity').'/'.$communityId ?>" class="btn btn-block span11"><?php echo __('More')?></a>
</div>
