//binding jquery in wrapper for use of $
jQuery(document).ready(function ($) {
    // js/Jquery code here
    $(".post").mouseenter(function (e) {

        //getting .post values
        const postImg = $(this).children("a").children(".post-img").attr("src");
        const postTitle = $(this).children(".post-description").children(".post-title").children("span").html();
        const postDescription = $(this).children(".post-description").children(".post-title").attr("description");

        //setting .post values in right column
        $(".most-viewed-img").attr("src", postImg);
        $(".most-viewed-title").html(postTitle);
        $(".most-viewed-text").html(postDescription);

    }).mouseleave(function(){
        //change to hover pic if mouse leaves: index
        const postSrc = $("#postOverview").attr("src");
        const postTitle = $("#postOverview").attr("text");
        
        $(".most-viewed-img").attr("src",postSrc );
        $(".most-viewed-title").html(postTitle);
        $(".most-viewed-text").html("");
    });

    //if any image is not found, load default image
    $("img").error(function () {
        $(this).unbind("error").attr("src", "/blog/wp-content/themes/ht_blog_theme /public/img/img_default.jpg");
    });

    //adding last custom menu icon
    $("ul.menu").append('<li id="" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-30"><a class="headerMenuIcon" href="#"></a></li>');

});


// snippet to stop jquery conflict warning in console
jQuery.event.special.touchstart = {
    setup: function (_, ns, handle) {
        if (ns.includes("noPreventDefault")) {
            this.addEventListener("touchstart", handle, { passive: false });
        } else {
            this.addEventListener("touchstart", handle, { passive: true });
        }
    }
};