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
var home_1 = require('./home');
function main() {
    testing_1.beforeEachProviders(function () { return [
        router_1.RouteRegistry,
        core_1.provide(router_1.Location, { useClass: location_mock_1.SpyLocation }),
        core_1.provide(router_1.ROUTER_PRIMARY_COMPONENT, { useValue: home_1.HomePage }),
        core_1.provide(router_1.Router, { useClass: router_2.RootRouter })
    ]; });
    testing_1.describe('Home component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var homeDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(homeDOMEl, 'h1')[0].textContent).toEqual('Dashboard');
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
            directives: [home_1.HomePage],
            template: '<dashboard></dashboard>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2hvbWUvaG9tZS5zcGVjLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSx3QkFPTyxrQkFBa0IsQ0FBQyxDQUFBO0FBQzFCLHVCQUF3RSxpQkFBaUIsQ0FBQyxDQUFBO0FBQzFGLDhCQUEwQixpQ0FBaUMsQ0FBQyxDQUFBO0FBQzVELHVCQUF5Qiw0QkFBNEIsQ0FBQyxDQUFBO0FBRXRELHFCQUFpQyxlQUFlLENBQUMsQ0FBQTtBQUNqRCw0QkFBa0IsdUNBQXVDLENBQUMsQ0FBQTtBQUMxRCxxQkFBdUIsUUFBUSxDQUFDLENBQUE7QUFFaEM7SUFDRSw2QkFBbUIsQ0FBQyxjQUFNLE9BQUE7UUFDeEIsc0JBQWE7UUFDYixjQUFPLENBQUMsaUJBQVEsRUFBRSxFQUFDLFFBQVEsRUFBRSwyQkFBVyxFQUFDLENBQUM7UUFDMUMsY0FBTyxDQUFDLGlDQUF3QixFQUFFLEVBQUMsUUFBUSxFQUFFLGVBQVEsRUFBQyxDQUFDO1FBQ3ZELGNBQU8sQ0FBQyxlQUFNLEVBQUUsRUFBQyxRQUFRLEVBQUUsbUJBQVUsRUFBQyxDQUFDO0tBQ3hDLEVBTHlCLENBS3pCLENBQUMsQ0FBQztJQUVILGtCQUFRLENBQUMsZ0JBQWdCLEVBQUU7UUFDekIsWUFBRSxDQUFDLGFBQWEsRUFDZCxxQkFBVyxDQUFDLENBQUMsOEJBQW9CLENBQUMsRUFBRSxVQUFDLEdBQXlCO1lBQzVELE1BQU0sQ0FBQyxHQUFHLENBQUMsV0FBVyxDQUFDLGFBQWEsQ0FBQztpQkFDbEMsSUFBSSxDQUFDLFVBQUMsTUFBTTtnQkFDWCxJQUFJLFNBQVMsR0FBRyxNQUFNLENBQUMsWUFBWSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxhQUFhLENBQUM7Z0JBRTlELGdCQUFNLENBQUMsaUJBQUcsQ0FBQyxnQkFBZ0IsQ0FBQyxTQUFTLEVBQUUsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUMsV0FBVyxDQUFDLENBQUMsT0FBTyxDQUFDLFdBQVcsQ0FBQyxDQUFDO1lBQ3BGLENBQUMsQ0FBQyxDQUFDO1FBQ1AsQ0FBQyxDQUFDLENBQUMsQ0FBQztJQUNSLENBQUMsQ0FBQyxDQUFDO0FBQ0wsQ0FBQztBQW5CZSxZQUFJLE9BbUJuQixDQUFBO0FBT0Q7SUFBQTtJQUFxQixDQUFDO0lBTHRCO1FBQUMsZ0JBQVMsQ0FBQztZQUNULFFBQVEsRUFBRSxVQUFVO1lBQ3BCLFVBQVUsRUFBRSxDQUFDLGVBQVEsQ0FBQztZQUN0QixRQUFRLEVBQUUseUJBQXlCO1NBQ3BDLENBQUM7O3FCQUFBO0lBQ21CLG9CQUFDO0FBQUQsQ0FBckIsQUFBc0IsSUFBQSIsImZpbGUiOiJhcHAvY29tcG9uZW50cy9ob21lL2hvbWUuc3BlYy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7XHJcbiAgVGVzdENvbXBvbmVudEJ1aWxkZXIsXHJcbiAgZGVzY3JpYmUsXHJcbiAgZXhwZWN0LFxyXG4gIGluamVjdEFzeW5jLFxyXG4gIGl0LFxyXG4gIGJlZm9yZUVhY2hQcm92aWRlcnNcclxufSBmcm9tICdhbmd1bGFyMi90ZXN0aW5nJztcclxuaW1wb3J0IHtMb2NhdGlvbiwgUm91dGVyLCBSb3V0ZVJlZ2lzdHJ5LCBST1VURVJfUFJJTUFSWV9DT01QT05FTlR9IGZyb20gJ2FuZ3VsYXIyL3JvdXRlcic7XHJcbmltcG9ydCB7U3B5TG9jYXRpb259IGZyb20gJ2FuZ3VsYXIyL3NyYy9tb2NrL2xvY2F0aW9uX21vY2snO1xyXG5pbXBvcnQge1Jvb3RSb3V0ZXJ9IGZyb20gJ2FuZ3VsYXIyL3NyYy9yb3V0ZXIvcm91dGVyJztcclxuXHJcbmltcG9ydCB7Q29tcG9uZW50LCBwcm92aWRlfSBmcm9tICdhbmd1bGFyMi9jb3JlJztcclxuaW1wb3J0IHtET019IGZyb20gJ2FuZ3VsYXIyL3NyYy9wbGF0Zm9ybS9kb20vZG9tX2FkYXB0ZXInO1xyXG5pbXBvcnQge0hvbWVQYWdlfSBmcm9tICcuL2hvbWUnO1xyXG5cclxuZXhwb3J0IGZ1bmN0aW9uIG1haW4oKSB7XHJcbiAgYmVmb3JlRWFjaFByb3ZpZGVycygoKSA9PiBbXHJcbiAgICBSb3V0ZVJlZ2lzdHJ5LFxyXG4gICAgcHJvdmlkZShMb2NhdGlvbiwge3VzZUNsYXNzOiBTcHlMb2NhdGlvbn0pLFxyXG4gICAgcHJvdmlkZShST1VURVJfUFJJTUFSWV9DT01QT05FTlQsIHt1c2VWYWx1ZTogSG9tZVBhZ2V9KSxcclxuICAgIHByb3ZpZGUoUm91dGVyLCB7dXNlQ2xhc3M6IFJvb3RSb3V0ZXJ9KVxyXG4gIF0pO1xyXG5cclxuICBkZXNjcmliZSgnSG9tZSBjb21wb25lbnQnLCAoKSA9PiB7XHJcbiAgICBpdCgnc2hvdWxkIHdvcmsnLFxyXG4gICAgICBpbmplY3RBc3luYyhbVGVzdENvbXBvbmVudEJ1aWxkZXJdLCAodGNiOiBUZXN0Q29tcG9uZW50QnVpbGRlcikgPT4ge1xyXG4gICAgICAgIHJldHVybiB0Y2IuY3JlYXRlQXN5bmMoVGVzdENvbXBvbmVudClcclxuICAgICAgICAgIC50aGVuKChyb290VEMpID0+IHtcclxuICAgICAgICAgICAgbGV0IGhvbWVET01FbCA9IHJvb3RUQy5kZWJ1Z0VsZW1lbnQuY2hpbGRyZW5bMF0ubmF0aXZlRWxlbWVudDtcclxuXHJcbiAgICAgICAgICAgIGV4cGVjdChET00ucXVlcnlTZWxlY3RvckFsbChob21lRE9NRWwsICdoMScpWzBdLnRleHRDb250ZW50KS50b0VxdWFsKCdEYXNoYm9hcmQnKTtcclxuICAgICAgICAgIH0pO1xyXG4gICAgICB9KSk7XHJcbiAgfSk7XHJcbn1cclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAndGVzdC1jbXAnLFxyXG4gIGRpcmVjdGl2ZXM6IFtIb21lUGFnZV0sXHJcbiAgdGVtcGxhdGU6ICc8ZGFzaGJvYXJkPjwvZGFzaGJvYXJkPidcclxufSlcclxuY2xhc3MgVGVzdENvbXBvbmVudCB7fVxyXG4iXX0=
