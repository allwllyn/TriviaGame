
<?php
setcookie("LastQuestion", "TriviaGame", time() + 3600, "/",  1);
//Above code, sets the cookie variable. 
var LastQuestion = $.cookie('LastQuestion'),
    current_location = document.URL;
if ("LastQuestion" && "LastQuestion" !== currentquestion) {
    window.location = "LastQuestion";
}
//checks if cookie is set and not equal to the current locatiion/question
//Set pattern
var pattern = new RegExp(window.location.host);

//On any link click test if the href does not have a match with the pattern
$('a').click(function() {
    var href = $(this).attr('href');
    if (pattern.test(href) !== true) {
        //If no match found, the link is external and adding current url to the cookies
        $.cookie('LastQuestion', document.URL, {
            expires: 1,
            path: '/'
        });
    } else {
        //Else if link is internal remove cookie and continue as normal
        $.removeCookie('LastQuestion', {
            path: '/'
        });
    }
});