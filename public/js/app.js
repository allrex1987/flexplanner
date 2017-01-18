/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};

/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {

/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;

/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};

/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);

/******/ 		// Flag the module as loaded
/******/ 		module.l = true;

/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}


/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;

/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;

/******/ 	// identity function for calling harmory imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };

/******/ 	// define getter function for harmory exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		Object.defineProperty(exports, name, {
/******/ 			configurable: false,
/******/ 			enumerable: true,
/******/ 			get: getter
/******/ 		});
/******/ 	};

/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};

/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };

/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";

/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ function(module, exports) {

eval("// (function(briefer){\r\n\r\n// \tbriefer.doStuff = function(){\r\n// \t\talert('stuff done');\r\n// \t}\r\n\r\n// })(window.briefer);\r\n\r\nmodule.exports = (function(){\r\n\t\r\n\tvar _successClass = 'alert-success';\r\n\tvar _errorClass = 'alert-danger';\r\n\r\n\tfunction renderResponseMessage(elem, data){\r\n\t\tif(typeof data.success == 'undefined' || typeof data.message == 'undefined') return;\r\n\r\n\t\tvar msgClass;\r\n\t\tif(data.success == true){\r\n\t\t\tmsgClass = _successClass;\r\n\t\t\telem.removeClass(_errorClass);\r\n\t\t}\r\n\t\telse{\r\n\t\t\tmsgClass = _errorClass;\r\n\t\t\telem.removeClass(_successClass);\r\n\t\t}\r\n\r\n\t\telem.addClass(msgClass);\r\n\t\telem.text(data.message);\r\n\t}\r\n\r\n\tfunction renderServerError(elem, data){\r\n\t\telem.addClass(_errorClass);\r\n\t\telem.text(\"Något gick fel på servern!\");\r\n\t}\r\n\r\n\tfunction ajaxSetup(){\r\n\t\t$.ajaxSetup({\r\n\t        headers: { 'X-CSRF-TOKEN': $('meta[name=\"_token\"]').attr('content') }\r\n\t    });\r\n\t}\r\n\r\n\tfunction postForm(url, formData, success, error){\r\n\t\t$.ajax({\r\n\t\t\turl: url,\r\n\t\t\tmethod: 'POST',\r\n\t\t\tdata: formData,\r\n\t\t\tsuccess: success,\r\n\t\t\terror: error\r\n\t\t});\r\n\t}\r\n\r\n\treturn {\r\n\t\tinit: function(form){\r\n\t\t\tajaxSetup();\r\n\r\n\t\t\tvar $form = $(form);\r\n\t\t\tvar url = $form.data('url');\r\n\t\t\tvar $submit = $('[data-submit]', $form);\r\n\r\n\t\t\tvar $message = $('[data-response-message]', $form);\r\n\r\n\t\t\t$submit.on('click', function(e){\r\n\t\t\t\te.preventDefault();\r\n\r\n\t\t\t\tpostForm(url, $form.serialize(),\r\n\t\t\t\t\tfunction(data){\r\n\t\t\t\t\t\trenderResponseMessage($message, data);\r\n\t\t\t\t\t},\r\n\t\t\t\t\tfunction(err){\r\n\t\t\t\t\t\trenderServerError($message, data);\r\n\t\t\t\t\t});\r\n\t\t\t});\r\n\t\t}\t\r\n\t}\r\n})();//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMC5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2NvbXBvbmVudHMvX2Zvcm0uanM/ODU2MiJdLCJzb3VyY2VzQ29udGVudCI6WyIvLyAoZnVuY3Rpb24oYnJpZWZlcil7XHJcblxyXG4vLyBcdGJyaWVmZXIuZG9TdHVmZiA9IGZ1bmN0aW9uKCl7XHJcbi8vIFx0XHRhbGVydCgnc3R1ZmYgZG9uZScpO1xyXG4vLyBcdH1cclxuXHJcbi8vIH0pKHdpbmRvdy5icmllZmVyKTtcclxuXHJcbm1vZHVsZS5leHBvcnRzID0gKGZ1bmN0aW9uKCl7XHJcblx0XHJcblx0dmFyIF9zdWNjZXNzQ2xhc3MgPSAnYWxlcnQtc3VjY2Vzcyc7XHJcblx0dmFyIF9lcnJvckNsYXNzID0gJ2FsZXJ0LWRhbmdlcic7XHJcblxyXG5cdGZ1bmN0aW9uIHJlbmRlclJlc3BvbnNlTWVzc2FnZShlbGVtLCBkYXRhKXtcclxuXHRcdGlmKHR5cGVvZiBkYXRhLnN1Y2Nlc3MgPT0gJ3VuZGVmaW5lZCcgfHwgdHlwZW9mIGRhdGEubWVzc2FnZSA9PSAndW5kZWZpbmVkJykgcmV0dXJuO1xyXG5cclxuXHRcdHZhciBtc2dDbGFzcztcclxuXHRcdGlmKGRhdGEuc3VjY2VzcyA9PSB0cnVlKXtcclxuXHRcdFx0bXNnQ2xhc3MgPSBfc3VjY2Vzc0NsYXNzO1xyXG5cdFx0XHRlbGVtLnJlbW92ZUNsYXNzKF9lcnJvckNsYXNzKTtcclxuXHRcdH1cclxuXHRcdGVsc2V7XHJcblx0XHRcdG1zZ0NsYXNzID0gX2Vycm9yQ2xhc3M7XHJcblx0XHRcdGVsZW0ucmVtb3ZlQ2xhc3MoX3N1Y2Nlc3NDbGFzcyk7XHJcblx0XHR9XHJcblxyXG5cdFx0ZWxlbS5hZGRDbGFzcyhtc2dDbGFzcyk7XHJcblx0XHRlbGVtLnRleHQoZGF0YS5tZXNzYWdlKTtcclxuXHR9XHJcblxyXG5cdGZ1bmN0aW9uIHJlbmRlclNlcnZlckVycm9yKGVsZW0sIGRhdGEpe1xyXG5cdFx0ZWxlbS5hZGRDbGFzcyhfZXJyb3JDbGFzcyk7XHJcblx0XHRlbGVtLnRleHQoXCJOw6Vnb3QgZ2ljayBmZWwgcMOlIHNlcnZlcm4hXCIpO1xyXG5cdH1cclxuXHJcblx0ZnVuY3Rpb24gYWpheFNldHVwKCl7XHJcblx0XHQkLmFqYXhTZXR1cCh7XHJcblx0ICAgICAgICBoZWFkZXJzOiB7ICdYLUNTUkYtVE9LRU4nOiAkKCdtZXRhW25hbWU9XCJfdG9rZW5cIl0nKS5hdHRyKCdjb250ZW50JykgfVxyXG5cdCAgICB9KTtcclxuXHR9XHJcblxyXG5cdGZ1bmN0aW9uIHBvc3RGb3JtKHVybCwgZm9ybURhdGEsIHN1Y2Nlc3MsIGVycm9yKXtcclxuXHRcdCQuYWpheCh7XHJcblx0XHRcdHVybDogdXJsLFxyXG5cdFx0XHRtZXRob2Q6ICdQT1NUJyxcclxuXHRcdFx0ZGF0YTogZm9ybURhdGEsXHJcblx0XHRcdHN1Y2Nlc3M6IHN1Y2Nlc3MsXHJcblx0XHRcdGVycm9yOiBlcnJvclxyXG5cdFx0fSk7XHJcblx0fVxyXG5cclxuXHRyZXR1cm4ge1xyXG5cdFx0aW5pdDogZnVuY3Rpb24oZm9ybSl7XHJcblx0XHRcdGFqYXhTZXR1cCgpO1xyXG5cclxuXHRcdFx0dmFyICRmb3JtID0gJChmb3JtKTtcclxuXHRcdFx0dmFyIHVybCA9ICRmb3JtLmRhdGEoJ3VybCcpO1xyXG5cdFx0XHR2YXIgJHN1Ym1pdCA9ICQoJ1tkYXRhLXN1Ym1pdF0nLCAkZm9ybSk7XHJcblxyXG5cdFx0XHR2YXIgJG1lc3NhZ2UgPSAkKCdbZGF0YS1yZXNwb25zZS1tZXNzYWdlXScsICRmb3JtKTtcclxuXHJcblx0XHRcdCRzdWJtaXQub24oJ2NsaWNrJywgZnVuY3Rpb24oZSl7XHJcblx0XHRcdFx0ZS5wcmV2ZW50RGVmYXVsdCgpO1xyXG5cclxuXHRcdFx0XHRwb3N0Rm9ybSh1cmwsICRmb3JtLnNlcmlhbGl6ZSgpLFxyXG5cdFx0XHRcdFx0ZnVuY3Rpb24oZGF0YSl7XHJcblx0XHRcdFx0XHRcdHJlbmRlclJlc3BvbnNlTWVzc2FnZSgkbWVzc2FnZSwgZGF0YSk7XHJcblx0XHRcdFx0XHR9LFxyXG5cdFx0XHRcdFx0ZnVuY3Rpb24oZXJyKXtcclxuXHRcdFx0XHRcdFx0cmVuZGVyU2VydmVyRXJyb3IoJG1lc3NhZ2UsIGRhdGEpO1xyXG5cdFx0XHRcdFx0fSk7XHJcblx0XHRcdH0pO1xyXG5cdFx0fVx0XHJcblx0fVxyXG59KSgpO1xuXG5cbi8vIFdFQlBBQ0sgRk9PVEVSIC8vXG4vLyByZXNvdXJjZXMvYXNzZXRzL2pzL2NvbXBvbmVudHMvX2Zvcm0uanMiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7Ozs7Ozs7QUFPQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7Iiwic291cmNlUm9vdCI6IiJ9");

/***/ },
/* 1 */
/***/ function(module, exports, __webpack_require__) {

eval("var formsModule = __webpack_require__(0);\r\n\r\n$(document).ready(function(){\r\n\r\n\t$('[data-module=\"ajax-form\"]').each(function(){\r\n\t\tformsModule.init($(this));\r\n\t});\r\n\t\r\n});\r\n\r\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiMS5qcyIsInNvdXJjZXMiOlsid2VicGFjazovLy9yZXNvdXJjZXMvYXNzZXRzL2pzL2FwcC5qcz84YjY3Il0sInNvdXJjZXNDb250ZW50IjpbInZhciBmb3Jtc01vZHVsZSA9IHJlcXVpcmUoJy4vY29tcG9uZW50cy9fZm9ybS5qcycpO1xyXG5cclxuJChkb2N1bWVudCkucmVhZHkoZnVuY3Rpb24oKXtcclxuXHJcblx0JCgnW2RhdGEtbW9kdWxlPVwiYWpheC1mb3JtXCJdJykuZWFjaChmdW5jdGlvbigpe1xyXG5cdFx0Zm9ybXNNb2R1bGUuaW5pdCgkKHRoaXMpKTtcclxuXHR9KTtcclxuXHRcclxufSk7XHJcblxyXG5cblxuXG4vLyBXRUJQQUNLIEZPT1RFUiAvL1xuLy8gcmVzb3VyY2VzL2Fzc2V0cy9qcy9hcHAuanMiXSwibWFwcGluZ3MiOiJBQUFBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBOyIsInNvdXJjZVJvb3QiOiIifQ==");

/***/ }
/******/ ]);