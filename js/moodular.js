/**
 * Moodular - Carousel Framework
 * Copyright (c) 2014 Sylvain "GouZ" Gougouzian (sylvain@gougouzian.fr)
 * MIT (http://www.opensource.org/licenses/mit-license.php) licensed.
 * GNU GPL (http://www.gnu.org/licenses/gpl.html) licensed.
 */
!function($) {
	'use strict';
	var Moodular = function(content, opts, ctrls, fxs) {
		this.version = '4.3';
		this.opts = opts;
		this.ctrls = ctrls;
		this.fxs = fxs;
		this.$element = $(content);
		this.init();
	};
	Moodular.prototype = {
		init : function() {
			this.current = 0;
			this.next = -1;
			this.items = $('>' + this.opts.selector, this.$element);
			this.nbItems = this.items.length;
			this.$element.css('position', 'relative');
			this.items.css({
				position : 'absolute',
				top : 0,
				left : 0
			});
			var that = this;
			this.$element.on('moodular.prev', function() {
				if (that.next == -1) {
					that.next = that.current - that.opts.step;
					if (that.next < 0)
						that.next += that.nbItems;
				}
			}).on('moodular.next', function() {
				if (that.next == -1)
					that.next = (that.current + that.opts.step) % that.nbItems;
			}).on('moodular.prev moodular.next', function() {
				that.stop();
				that.items.removeClass('active').eq(that.next).addClass('active');
			}).on('moodular.end', function() {
				if (that.opts.timer)
					that.timer = setTimeout(function() {
						that.start();
					}, that.opts.timer);
			});
			var fxs = this.opts.effects.split(' ');
			for (var i in fxs)
				if ($.isFunction(this.fxs[fxs[i]]))
					this.fxs[fxs[i]](this);
			var ctrls = this.opts.controls.split(' ');
			for (var i in ctrls)
				if ($.isFunction(this.ctrls[ctrls[i]]))
					this.ctrls[ctrls[i]](this);
			this.$element.on('moodular.prev moodular.next', function() {
				that.current = that.next;
				that.next = -1;
				that.speedTimer = setTimeout(function() {
					that.$element.trigger('moodular.end');
				}, that.opts.speed);
			});
			this.items.eq(0).addClass('active');
			if (this.opts.timer)
				this.timer = setTimeout(function () {
					that.start();
				}, this.opts.timer);
		},
		start : function() {
			this.$element.trigger('moodular.next');
		},
		stop : function() {
			clearTimeout(this.timer);
			clearTimeout(this.speedTimer);
		},
		moveTo : function(to, pn) {
			var n = to % this.nbItems;
			if (n != this.current) {
				this.next = n;
				this.$element.trigger('moodular.' + (pn == 'prev' ? 'prev' : 'next'));
			}
		}
	};
	$.fn.moodular = function(option, param1, param2) {
		return this.each(function() {
			var $this = $(this),
				data = $this.data('moodular');
			if (!data)
				$this.data('moodular', (data = new Moodular(this, $.extend({}, $.fn.moodular.defaults, $this.data(), typeof option == 'object' && option), $.extend({}, $.fn.moodular.controls), $.extend({}, $.fn.moodular.effects))));
			if (typeof option == 'string')
				data[option](param1, param2);
		});
	};
	$.fn.moodular.defaults = {
		speed : 500,
		timer : 0,
		step : 1,
		effects : '',
		controls : '',
		easing : '',
		selector : 'li',
		queue : false
	};
	$.fn.moodular.controls = {};
	$.fn.moodular.effects = {};
}(window.jQuery);

/**
 * Moodular - Effect / Mosaic
 * Copyright (c) 2013 Sylvain "GouZ" Gougouzian (sylvain@gougouzian.fr)
 * MIT (http://www.opensource.org/licenses/mit-license.php) licensed.
 * GNU GPL (http://www.gnu.org/licenses/gpl.html) licensed.
 */
!function($) {
	$.extend($.fn.moodular.effects, {
		mosaic : function(m) {
			if ( typeof m.opts.slices === "undefined")
				m.opts.slices = [6, 6];
			if ( typeof m.opts.mode === "undefined")
				m.opts.mode = 'random';
			m.items.hide().eq(0).show();
			var h = m.opts.slices[1], v = m.opts.slices[0], _w = m.$element.width(), _h = m.$element.height(), W = _w / v, H = _h / h;
			m.$element.on('moodular.prev moodular.next', function() {
				$('#mosaic_wrapper', m.$element).remove();
				m.items.hide().eq(m.next).show().css('z-index', 0);
				var C = m.items.eq(m.current).html();
				c = '';
				for (var i = 0; i < v; i++)
					for (var j = 0; j < h; j++)
						c += '<div style="position:absolute;left:' + (i * W) + 'px;top:' + (j * H) + 'px;width:' + W + 'px;height:' + H + 'px;overflow:hidden;"><div style="margin-left:-' + (i * W) + 'px;margin-top:-' + (j * H) + 'px;width:' + _w + 'px;height:' + _h + 'px">' + C + '</div></div>';
				m.$element.prepend('<' + m.opts.selector + ' id="mosaic_wrapper" style="z-index:1;position:absolute;">' + c + '</div>');
				$('#mosaic_wrapper>div', m.$element).css('opacity', 1).each(function(k) {
					var $this = $(this);
					var n = h * v, r;
					if (m.opts.mode == 'random')
						r = m.opts.speed * 0.5 * Math.ceil(Math.random() * (n - 1)) / n;
					else if (m.opts.mode == 'crawler')
						r = m.opts.speed * 0.5 * k / n;
					setTimeout(function() {
						$this.animate({
							opacity : 0
						}, r, m.opts.easing);
					}, r);
				});
				clearTimeout(m.mTimer);
				m.mTimer = setTimeout(function() {
					$('#mosaic_wrapper', m.$element).remove();
				}, m.opts.speed);
			});
		}
	});
}(window.jQuery);


/**
 * Moodular - Controls / Keys
 * Copyright (c) 2013 Sylvain "GouZ" Gougouzian (sylvain@gougouzian.fr)
 * MIT (http://www.opensource.org/licenses/mit-license.php) licensed.
 * GNU GPL (http://www.gnu.org/licenses/gpl.html) licensed.
 */
!function($) {
	$.extend($.fn.moodular.controls, {
		keys : function(m) {
			if (typeof m.opts.keyPrev === "undefined")
				m.opts.keyPrev = 37;
			if (typeof m.opts.keyNext === "undefined")
				m.opts.keyNext = 39;
			$(document).on('keydown', function(event) {
				if (event.keyCode == m.opts.keyPrev) {
					m.$element.trigger('moodular.prev');
					return false;
				} else if (event.keyCode == m.opts.keyNext) {
					m.$element.trigger('moodular.next');
					return false;
				}
			});
		}
	});
}(window.jQuery);
