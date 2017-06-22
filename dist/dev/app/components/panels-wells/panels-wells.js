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
var PanelsWellsPage = (function () {
    function PanelsWellsPage() {
    }
    PanelsWellsPage = __decorate([
        core_1.Component({
            selector: 'panels-wells',
            template: "\n    <wrapper>\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <h1 class=\"page-header\">Panels and Wells</h1>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Default Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-primary\">\n            <div class=\"panel-heading\">\n              Primary Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-success\">\n            <div class=\"panel-heading\">\n              Success Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-info\">\n            <div class=\"panel-heading\">\n              Info Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-warning\">\n            <div class=\"panel-heading\">\n              Warning Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-danger\">\n            <div class=\"panel-heading\">\n              Danger Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-green\">\n            <div class=\"panel-heading\">\n              Green Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n          <!-- /.col-lg-4 -->\n        </div>\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-yellow\">\n            <div class=\"panel-heading\">\n              Yellow Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n          <!-- /.col-lg-4 -->\n        </div>\n        <div class=\"col-lg-4\">\n          <div class=\"panel panel-red\">\n            <div class=\"panel-heading\">\n              Red Panel\n            </div>\n            <div class=\"panel-body\">\n              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n            </div>\n            <div class=\"panel-footer\">\n              Panel Footer\n            </div>\n          </div>\n          <!-- /.col-lg-4 -->\n        </div>\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Collapsible Accordion Panel Group\n            </div>\n            <!-- .panel-heading -->\n            <div class=\"panel-body\">\n              <div class=\"panel-group\" id=\"accordion\">\n                <div class=\"panel panel-default\">\n                  <div class=\"panel-heading\">\n                    <h4 class=\"panel-title\">\n                      <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseOne\">Collapsible Group Item #1</a>\n                    </h4>\n                  </div>\n                  <div id=\"collapseOne\" class=\"panel-collapse collapse in\">\n                    <div class=\"panel-body\">\n                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                    </div>\n                  </div>\n                </div>\n                <div class=\"panel panel-default\">\n                  <div class=\"panel-heading\">\n                    <h4 class=\"panel-title\">\n                      <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo\">Collapsible Group Item #2</a>\n                    </h4>\n                  </div>\n                  <div id=\"collapseTwo\" class=\"panel-collapse collapse\">\n                    <div class=\"panel-body\">\n                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                    </div>\n                  </div>\n                </div>\n                <div class=\"panel panel-default\">\n                  <div class=\"panel-heading\">\n                    <h4 class=\"panel-title\">\n                      <a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseThree\">Collapsible Group Item #3</a>\n                    </h4>\n                  </div>\n                  <div id=\"collapseThree\" class=\"panel-collapse collapse\">\n                    <div class=\"panel-body\">\n                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n                    </div>\n                  </div>\n                </div>\n              </div>\n            </div>\n            <!-- .panel-body -->\n          </div>\n          <!-- /.panel -->\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-6\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Basic Tabs\n            </div>\n            <!-- /.panel-heading -->\n            <div class=\"panel-body\">\n              <!-- Nav tabs -->\n              <ul class=\"nav nav-tabs\">\n                <li class=\"active\"><a href=\"#home\" data-toggle=\"tab\">Home</a>\n                </li>\n                <li><a href=\"#profile\" data-toggle=\"tab\">Profile</a>\n                </li>\n                <li><a href=\"#messages\" data-toggle=\"tab\">Messages</a>\n                </li>\n                <li><a href=\"#settings\" data-toggle=\"tab\">Settings</a>\n                </li>\n              </ul>\n\n              <!-- Tab panes -->\n              <div class=\"tab-content\">\n                <div class=\"tab-pane fade in active\" id=\"home\">\n                  <h4>Home Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"tab-pane fade\" id=\"profile\">\n                  <h4>Profile Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"tab-pane fade\" id=\"messages\">\n                  <h4>Messages Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"tab-pane fade\" id=\"settings\">\n                  <h4>Settings Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n              </div>\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n        </div>\n        <!-- /.col-lg-6 -->\n        <div class=\"col-lg-6\">\n          <div class=\"panel panel-default\">\n            <div class=\"panel-heading\">\n              Pill Tabs\n            </div>\n            <!-- /.panel-heading -->\n            <div class=\"panel-body\">\n              <!-- Nav tabs -->\n              <ul class=\"nav nav-pills\">\n                <li class=\"active\"><a href=\"#home-pills\" data-toggle=\"tab\">Home</a>\n                </li>\n                <li><a href=\"#profile-pills\" data-toggle=\"tab\">Profile</a>\n                </li>\n                <li><a href=\"#messages-pills\" data-toggle=\"tab\">Messages</a>\n                </li>\n                <li><a href=\"#settings-pills\" data-toggle=\"tab\">Settings</a>\n                </li>\n              </ul>\n\n              <!-- Tab panes -->\n              <div class=\"tab-content\">\n                <div class=\"tab-pane fade in active\" id=\"home-pills\">\n                  <h4>Home Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"tab-pane fade\" id=\"profile-pills\">\n                  <h4>Profile Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"tab-pane fade\" id=\"messages-pills\">\n                  <h4>Messages Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n                <div class=\"tab-pane fade\" id=\"settings-pills\">\n                  <h4>Settings Tab</h4>\n                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n                </div>\n              </div>\n            </div>\n            <!-- /.panel-body -->\n          </div>\n          <!-- /.panel -->\n        </div>\n        <!-- /.col-lg-6 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-4\">\n          <div class=\"well\">\n            <h4>Normal Well</h4>\n            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n        <div class=\"col-lg-4\">\n          <div class=\"well well-lg\">\n            <h4>Large Well</h4>\n            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n        <div class=\"col-lg-4\">\n          <div class=\"well well-sm\">\n            <h4>Small Well</h4>\n            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>\n          </div>\n        </div>\n        <!-- /.col-lg-4 -->\n      </div>\n      <!-- /.row -->\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <div class=\"jumbotron\">\n            <h1>Jumbotron</h1>\n            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing.</p>\n            <p><a class=\"btn btn-primary btn-lg\" role=\"button\">Learn more</a>\n            </p>\n          </div>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n    </wrapper>\n  ",
            styles: ["\n\n  "],
            directives: [header_1.WrapperCmp, common_1.CORE_DIRECTIVES]
        }), 
        __metadata('design:paramtypes', [])
    ], PanelsWellsPage);
    return PanelsWellsPage;
}());
exports.PanelsWellsPage = PanelsWellsPage;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL3BhbmVscy13ZWxscy9wYW5lbHMtd2VsbHMudHMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBLHFCQUF3QixlQUFlLENBQUMsQ0FBQTtBQUN4Qyx1QkFBOEIsaUJBQWlCLENBQUMsQ0FBQTtBQUNoRCx1QkFBeUIsa0JBQWtCLENBQUMsQ0FBQTtBQStVNUM7SUFBQTtJQUNBLENBQUM7SUE5VUQ7UUFBQyxnQkFBUyxDQUFDO1lBQ1QsUUFBUSxFQUFFLGNBQWM7WUFDeEIsUUFBUSxFQUFFLGdqakJBcVVUO1lBQ0QsTUFBTSxFQUFFLENBQUMsUUFFUixDQUFDO1lBQ0YsVUFBVSxFQUFFLENBQUMsbUJBQVUsRUFBRSx3QkFBZSxDQUFDO1NBQzFDLENBQUM7O3VCQUFBO0lBRUYsc0JBQUM7QUFBRCxDQURBLEFBQ0MsSUFBQTtBQURZLHVCQUFlLGtCQUMzQixDQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL3BhbmVscy13ZWxscy9wYW5lbHMtd2VsbHMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQge0NvbXBvbmVudH0gZnJvbSAnYW5ndWxhcjIvY29yZSc7XHJcbmltcG9ydCB7Q09SRV9ESVJFQ1RJVkVTfSBmcm9tICdhbmd1bGFyMi9jb21tb24nO1xyXG5pbXBvcnQge1dyYXBwZXJDbXB9IGZyb20gJy4uL2hlYWRlci9oZWFkZXInO1xyXG5cclxuQENvbXBvbmVudCh7XHJcbiAgc2VsZWN0b3I6ICdwYW5lbHMtd2VsbHMnLFxyXG4gIHRlbXBsYXRlVXJsOiAnYXBwL2NvbXBvbmVudHMvcGFuZWxzLXdlbGxzL3BhbmVscy13ZWxscy5odG1sJyxcclxuICBzdHlsZVVybHM6IFsnYXBwL2NvbXBvbmVudHMvcGFuZWxzLXdlbGxzL3BhbmVscy13ZWxscy5jc3MnXSxcclxuICBkaXJlY3RpdmVzOiBbV3JhcHBlckNtcCwgQ09SRV9ESVJFQ1RJVkVTXVxyXG59KVxyXG5leHBvcnQgY2xhc3MgUGFuZWxzV2VsbHNQYWdlIHtcclxufVxyXG4iXX0=