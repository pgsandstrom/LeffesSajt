// Fix for bug discussed here: http://stackoverflow.com/questions/21984543/google-chrome-bug-website-not-displaying-text
jQuery('body')
    .delay(500)
    .queue(
    function(next){
        jQuery(this).css('padding-right', '1px');
    }
);