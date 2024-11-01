// Regex via http://stackoverflow.com/a/6582227/12442
// jQuery Filter idea via http://stackoverflow.com/a/193787/12442
jQuery(function() {
    jQuery('a').filter(function() {
        return this.href.match(/\.([0-9a-z]+)(?:[\?#]|$)/i);
    }).prop('target', '_blank');
});