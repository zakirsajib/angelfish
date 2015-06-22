<script>
$j = jQuery.noConflict();		
		$j( document ).ready(function() {
 //Set Url of JSON data from the facebook graph api. make sure callback is set with a '?' to overcome the cross domain problems with JSON
 var url = "https://graph.facebook.com/fql?q=SELECT%20url,%20normalized_url,%20share_count,%20like_count,%20comment_count,%20total_count,commentsbox_count,%20comments_fbid,%20click_count%20FROM%20link_stat%20WHERE%20url=%27<?php echo get_permalink();?>%27";


/*
{
   "data": [
      {
         "url": "http://rivals.gg/hiko-leaves-cloud9-rules-out-retirement/",
         "normalized_url": "http://www.rivals.gg/hiko-leaves-cloud9-rules-out-retirement/",
         "share_count": 0,
         "like_count": 0,
         "comment_count": 0,
         "total_count": 0,
         "commentsbox_count": 0,
         "comments_fbid": 501642409964659,
         "click_count": 0
      }
   ]
}

*/


 //Use jQuery getJSON method to fetch the data from the url and then create our unordered list with the relevant data.
    $j.getJSON(url,function(json){
        console.log(JSON.stringify(json));
        $j('#facebookfeed').animate({opacity:0}, 500, function(){
            $j('#facebookfeed').html("<span class='sharecount'>"+json.data[0].share_count+"</span>");
        });
        $j('#facebookfeed').animate({opacity:1}, 500);
 
    });
});
</script>
