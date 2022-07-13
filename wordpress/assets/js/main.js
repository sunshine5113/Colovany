/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./src/js/accordion.js":
/*!*****************************!*\
  !*** ./src/js/accordion.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"accordion\": () => (/* binding */ accordion)\n/* harmony export */ });\nfunction accordion() {\n  ////////////////////////////////////\n  //  Accordion\n  ////////////////////////////////////\n  $('.accordion').click(function () {\n    if ($(this).hasClass('active')) {\n      $(this).removeClass('active');\n      $(this).next().removeClass('active');\n    } else {\n      $(this).addClass('active');\n      $(this).next().addClass('active');\n    }\n  });\n}\n\n//# sourceURL=webpack:///./src/js/accordion.js?");

/***/ }),

/***/ "./src/js/main.js":
/*!************************!*\
  !*** ./src/js/main.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _menu__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./menu */ \"./src/js/menu.js\");\n/* harmony import */ var _readmore__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./readmore */ \"./src/js/readmore.js\");\n/* harmony import */ var _accordion__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./accordion */ \"./src/js/accordion.js\");\n/* harmony import */ var _retina__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./retina */ \"./src/js/retina.js\");\n\n\n\n\n$(function () {\n  (0,_menu__WEBPACK_IMPORTED_MODULE_0__.menu)();\n  (0,_readmore__WEBPACK_IMPORTED_MODULE_1__.readmore)();\n  (0,_accordion__WEBPACK_IMPORTED_MODULE_2__.accordion)();\n  (0,_retina__WEBPACK_IMPORTED_MODULE_3__.retina)();\n});\n\n//# sourceURL=webpack:///./src/js/main.js?");

/***/ }),

/***/ "./src/js/menu.js":
/*!************************!*\
  !*** ./src/js/menu.js ***!
  \************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"menu\": () => (/* binding */ menu)\n/* harmony export */ });\nfunction menu() {\n  ////////////////////////////////////\n  //  Smart phone menu\n  ////////////////////////////////////\n  $(\".menu__icon\").click(function () {\n    if ($('.header-wrap__menu').hasClass('active')) {\n      $('.header-wrap__menu').removeClass('active');\n      $(this).removeClass('active');\n    } else {\n      $('.header-wrap__menu').addClass('active');\n      $(this).addClass('active');\n    }\n  });\n}\n\n//# sourceURL=webpack:///./src/js/menu.js?");

/***/ }),

/***/ "./src/js/readmore.js":
/*!****************************!*\
  !*** ./src/js/readmore.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"readmore\": () => (/* binding */ readmore)\n/* harmony export */ });\nfunction readmore() {\n  ////////////////////////////////////\n  //  Read more function\n  ////////////////////////////////////\n  $('.btn-more').click(function () {\n    if ($(this).hasClass('active')) {\n      $(this).removeClass('active');\n      $('.btn-more__txt').html('ユーザーの声をもっと見る');\n      $('.more-wrap').removeClass('active');\n    } else {\n      $(this).addClass('active');\n      $('.btn-more__txt').html('閉じる');\n      $('.more-wrap').addClass('active');\n    }\n  });\n}\n\n//# sourceURL=webpack:///./src/js/readmore.js?");

/***/ }),

/***/ "./src/js/retina.js":
/*!**************************!*\
  !*** ./src/js/retina.js ***!
  \**************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"retina\": () => (/* binding */ retina)\n/* harmony export */ });\nfunction retina() {\n  ////////////////////////////////////\n  //  Retina\n  ////////////////////////////////////\n  $(function () {\n    var retinaCheck = window.devicePixelRatio;\n\n    if (retinaCheck >= 2) {\n      // Retinaディスプレイのときを分岐させている\n      $('img.retina').each(function () {\n        var retinaimg = $(this).attr('src').replace(/\\.(?=(?:png|jpg|jpeg)$)/i, '@2x.');\n        $(this).attr('srcset', retinaimg + \" 2x\");\n      });\n    }\n  });\n}\n\n//# sourceURL=webpack:///./src/js/retina.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/main.js");
/******/ 	
/******/ })()
;