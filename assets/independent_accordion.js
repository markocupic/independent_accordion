// run toggler in noConflict mode
if (window.jQuery) {
    var $jq = jQuery.noConflict();
    $jq(document).ready(function () {
        $jq('.indacc_toggler').click(function (event) {
            event.stopPropagation();
            $jq(this).toggleClass('indacc_toggler_active').next('.indacc_content').slideToggle('slow');
        });
    });
}
//mootools compat
else if (window.MooTools) {
    $(window).addEvent('domready', function (event) {
        $$('.indacc_toggler').addEvent('click', function (event) {
            var toggler = this;
            var content = toggler.getParent().getElements('.indacc_content')[0];
            var myFx = new Fx.Slide(content);
            if (content.getStyle('display') == 'none') {
                content.setStyle('display', 'block');
                myFx.hide();
            }
            toggler.toggleClass('indacc_toggler_active');
            myFx.toggle();
            event.stopPropagation();
        });
    });
}
else {
  //
}


