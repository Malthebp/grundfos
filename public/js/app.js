/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "./";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 39);
/******/ })
/************************************************************************/
/******/ ({

/***/ 10:
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', __webpack_require__(34));

var app = new Vue({
  el: '#app'
});

/***/ }),

/***/ 11:
/***/ (function(module, exports) {

throw new Error("Module build failed: ModuleBuildError: Module build failed: Error: Missing binding C:\\wamp64\\www\\git\\grundfos\\node_modules\\node-sass\\vendor\\win32-x64-48\\binding.node\nNode Sass could not find a binding for your current environment: Windows 64-bit with Node.js 6.x\n\nFound bindings for the following environments:\n  - Windows 64-bit with Node.js 7.x\n\nThis usually happens because your environment has changed since running `npm install`.\nRun `npm rebuild node-sass` to build the binding for your current environment.\n    at module.exports (C:\\wamp64\\www\\git\\grundfos\\node_modules\\node-sass\\lib\\binding.js:15:13)\n    at Object.<anonymous> (C:\\wamp64\\www\\git\\grundfos\\node_modules\\node-sass\\lib\\index.js:14:35)\n    at Module._compile (module.js:570:32)\n    at Object.Module._extensions..js (module.js:579:10)\n    at Module.load (module.js:487:32)\n    at tryModuleLoad (module.js:446:12)\n    at Function.Module._load (module.js:438:3)\n    at Module.require (module.js:497:17)\n    at require (internal/module.js:20:19)\n    at Object.<anonymous> (C:\\wamp64\\www\\git\\grundfos\\node_modules\\sass-loader\\lib\\loader.js:3:14)\n    at Module._compile (module.js:570:32)\n    at Object.Module._extensions..js (module.js:579:10)\n    at Module.load (module.js:487:32)\n    at tryModuleLoad (module.js:446:12)\n    at Function.Module._load (module.js:438:3)\n    at Module.require (module.js:497:17)\n    at require (internal/module.js:20:19)\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:13:17)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:173:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:36:3)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:173:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:36:3)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:173:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:36:3)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModule.js:141:35\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:364:11\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:170:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:27:11)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:173:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:36:3)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:173:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:36:3)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:165:10)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:173:18\n    at loadLoader (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\loadLoader.js:36:3)\n    at iteratePitchingLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:169:2)\n    at runLoaders (C:\\wamp64\\www\\git\\grundfos\\node_modules\\loader-runner\\lib\\LoaderRunner.js:362:2)\n    at NormalModule.doBuild (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModule.js:129:2)\n    at NormalModule.build (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModule.js:180:15)\n    at Compilation.buildModule (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\Compilation.js:142:10)\n    at moduleFactory.create (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\Compilation.js:424:9)\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModuleFactory.js:242:4\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModuleFactory.js:93:13\n    at C:\\wamp64\\www\\git\\grundfos\\node_modules\\tapable\\lib\\Tapable.js:204:11\n    at NormalModuleFactory.params.normalModuleFactory.plugin (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\CompatibilityPlugin.js:52:5)\n    at NormalModuleFactory.applyPluginsAsyncWaterfall (C:\\wamp64\\www\\git\\grundfos\\node_modules\\tapable\\lib\\Tapable.js:208:13)\n    at onDoneResolving (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModuleFactory.js:68:11)\n    at onDoneResolving (C:\\wamp64\\www\\git\\grundfos\\node_modules\\webpack\\lib\\NormalModuleFactory.js:189:6)\n    at _combinedTickCallback (internal/process/next_tick.js:67:7)\n    at process._tickCallback (internal/process/next_tick.js:98:9)");

/***/ }),

/***/ 30:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = {
    mounted: function mounted() {
        console.log('Component mounted.');
    }
};

/***/ }),

/***/ 34:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(35)(
  /* script */
  __webpack_require__(30),
  /* template */
  __webpack_require__(36),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "C:\\wamp64\\www\\git\\grundfos\\resources\\assets\\js\\components\\Example.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Example.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-3b9d5edc", Component.options)
  } else {
    hotAPI.reload("data-v-3b9d5edc", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 35:
/***/ (function(module, exports) {

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = options.computed || (options.computed = {})
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 36:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _vm._m(0)
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "container"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-md-8 col-md-offset-2"
  }, [_c('div', {
    staticClass: "panel panel-default"
  }, [_c('div', {
    staticClass: "panel-heading"
  }, [_vm._v("Example Component")]), _vm._v(" "), _c('div', {
    staticClass: "panel-body"
  }, [_vm._v("\n                    I'm an example component!\n                ")])])])])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-3b9d5edc", module.exports)
  }
}

/***/ }),

/***/ 39:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(10);
module.exports = __webpack_require__(11);


/***/ })

/******/ });