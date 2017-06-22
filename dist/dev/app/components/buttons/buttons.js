"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('angular2/core');
var common_1 = require('angular2/common');
var header_1 = require('../header/header');
var ButtonsPage = (function () {
    function ButtonsPage() {
    }
    ButtonsPage = __decorate([
        core_1.Component({
            selector: 'buttons',
            template: "\n    <wrapper>\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <h1 class=\"page-header\">Buttons</h1>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-6\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Default Buttons\n            </div>\n            <!-- /.panel-heading -->\n            <div class=\"panel-body\">\n              <h4>Normal Buttons</h4>\n\n              <p>\n                <button type=\"button\" class=\"btn btn-default\">Default</button>\n                <button type=\"button\" class=\"btn btn-primary\">Primary</button>\n                <button type=\"button\" class=\"btn btn-success\">Success</button>\n                <button type=\"button\" class=\"btn btn-info\">Info</button>\n                <button type=\"button\" class=\"btn btn-warning\">Warning</button>\n                <button type=\"button\" class=\"btn btn-danger\">Danger</button>\n                <button type=\"button\" class=\"btn btn-link\">Link</button>\n              </p>\n              <br>\n              <h4>Disabled Buttons</h4>\n\n              <p>\n                <button type=\"button\" class=\"btn btn-default disabled\">Default</button>\n                <button type=\"button\" class=\"btn btn-primary disabled\">Primary</button>\n                <button type=\"button\" class=\"btn btn-success disabled\">Success</button>\n                <button type=\"button\" class=\"btn btn-info disabled\">Info</button>\n                <button type=\"button\" class=\"btn btn-warning disabled\">Warning</button>\n                <button type=\"button\" class=\"btn btn-danger disabled\">Danger</button>\n                <button type=\"button\" class=\"btn btn-link disabled\">Link</button>\n              </p>\n              <br>\n              <h4>Button Sizes</h4>\n\n              <p>\n                <button type=\"button\" class=\"btn btn-primary btn-lg\">Large button</button>\n                <button type=\"button\" class=\"btn btn-primary\">Default button</button>\n                <button type=\"button\" class=\"btn btn-primary btn-sm\">Small button</button>\n                <button type=\"button\" class=\"btn btn-primary btn-xs\">Mini button</button>\n                <br>\n                <br>\n                <button type=\"button\" class=\"btn btn-primary btn-lg btn-block\">Block level button</button>\n              </p>\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Circle Icon Buttons with Font Awesome Icons\n            </div>\n            <!-- /.panel-heading -->\n            <div class=\"panel-body\">\n              <h4>Normal Circle Buttons</h4>\n              <button type=\"button\" class=\"btn btn-default btn-circle\"><i class=\"fa fa-check\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-primary btn-circle\"><i class=\"fa fa-list\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-success btn-circle\"><i class=\"fa fa-link\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-info btn-circle\"><i class=\"fa fa-check\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-warning btn-circle\"><i class=\"fa fa-times\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-danger btn-circle\"><i class=\"fa fa-heart\"></i>\n              </button>\n              <br>\n              <br>\n              <h4>Large Circle Buttons</h4>\n              <button type=\"button\" class=\"btn btn-default btn-circle btn-lg\"><i class=\"fa fa-check\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-primary btn-circle btn-lg\"><i class=\"fa fa-list\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-success btn-circle btn-lg\"><i class=\"fa fa-link\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-info btn-circle btn-lg\"><i class=\"fa fa-check\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-warning btn-circle btn-lg\"><i class=\"fa fa-times\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-danger btn-circle btn-lg\"><i class=\"fa fa-heart\"></i>\n              </button>\n              <br>\n              <br>\n              <h4>Extra Large Circle Buttons</h4>\n              <button type=\"button\" class=\"btn btn-default btn-circle btn-xl\"><i class=\"fa fa-check\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-primary btn-circle btn-xl\"><i class=\"fa fa-list\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-success btn-circle btn-xl\"><i class=\"fa fa-link\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-info btn-circle btn-xl\"><i class=\"fa fa-check\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-warning btn-circle btn-xl\"><i class=\"fa fa-times\"></i>\n              </button>\n              <button type=\"button\" class=\"btn btn-danger btn-circle btn-xl\"><i class=\"fa fa-heart\"></i>\n              </button>\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n        </div>\n        <!-- /.col-lg-6 -->\n        <div class=\"col-lg-6\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Outline Buttons with Smooth Transition\n            </div>\n            <!-- /.panel-heading -->\n            <div class=\"panel-body\">\n              <h4>Outline Buttons</h4>\n\n              <p>\n                <button type=\"button\" class=\"btn btn-outline btn-default\">Default</button>\n                <button type=\"button\" class=\"btn btn-outline btn-primary\">Primary</button>\n                <button type=\"button\" class=\"btn btn-outline btn-success\">Success</button>\n                <button type=\"button\" class=\"btn btn-outline btn-info\">Info</button>\n                <button type=\"button\" class=\"btn btn-outline btn-warning\">Warning</button>\n                <button type=\"button\" class=\"btn btn-outline btn-danger\">Danger</button>\n                <button type=\"button\" class=\"btn btn-outline btn-link\">Link</button>\n              </p>\n              <br>\n              <h4>Outline Button Sizes</h4>\n\n              <p>\n                <button type=\"button\" class=\"btn btn-outline btn-primary btn-lg\">Large button</button>\n                <button type=\"button\" class=\"btn btn-outline btn-primary\">Default button</button>\n                <button type=\"button\" class=\"btn btn-outline btn-primary btn-sm\">Small button</button>\n                <button type=\"button\" class=\"btn btn-outline btn-primary btn-xs\">Mini button</button>\n                <br>\n                <br>\n                <button type=\"button\" class=\"btn btn-outline btn-primary btn-lg btn-block\">Block level button</button>\n              </p>\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Social Buttons with Font Awesome Icons\n            </div>\n            <!-- /.panel-heading -->\n            <div class=\"panel-body\">\n              <h4>Social Buttons</h4>\n              <a class=\"btn btn-block btn-social btn-bitbucket\">\n                <i class=\"fa fa-bitbucket\"></i> Sign in with Bitbucket\n              </a>\n              <a class=\"btn btn-block btn-social btn-dropbox\">\n                <i class=\"fa fa-dropbox\"></i> Sign in with Dropbox\n              </a>\n              <a class=\"btn btn-block btn-social btn-facebook\">\n                <i class=\"fa fa-facebook\"></i> Sign in with Facebook\n              </a>\n              <a class=\"btn btn-block btn-social btn-flickr\">\n                <i class=\"fa fa-flickr\"></i> Sign in with Flickr\n              </a>\n              <a class=\"btn btn-block btn-social btn-github\">\n                <i class=\"fa fa-github\"></i> Sign in with GitHub\n              </a>\n              <a class=\"btn btn-block btn-social btn-google-plus\">\n                <i class=\"fa fa-google-plus\"></i> Sign in with Google\n              </a>\n              <a class=\"btn btn-block btn-social btn-instagram\">\n                <i class=\"fa fa-instagram\"></i> Sign in with Instagram\n              </a>\n              <a class=\"btn btn-block btn-social btn-linkedin\">\n                <i class=\"fa fa-linkedin\"></i> Sign in with LinkedIn\n              </a>\n              <a class=\"btn btn-block btn-social btn-pinterest\">\n                <i class=\"fa fa-pinterest\"></i> Sign in with Pinterest\n              </a>\n              <a class=\"btn btn-block btn-social btn-tumblr\">\n                <i class=\"fa fa-tumblr\"></i> Sign in with Tumblr\n              </a>\n              <a class=\"btn btn-block btn-social btn-twitter\">\n                <i class=\"fa fa-twitter\"></i> Sign in with Twitter\n              </a>\n              <a class=\"btn btn-block btn-social btn-vk\">\n                <i class=\"fa fa-vk\"></i> Sign in with VK\n              </a>\n\n              <hr>\n\n              <div class=\"text-center\">\n                <a class=\"btn btn-social-icon btn-bitbucket\"><i class=\"fa fa-bitbucket\"></i></a>\n                <a class=\"btn btn-social-icon btn-dropbox\"><i class=\"fa fa-dropbox\"></i></a>\n                <a class=\"btn btn-social-icon btn-facebook\"><i class=\"fa fa-facebook\"></i></a>\n                <a class=\"btn btn-social-icon btn-flickr\"><i class=\"fa fa-flickr\"></i></a>\n                <a class=\"btn btn-social-icon btn-github\"><i class=\"fa fa-github\"></i></a>\n                <a class=\"btn btn-social-icon btn-google-plus\"><i class=\"fa fa-google-plus\"></i></a>\n                <a class=\"btn btn-social-icon btn-instagram\"><i class=\"fa fa-instagram\"></i></a>\n                <a class=\"btn btn-social-icon btn-linkedin\"><i class=\"fa fa-linkedin\"></i></a>\n                <a class=\"btn btn-social-icon btn-pinterest\"><i class=\"fa fa-pinterest\"></i></a>\n                <a class=\"btn btn-social-icon btn-tumblr\"><i class=\"fa fa-tumblr\"></i></a>\n                <a class=\"btn btn-social-icon btn-twitter\"><i class=\"fa fa-twitter\"></i></a>\n                <a class=\"btn btn-social-icon btn-vk\"><i class=\"fa fa-vk\"></i></a>\n              </div>\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n        </div>\n        <!-- /.col-lg-6 -->\n      </div>\n    </wrapper>\n  ",
            styles: ["\n\n  "],
            directives: [header_1.WrapperCmp, common_1.CORE_DIRECTIVES]
        }), 
        __metadata('design:paramtypes', [])
    ], ButtonsPage);
    return ButtonsPage;
}());
exports.ButtonsPage = ButtonsPage;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2J1dHRvbnMvYnV0dG9ucy50cyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUEscUJBQXdCLGVBQWUsQ0FBQyxDQUFBO0FBQ3hDLHVCQUE4QixpQkFBaUIsQ0FBQyxDQUFBO0FBQ2hELHVCQUF5QixrQkFBa0IsQ0FBQyxDQUFBO0FBK041QztJQUFBO0lBQ0EsQ0FBQztJQTlORDtRQUFDLGdCQUFTLENBQUM7WUFDVCxRQUFRLEVBQUUsU0FBUztZQUNuQixRQUFRLEVBQUUsNjBWQXFOVDtZQUNELE1BQU0sRUFBRSxDQUFDLFFBRVIsQ0FBQztZQUNGLFVBQVUsRUFBRSxDQUFDLG1CQUFVLEVBQUUsd0JBQWUsQ0FBQztTQUMxQyxDQUFDOzttQkFBQTtJQUVGLGtCQUFDO0FBQUQsQ0FEQSxBQUNDLElBQUE7QUFEWSxtQkFBVyxjQUN2QixDQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL2J1dHRvbnMvYnV0dG9ucy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7Q29tcG9uZW50fSBmcm9tICdhbmd1bGFyMi9jb3JlJztcclxuaW1wb3J0IHtDT1JFX0RJUkVDVElWRVN9IGZyb20gJ2FuZ3VsYXIyL2NvbW1vbic7XHJcbmltcG9ydCB7V3JhcHBlckNtcH0gZnJvbSAnLi4vaGVhZGVyL2hlYWRlcic7XHJcblxyXG5AQ29tcG9uZW50KHtcclxuICBzZWxlY3RvcjogJ2J1dHRvbnMnLFxyXG4gIHRlbXBsYXRlVXJsOiAnYXBwL2NvbXBvbmVudHMvYnV0dG9ucy9idXR0b25zLmh0bWwnLFxyXG4gIHN0eWxlVXJsczogWydhcHAvY29tcG9uZW50cy9idXR0b25zL2J1dHRvbnMuY3NzJ10sXHJcbiAgZGlyZWN0aXZlczogW1dyYXBwZXJDbXAsIENPUkVfRElSRUNUSVZFU11cclxufSlcclxuZXhwb3J0IGNsYXNzIEJ1dHRvbnNQYWdlIHtcclxufVxyXG4iXX0=