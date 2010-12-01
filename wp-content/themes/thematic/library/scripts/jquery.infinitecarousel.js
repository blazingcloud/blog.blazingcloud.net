/*
 * jQuery Infinite Carousel
 * @author admin@catchmyfame.com - http://www.catchmyfame.com
 * @version 2.0.2
 * @date June 12, 2010
 * @category jQuery plugin
 * @copyright (c) 2009 admin@catchmyfame.com (www.catchmyfame.com)
 * @license CC Attribution-Share Alike 3.0 - http://creativecommons.org/licenses/by-sa/3.0/
 */

(function($) {
    $.fn.extend({
        infiniteCarousel: function(options)
        {
            var defaults =
            {
                transitionSpeed: 800,
                displayTime: 6000,
                textholderHeight: .25,
                easeLeft: 'linear',
                easeRight: 'linear',
                imagePath: 'images/',
                inView: 1, //the number of images "in view" to the user
                padding: '0',
                advance: 1,
                showControls: true,
                autoHideControls: false,
                autoHideCaptions: true, //captions view is raised on hover and lowered when !hovering
                animateCaptionsOnMove: true, //animate captions (down/up) when the view transitions
                autoStart: true,
                prevNextInternal: true,
                enableKeyboardNav: true,
                enableArrowAnimation: true,  //the caption's textbox left and right arrows will flash on carousel transitions
                onSlideStart: function() {
                },
                onSlideEnd: function() {
                },
                onPauseClick: function() {
                }
            };
            var options = $.extend(defaults, options);

            return this.each(function() {
                var randID = Math.round(Math.random() * 100000000);
                var o = options;
                var obj = $(this);
                var autopilot = o.autoStart;

                var numImages = $('img', obj).length; // Number of images
                var imgHeight = $('img:first', obj).height();
                var imgWidth = $('img:first', obj).width();

                if (o.inView > numImages - 1) o.inView = numImages - 1; // check to make sure inview isnt greater than the number of images. inview should be at least two less than numimages (otherwise hinting wont work and animating left may catch a flash), but one less can work
                $('p', obj).hide(); // Hide any text paragraphs in the carousel
                $(obj).css({'position':'relative','overflow':'hidden', 'background' : 'url(http://127.0.0.1/blazingcloud.net/wp-content/themes/sandbox/assets/carousel_background.png) no-repeat', 'padding':'12px 0'}).width("896px").height(imgHeight); //,'overflow':'hidden'
                $('ul', obj).css({'list-style':'none','margin':'0','padding':'0','position':'relative','overflow':'hidden'}).width("896px").height(imgHeight);
                $('li', obj).css({'display':'block','float':'left','margin':'0 75px'}).width("746px");

                // Move rightmost image over to the left
                $('li:last', obj).prependTo($('ul', obj));
                $('ul', obj).css('left', '0').width(9999);

                //build overlay div that is 200 px wide, 100% of height of the carousel, and append to both sides.
                html = '<div id="overlayLeft" style="background:url(http://127.0.0.1/blazingcloud.net/wp-content/themes/sandbox/assets/carousel_btn_left.png) no-repeat left center; height:324px;position:absolute;left:10px;top:0px;bottom:0px;" onclick="javascript:void(0);"></div>';
                html += '<div id="overlayRight" style="background:url(http://127.0.0.1/blazingcloud.net/wp-content/themes/sandbox/assets/carousel_btn_right.png) no-repeat right center; height:324px;position:absolute;right:10px;top:0px;bottom:0px;" onclick="javascript:void(0);"></div>';
                $(obj).append(html);

                $('#overlayLeft').width('65');
                $('#overlayRight').width('65');

                // Left and right arrow div actions (custom)
                $('#overlayRight').click(function() {
                    forcePrevNext('next');
                    clearTimeout(clearInt);
                }).hover(function() {
                    $(this).animate({opacity:'.25'}, 500)
                }, function() {
                    $(this).animate({opacity:'1'}, 500)
                });
                $('#overlayLeft').click(function() {
                    forcePrevNext('prev');
                    clearTimeout(clearInt);
                }).hover(function() {
                    $(this).animate({opacity:'.25'}, 500)
                }, function() {
                    $(this).animate({opacity:'1'}, 500)
                });

                // Build textholder div(s) as wide as one image and as tall as the textholderHeight option
                var containerBorder = parseInt($(obj).css('border-bottom-width')) + parseInt($(obj).css('border-top-width'));
                if (isNaN(containerBorder)) containerBorder = 0; // IE returns NaN for $(obj).css('border-bottom-width')
                var containerPaddingLeft = parseInt($(obj).css('padding-left')); // Normally we'd do both left and right but only left matters here

                for (i = 1; i <= o.inView; i++)
                {
                    $(obj).append('<div id="textholder' + randID + '_' + i + '" class="textholder" style="position:absolute;width:300px;overflow:hidden;top:' + ((imgHeight - $('#textholder' + randID + '_' + i).height()) / 2) + 'px"><span></span></div>');
                    $('#textholder' + randID + '_' + i).css({'left': imgWidth + 75,'margin-left':'0','margin-right':'0'});
                    $('#textholder' + randID + '_' + i).css({'color':'#FFFFFF', 'padding-left':'25px', 'font-size':'18pt', 'color': '#000', 'font-weight':'bold'});
                    
                    showtext($('li:eq(' + i + ') p', obj).html(), i);
                }

                function showtext(t, i) {
                    if (t != null) {
                        $('#textholder' + randID + '_' + i + ' span').html(t); // Change textholder content
                    }
                }

                function keyBind() {
                    if (o.enableKeyboardNav)
                    {
                        $(document).keydown(function(event) {
                            if (event.keyCode == 39)
                            {
                                forcePrevNext('next');
                                $(document).unbind('keydown');
                            }
                            if (event.keyCode == 37)
                            {
                                forcePrevNext('prev');
                                $(document).unbind('keydown');
                            }
                            if (event.keyCode == 80 || event.keyCode == 111) forcePause();
                            if (event.keyCode == 83 || event.keyCode == 115)
                            {
                                forceStart();
                                $(document).unbind('keydown');
                            }
                        });
                    }
                }

                function forcePrevNext(dir) {
                    autopilot = 0;
                    status = 'pause';
                    clearTimeout(clearInt);
                    (dir == 'prev') ? moveRight() : moveLeft();
                }

                function forcePause() {
                    if (autopilot) {
                        autopilot = 0;
                        clearTimeout(clearInt);
                    }
                }

                function forceStart() {
                    if (!autopilot) {
                        autopilot = 1;
                        moveLeft();
                        clearInt = setInterval(function() {
                            moveLeft();
                        }, o.displayTime + o.transitionSpeed);
                    }
                }

                function postMove() {

                    keyBind();
                    ary = [];
                    for (x = 1; x <= o.inView; x++) {
                        ary.push($('img:eq(' + x + ')', obj).attr('src'));
                    }
                    $('#textholder' + randID + '_' + i + ' span').show();
                    for (i = 1; i <= o.inView; i++) showtext($('li:eq(' + i + ') p', obj).html(), i);
                }

                function moveLeft(dist) {
                    if (dist == null) dist = o.advance;
                    if (o.displayTime == 0) {
                        clearInterval(clearInt);
                    } // If running a contonuous show with no display time, fist clear the interval. Then below, recursively call moveLeft

                    $('li:lt(' + dist + ')', obj).clone(true).insertAfter($('li:last', obj)); // Copy the first image (offscreen to the left) to the end of the list (offscreen to the right)
                    $('li:lt(' + dist + ')', obj).remove();

                    //This sucks BUT we need to move the ul to zero (back to the right from a negative value) because we remove the item from the front of the
                    //list and append it to the back which puts the element in the correct spot. So no animation actually happens unless we move the list
                    //to the right first and animate left.
                    $('ul', obj).css({'left':'0'});
                    $('ul', obj).animate({'left':'-896px'}, o.transitionSpeed, o.easeLeft, function() { // Animate the entire list to the left
                        postMove();
                        if (o.displayTime == 0) {
                            moveLeft();
                        }
                    });
                }

                function moveRight(dist) {
                    if (dist == null) dist = o.advance;

                    $('li:gt(' + (numImages - (dist + 1)) + ')', obj).clone(true).insertBefore($('li:first', obj)); // Copy rightmost (last) li and insert it after the first li
                    $('li:gt(' + (numImages - dist) + ')', obj).remove();
                    
                    $('ul', obj).css({'left': '-896px'});
                    $('ul', obj).animate({'left':'0'}, o.transitionSpeed, o.easeRight, function() {
                        postMove();
                    });
                }

                // Kickoff the show
                if (autopilot) {
                    var clearInt = setInterval(function() {
                        moveLeft();
                    }, o.displayTime + o.transitionSpeed);
                } else {
                    status = 'pause';
                }
                keyBind();
            });
        }
    });
})(jQuery);