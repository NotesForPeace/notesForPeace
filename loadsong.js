jQuery(document).ready(function(){
    jQuery("#pills-song-tab").click(function(){
        loadTrackLink = jQuery(".song-button-container").children();
        loadTrackLink.trigger("click");
    });
});
