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
var buttons_1 = require('./buttons');
function main() {
    testing_1.beforeEachProviders(function () { return [
        router_1.RouteRegistry,
        core_1.provide(router_1.Location, { useClass: location_mock_1.SpyLocation }),
        core_1.provide(router_1.ROUTER_PRIMARY_COMPONENT, { useValue: buttons_1.ButtonsPage }),
        core_1.provide(router_1.Router, { useClass: router_2.RootRouter })
    ]; });
    testing_1.describe('buttons component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var buttonsDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(buttonsDOMEl, 'h1')[0].textContent).toEqual('Buttons');
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
            directives: [buttons_1.ButtonsPage],
            template: '<buttons></buttons>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2J1dHRvbnMvYnV0dG9ucy5zcGVjLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSx3QkFPTyxrQkFBa0IsQ0FBQyxDQUFBO0FBQzFCLHVCQUF3RSxpQkFBaUIsQ0FBQyxDQUFBO0FBQzFGLDhCQUEwQixpQ0FBaUMsQ0FBQyxDQUFBO0FBQzVELHVCQUF5Qiw0QkFBNEIsQ0FBQyxDQUFBO0FBRXRELHFCQUFpQyxlQUFlLENBQUMsQ0FBQTtBQUNqRCw0QkFBa0IsdUNBQXVDLENBQUMsQ0FBQTtBQUMxRCx3QkFBMEIsV0FBVyxDQUFDLENBQUE7QUFFdEM7SUFDRSw2QkFBbUIsQ0FBQyxjQUFNLE9BQUE7UUFDeEIsc0JBQWE7UUFDYixjQUFPLENBQUMsaUJBQVEsRUFBRSxFQUFDLFFBQVEsRUFBRSwyQkFBVyxFQUFDLENBQUM7UUFDMUMsY0FBTyxDQUFDLGlDQUF3QixFQUFFLEVBQUMsUUFBUSxFQUFFLHFCQUFXLEVBQUMsQ0FBQztRQUMxRCxjQUFPLENBQUMsZUFBTSxFQUFFLEVBQUMsUUFBUSxFQUFFLG1CQUFVLEVBQUMsQ0FBQztLQUN4QyxFQUx5QixDQUt6QixDQUFDLENBQUM7SUFFSCxrQkFBUSxDQUFDLG1CQUFtQixFQUFFO1FBQzVCLFlBQUUsQ0FBQyxhQUFhLEVBQ2QscUJBQVcsQ0FBQyxDQUFDLDhCQUFvQixDQUFDLEVBQUUsVUFBQyxHQUF5QjtZQUM1RCxNQUFNLENBQUMsR0FBRyxDQUFDLFdBQVcsQ0FBQyxhQUFhLENBQUM7aUJBQ2xDLElBQUksQ0FBQyxVQUFDLE1BQU07Z0JBQ1gsSUFBSSxZQUFZLEdBQUcsTUFBTSxDQUFDLFlBQVksQ0FBQyxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUMsYUFBYSxDQUFDO2dCQUVqRSxnQkFBTSxDQUFDLGlCQUFHLENBQUMsZ0JBQWdCLENBQUMsWUFBWSxFQUFFLElBQUksQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDLE9BQU8sQ0FBQyxTQUFTLENBQUMsQ0FBQztZQUNyRixDQUFDLENBQUMsQ0FBQztRQUNQLENBQUMsQ0FBQyxDQUFDLENBQUM7SUFDUixDQUFDLENBQUMsQ0FBQztBQUNMLENBQUM7QUFuQmUsWUFBSSxPQW1CbkIsQ0FBQTtBQU9EO0lBQUE7SUFBcUIsQ0FBQztJQUx0QjtRQUFDLGdCQUFTLENBQUM7WUFDVCxRQUFRLEVBQUUsVUFBVTtZQUNwQixVQUFVLEVBQUUsQ0FBQyxxQkFBVyxDQUFDO1lBQ3pCLFFBQVEsRUFBRSxxQkFBcUI7U0FDaEMsQ0FBQzs7cUJBQUE7SUFDbUIsb0JBQUM7QUFBRCxDQUFyQixBQUFzQixJQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL2J1dHRvbnMvYnV0dG9ucy5zcGVjLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHtcclxuICBUZXN0Q29tcG9uZW50QnVpbGRlcixcclxuICBkZXNjcmliZSxcclxuICBleHBlY3QsXHJcbiAgaW5qZWN0QXN5bmMsXHJcbiAgaXQsXHJcbiAgYmVmb3JlRWFjaFByb3ZpZGVyc1xyXG59IGZyb20gJ2FuZ3VsYXIyL3Rlc3RpbmcnO1xyXG5pbXBvcnQge0xvY2F0aW9uLCBSb3V0ZXIsIFJvdXRlUmVnaXN0cnksIFJPVVRFUl9QUklNQVJZX0NPTVBPTkVOVH0gZnJvbSAnYW5ndWxhcjIvcm91dGVyJztcclxuaW1wb3J0IHtTcHlMb2NhdGlvbn0gZnJvbSAnYW5ndWxhcjIvc3JjL21vY2svbG9jYXRpb25fbW9jayc7XHJcbmltcG9ydCB7Um9vdFJvdXRlcn0gZnJvbSAnYW5ndWxhcjIvc3JjL3JvdXRlci9yb3V0ZXInO1xyXG5cclxuaW1wb3J0IHtDb21wb25lbnQsIHByb3ZpZGV9IGZyb20gJ2FuZ3VsYXIyL2NvcmUnO1xyXG5pbXBvcnQge0RPTX0gZnJvbSAnYW5ndWxhcjIvc3JjL3BsYXRmb3JtL2RvbS9kb21fYWRhcHRlcic7XHJcbmltcG9ydCB7QnV0dG9uc1BhZ2V9IGZyb20gJy4vYnV0dG9ucyc7XHJcblxyXG5leHBvcnQgZnVuY3Rpb24gbWFpbigpIHtcclxuICBiZWZvcmVFYWNoUHJvdmlkZXJzKCgpID0+IFtcclxuICAgIFJvdXRlUmVnaXN0cnksXHJcbiAgICBwcm92aWRlKExvY2F0aW9uLCB7dXNlQ2xhc3M6IFNweUxvY2F0aW9ufSksXHJcbiAgICBwcm92aWRlKFJPVVRFUl9QUklNQVJZX0NPTVBPTkVOVCwge3VzZVZhbHVlOiBCdXR0b25zUGFnZX0pLFxyXG4gICAgcHJvdmlkZShSb3V0ZXIsIHt1c2VDbGFzczogUm9vdFJvdXRlcn0pXHJcbiAgXSk7XHJcblxyXG4gIGRlc2NyaWJlKCdidXR0b25zIGNvbXBvbmVudCcsICgpID0+IHtcclxuICAgIGl0KCdzaG91bGQgd29yaycsXHJcbiAgICAgIGluamVjdEFzeW5jKFtUZXN0Q29tcG9uZW50QnVpbGRlcl0sICh0Y2I6IFRlc3RDb21wb25lbnRCdWlsZGVyKSA9PiB7XHJcbiAgICAgICAgcmV0dXJuIHRjYi5jcmVhdGVBc3luYyhUZXN0Q29tcG9uZW50KVxyXG4gICAgICAgICAgLnRoZW4oKHJvb3RUQykgPT4ge1xyXG4gICAgICAgICAgICBsZXQgYnV0dG9uc0RPTUVsID0gcm9vdFRDLmRlYnVnRWxlbWVudC5jaGlsZHJlblswXS5uYXRpdmVFbGVtZW50O1xyXG5cclxuICAgICAgICAgICAgZXhwZWN0KERPTS5xdWVyeVNlbGVjdG9yQWxsKGJ1dHRvbnNET01FbCwgJ2gxJylbMF0udGV4dENvbnRlbnQpLnRvRXF1YWwoJ0J1dHRvbnMnKTtcclxuICAgICAgICAgIH0pO1xyXG4gICAgICB9KSk7XHJcbiAgfSk7XHJcbn1cclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAndGVzdC1jbXAnLFxyXG4gIGRpcmVjdGl2ZXM6IFtCdXR0b25zUGFnZV0sXHJcbiAgdGVtcGxhdGU6ICc8YnV0dG9ucz48L2J1dHRvbnM+J1xyXG59KVxyXG5jbGFzcyBUZXN0Q29tcG9uZW50IHt9XHJcbiJdfQ==
