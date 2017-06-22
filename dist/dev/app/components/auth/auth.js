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
var AuthPage = (function () {
    function AuthPage() {
    }
    AuthPage = __decorate([
        core_1.Component({
            selector: 'auth',
            template: "\n    <div class=\"container\">\n      <div class=\"row\">\n        <div class=\"col-md-4 col-md-offset-4\">\n          <div class=\"login-panel panel panel-default\">\n            <div class=\"panel-heading\">\n              <h3 class=\"panel-title\">Please Sign In</h3>\n            </div>\n            <div class=\"panel-body\">\n              <form role=\"form\">\n                <fieldset>\n                  <div class=\"form-group\">\n                    <input class=\"form-control\" placeholder=\"E-mail\" name=\"email\" type=\"email\" autofocus>\n                  </div>\n                  <div class=\"form-group\">\n                    <input class=\"form-control\" placeholder=\"Password\" name=\"password\" type=\"password\" value=\"\">\n                  </div>\n                  <div class=\"checkbox\">\n                    <label>\n                      <input name=\"remember\" type=\"checkbox\" value=\"Remember Me\">Remember Me\n                    </label>\n                  </div>\n                  <!-- Change this to a button or input when using this as a form -->\n                  <a ui-sref=\"dashboard.home\" class=\"btn btn-lg btn-success btn-block\">Login</a>\n                </fieldset>\n              </form>\n            </div>\n          </div>\n        </div>\n      </div>\n    </div>\n  ",
            styles: ["\n\n  "],
            directives: [common_1.CORE_DIRECTIVES]
        }), 
        __metadata('design:paramtypes', [])
    ], AuthPage);
    return AuthPage;
}());
exports.AuthPage = AuthPage;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2F1dGgvYXV0aC50cyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUEscUJBQXdCLGVBQWUsQ0FBQyxDQUFBO0FBQ3hDLHVCQUE4QixpQkFBaUIsQ0FBQyxDQUFBO0FBeUNoRDtJQUFBO0lBQ0EsQ0FBQztJQXhDRDtRQUFDLGdCQUFTLENBQUM7WUFDVCxRQUFRLEVBQUUsTUFBTTtZQUNoQixRQUFRLEVBQUUsc3pDQStCVDtZQUNELE1BQU0sRUFBRSxDQUFDLFFBRVIsQ0FBQztZQUNGLFVBQVUsRUFBRSxDQUFDLHdCQUFlLENBQUM7U0FDOUIsQ0FBQzs7Z0JBQUE7SUFFRixlQUFDO0FBQUQsQ0FEQSxBQUNDLElBQUE7QUFEWSxnQkFBUSxXQUNwQixDQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL2F1dGgvYXV0aC5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7Q29tcG9uZW50fSBmcm9tICdhbmd1bGFyMi9jb3JlJztcclxuaW1wb3J0IHtDT1JFX0RJUkVDVElWRVN9IGZyb20gJ2FuZ3VsYXIyL2NvbW1vbic7XHJcblxyXG5AQ29tcG9uZW50KHtcclxuICBzZWxlY3RvcjogJ2F1dGgnLFxyXG4gIHRlbXBsYXRlVXJsOiAnYXBwL2NvbXBvbmVudHMvYXV0aC9hdXRoLmh0bWwnLFxyXG4gIHN0eWxlVXJsczogWydhcHAvY29tcG9uZW50cy9hdXRoL2F1dGguY3NzJ10sXHJcbiAgZGlyZWN0aXZlczogW0NPUkVfRElSRUNUSVZFU11cclxufSlcclxuZXhwb3J0IGNsYXNzIEF1dGhQYWdlIHtcclxufVxyXG4iXX0=
