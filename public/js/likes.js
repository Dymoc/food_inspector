
function animationLikes(){
    'use strict';

    // taken from mo.js demos
    function isIOSSafari() {
        var userAgent;
        userAgent = window.navigator.userAgent;
        return userAgent.match(/iPad/i) || userAgent.match(/iPhone/i);
    };

    // taken from mo.js demos
    function isTouch() {
        var isIETouch;
        isIETouch = navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
        return [].indexOf.call(window, 'ontouchstart') >= 0 || isIETouch;
    };

    // taken from mo.js demos
    var isIOS = isIOSSafari(),
        clickHandler = isIOS || isTouch() ? 'touchstart' : 'click';

    function extend(a, b) {
        for (var key in b) {
            if (b.hasOwnProperty(key)) {
                a[key] = b[key];
            }
        }
        return a;
    }

    function Animocon(el, options) {
        this.el = el;
        this.options = extend({}, this.options);
        extend(this.options, options);

        this.checked = false;

        this.timeline = new mojs.Timeline();

        for (var i = 0, len = this.options.tweens.length; i < len; ++i) {
            this.timeline.add(this.options.tweens[i]);
        }

        var self = this;
        this.el.addEventListener(clickHandler, function () {
            if (self.checked) {
                self.options.onUnCheck();
            } else {
                self.options.onCheck();
                self.timeline.play();
            }
            self.checked = !self.checked;
        });
    }

    Animocon.prototype.options = {
        tweens: [
            new mojs.Burst({
                shape: 'circle',
                isRunLess: true
            })
        ],
        onCheck: function () {
            return false;
        },
        onUnCheck: function () {
            return false;
        }
    };

    // grid items:
    var items = [].slice.call(document.querySelectorAll('.product-card__two-image'));

    function init() {
        for (let index = 0; index < items.length; index++) {
            /* Icon 11 */
		var el11 = items[index].querySelector('.like'), el11span = items[index].querySelector('.like').querySelector('.fa-heart');
		var opacityCurve11 = mojs.easing.path('M0,0 C0,87 27,100 40,100 L40,0 L100,0');
		var scaleCurve11 = mojs.easing.path('M0,0c0,80,39.2,100,39.2,100L40-100c0,0-0.7,106,60,106');
		new Animocon(items[index].querySelector('.like'), {
			tweens : [
				// ring animation
				new mojs.Transit({
					parent: items[index].querySelector('.like'),
					duration: 1000,
					delay: 100,
					type: 'circle',
					radius: {0: 95},
					fill: 'transparent',
					stroke: '#60BE74',
					strokeWidth: {50:0},
					opacity: 0.4,
					x: '15%',     
					y: '50%',
					isRunLess: true,
					easing: mojs.easing.bezier(0, 1, 0.5, 1)
				}),
				// ring animation
				new mojs.Transit({
					parent: items[index].querySelector('.like'),
					duration: 1800,
					delay: 300,
					type: 'circle',
					radius: {0: 80},
					fill: 'transparent',
					stroke: '#CC397B',
					strokeWidth: {40:0},
					opacity: 0.2,
					x: '17%',     
					y: '60%',
					isRunLess: true,
					easing: mojs.easing.bezier(0, 1, 0.5, 1)
				}),
				// icon scale animation
				new mojs.Tween({
					duration : 1300,
					easing: mojs.easing.ease.out,
					onUpdate: function(progress) {
						var opacityProgress = opacityCurve11(progress);
						items[index].querySelector('.like').querySelector('.fa-heart').style.opacity = opacityProgress;

						var scaleProgress = scaleCurve11(progress);
						items[index].querySelector('.like').querySelector('.fa-heart').style.WebkitTransform = items[index].querySelector('.like').querySelector('.fa-heart').style.transform = 'scale3d(' + scaleProgress + ',' + scaleProgress + ',1)';

						var colorProgress = opacityCurve11(progress);
						items[index].querySelector('.like').style.color = colorProgress >= 1 ? '#CC397B' : '#fff';
					}
				})
			],
			onUnCheck : function() {
				items[index].querySelector('.like').style.color = '#fff';	
			}
		});
		/* Icon 11 */
            
        }
		
  
    }

    init();


}
