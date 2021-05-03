"use strict";

// Class definition
var KTContentSidebar = function () {
	// Elements
	var _element;
    var _offcanvasObject;

	// Private functions
	var _initSidebar = function () {
		// Mobile offcanvas for mobile mode
		_offcanvasObject = new KTOffcanvas(_element, {
            overlay: true,
            baseClass: 'offcanvas-mobile',
            //closeBy: 'kt_user_profile_aside_close',
            toggleBy: 'kt_content_sidebar_toggle'
        });
	}

	return {
		// public functions
		init: function() {
			_element = KTUtil.getById('kt_content_sidebar');

			if (!_element) {
                return;
            }

			_initSidebar();
		},

		getElement: function() {
            return _element;
        },

        getOffcanvas: function() {
            return _offcanvasObject;
        }
	};
}();

jQuery(document).ready(function() {
	KTContentSidebar.init();
});
