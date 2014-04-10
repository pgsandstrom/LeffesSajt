(function () {

    "use strict";
    var tusentips = window.tusentips = window.tusentips || {};

    tusentips.shufflePosts = function () {
        var list = document.getElementById("postList");
        var nodes = list.children, i = 0;
        nodes = Array.prototype.slice.call(nodes);
        nodes = shuffle(nodes);
        while (i < nodes.length) {
            list.appendChild(nodes[i]);
            ++i;
        }
    };

    tusentips.shuffleTags = function () {
        var list = document.getElementById("tagList");
        var nodes = list.children, i = 0;
        nodes = Array.prototype.slice.call(nodes);
        nodes = shuffle(nodes);
        while (i < nodes.length) {
            list.appendChild(nodes[i]);
            ++i;
        }
    };

    tusentips.shufflePosts();
    tusentips.shuffleTags();


    function shuffle(items) {
        var cached = items.slice(0), temp, i = cached.length, rand;
        while (--i) {
            rand = Math.floor(i * Math.random());
            temp = cached[rand];
            cached[rand] = cached[i];
            cached[i] = temp;
        }
        return cached;
    }
})();

// Fix for bug discussed here: http://stackoverflow.com/questions/21984543/google-chrome-bug-website-not-displaying-text
jQuery('body')
    .delay(300)
    .queue(
    function (next) {
        jQuery(this).css('padding-right', '1px');
    }
);