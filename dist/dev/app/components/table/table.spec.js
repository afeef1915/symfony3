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
var testing_1 = require('angular2/testing');
var router_1 = require('angular2/router');
var location_mock_1 = require('angular2/src/mock/location_mock');
var router_2 = require('angular2/src/router/router');
var core_1 = require('angular2/core');
var dom_adapter_1 = require('angular2/src/platform/dom/dom_adapter');
var table_1 = require('./table');
function main() {
    testing_1.beforeEachProviders(function () { return [
        router_1.RouteRegistry,
        core_1.provide(router_1.Location, { useClass: location_mock_1.SpyLocation }),
        core_1.provide(router_1.ROUTER_PRIMARY_COMPONENT, { useValue: table_1.TablePage }),
        core_1.provide(router_1.Router, { useClass: router_2.RootRouter })
    ]; });
    testing_1.describe('table component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var tableDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(tableDOMEl, 'h1')[0].textContent).toEqual('Tables');
            });
        }));
    });
}
exports.main = main;
var TestComponent = (function () {
    function TestComponent() {
    }
    TestComponent = __decorate([
        core_1.Component({
            selector: 'test-cmp',
            directives: [table_1.TablePage],
            template: '<table></table>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL3RhYmxlL3RhYmxlLnNwZWMudHMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6Ijs7Ozs7Ozs7OztBQUFBLHdCQU9PLGtCQUFrQixDQUFDLENBQUE7QUFDMUIsdUJBQXdFLGlCQUFpQixDQUFDLENBQUE7QUFDMUYsOEJBQTBCLGlDQUFpQyxDQUFDLENBQUE7QUFDNUQsdUJBQXlCLDRCQUE0QixDQUFDLENBQUE7QUFFdEQscUJBQWlDLGVBQWUsQ0FBQyxDQUFBO0FBQ2pELDRCQUFrQix1Q0FBdUMsQ0FBQyxDQUFBO0FBQzFELHNCQUF3QixTQUFTLENBQUMsQ0FBQTtBQUVsQztJQUNFLDZCQUFtQixDQUFDLGNBQU0sT0FBQTtRQUN4QixzQkFBYTtRQUNiLGNBQU8sQ0FBQyxpQkFBUSxFQUFFLEVBQUMsUUFBUSxFQUFFLDJCQUFXLEVBQUMsQ0FBQztRQUMxQyxjQUFPLENBQUMsaUNBQXdCLEVBQUUsRUFBQyxRQUFRLEVBQUUsaUJBQVMsRUFBQyxDQUFDO1FBQ3hELGNBQU8sQ0FBQyxlQUFNLEVBQUUsRUFBQyxRQUFRLEVBQUUsbUJBQVUsRUFBQyxDQUFDO0tBQ3hDLEVBTHlCLENBS3pCLENBQUMsQ0FBQztJQUVILGtCQUFRLENBQUMsaUJBQWlCLEVBQUU7UUFDMUIsWUFBRSxDQUFDLGFBQWEsRUFDZCxxQkFBVyxDQUFDLENBQUMsOEJBQW9CLENBQUMsRUFBRSxVQUFDLEdBQXlCO1lBQzVELE1BQU0sQ0FBQyxHQUFHLENBQUMsV0FBVyxDQUFDLGFBQWEsQ0FBQztpQkFDbEMsSUFBSSxDQUFDLFVBQUMsTUFBTTtnQkFDWCxJQUFJLFVBQVUsR0FBRyxNQUFNLENBQUMsWUFBWSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxhQUFhLENBQUM7Z0JBRS9ELGdCQUFNLENBQUMsaUJBQUcsQ0FBQyxnQkFBZ0IsQ0FBQyxVQUFVLEVBQUUsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUMsV0FBVyxDQUFDLENBQUMsT0FBTyxDQUFDLFFBQVEsQ0FBQyxDQUFDO1lBQ2xGLENBQUMsQ0FBQyxDQUFDO1FBQ1AsQ0FBQyxDQUFDLENBQUMsQ0FBQztJQUNSLENBQUMsQ0FBQyxDQUFDO0FBQ0wsQ0FBQztBQW5CZSxZQUFJLE9BbUJuQixDQUFBO0FBT0Q7SUFBQTtJQUFxQixDQUFDO0lBTHRCO1FBQUMsZ0JBQVMsQ0FBQztZQUNULFFBQVEsRUFBRSxVQUFVO1lBQ3BCLFVBQVUsRUFBRSxDQUFDLGlCQUFTLENBQUM7WUFDdkIsUUFBUSxFQUFFLGlCQUFpQjtTQUM1QixDQUFDOztxQkFBQTtJQUNtQixvQkFBQztBQUFELENBQXJCLEFBQXNCLElBQUEiLCJmaWxlIjoiYXBwL2NvbXBvbmVudHMvdGFibGUvdGFibGUuc3BlYy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7XHJcbiAgVGVzdENvbXBvbmVudEJ1aWxkZXIsXHJcbiAgZGVzY3JpYmUsXHJcbiAgZXhwZWN0LFxyXG4gIGluamVjdEFzeW5jLFxyXG4gIGl0LFxyXG4gIGJlZm9yZUVhY2hQcm92aWRlcnNcclxufSBmcm9tICdhbmd1bGFyMi90ZXN0aW5nJztcclxuaW1wb3J0IHtMb2NhdGlvbiwgUm91dGVyLCBSb3V0ZVJlZ2lzdHJ5LCBST1VURVJfUFJJTUFSWV9DT01QT05FTlR9IGZyb20gJ2FuZ3VsYXIyL3JvdXRlcic7XHJcbmltcG9ydCB7U3B5TG9jYXRpb259IGZyb20gJ2FuZ3VsYXIyL3NyYy9tb2NrL2xvY2F0aW9uX21vY2snO1xyXG5pbXBvcnQge1Jvb3RSb3V0ZXJ9IGZyb20gJ2FuZ3VsYXIyL3NyYy9yb3V0ZXIvcm91dGVyJztcclxuXHJcbmltcG9ydCB7Q29tcG9uZW50LCBwcm92aWRlfSBmcm9tICdhbmd1bGFyMi9jb3JlJztcclxuaW1wb3J0IHtET019IGZyb20gJ2FuZ3VsYXIyL3NyYy9wbGF0Zm9ybS9kb20vZG9tX2FkYXB0ZXInO1xyXG5pbXBvcnQge1RhYmxlUGFnZX0gZnJvbSAnLi90YWJsZSc7XHJcblxyXG5leHBvcnQgZnVuY3Rpb24gbWFpbigpIHtcclxuICBiZWZvcmVFYWNoUHJvdmlkZXJzKCgpID0+IFtcclxuICAgIFJvdXRlUmVnaXN0cnksXHJcbiAgICBwcm92aWRlKExvY2F0aW9uLCB7dXNlQ2xhc3M6IFNweUxvY2F0aW9ufSksXHJcbiAgICBwcm92aWRlKFJPVVRFUl9QUklNQVJZX0NPTVBPTkVOVCwge3VzZVZhbHVlOiBUYWJsZVBhZ2V9KSxcclxuICAgIHByb3ZpZGUoUm91dGVyLCB7dXNlQ2xhc3M6IFJvb3RSb3V0ZXJ9KVxyXG4gIF0pO1xyXG5cclxuICBkZXNjcmliZSgndGFibGUgY29tcG9uZW50JywgKCkgPT4ge1xyXG4gICAgaXQoJ3Nob3VsZCB3b3JrJyxcclxuICAgICAgaW5qZWN0QXN5bmMoW1Rlc3RDb21wb25lbnRCdWlsZGVyXSwgKHRjYjogVGVzdENvbXBvbmVudEJ1aWxkZXIpID0+IHtcclxuICAgICAgICByZXR1cm4gdGNiLmNyZWF0ZUFzeW5jKFRlc3RDb21wb25lbnQpXHJcbiAgICAgICAgICAudGhlbigocm9vdFRDKSA9PiB7XHJcbiAgICAgICAgICAgIGxldCB0YWJsZURPTUVsID0gcm9vdFRDLmRlYnVnRWxlbWVudC5jaGlsZHJlblswXS5uYXRpdmVFbGVtZW50O1xyXG5cclxuICAgICAgICAgICAgZXhwZWN0KERPTS5xdWVyeVNlbGVjdG9yQWxsKHRhYmxlRE9NRWwsICdoMScpWzBdLnRleHRDb250ZW50KS50b0VxdWFsKCdUYWJsZXMnKTtcclxuICAgICAgICAgIH0pO1xyXG4gICAgICB9KSk7XHJcbiAgfSk7XHJcbn1cclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAndGVzdC1jbXAnLFxyXG4gIGRpcmVjdGl2ZXM6IFtUYWJsZVBhZ2VdLFxyXG4gIHRlbXBsYXRlOiAnPHRhYmxlPjwvdGFibGU+J1xyXG59KVxyXG5jbGFzcyBUZXN0Q29tcG9uZW50IHt9XHJcbiJdfQ==
