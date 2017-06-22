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
var grid_1 = require('./grid');
function main() {
    testing_1.beforeEachProviders(function () { return [
        router_1.RouteRegistry,
        core_1.provide(router_1.Location, { useClass: location_mock_1.SpyLocation }),
        core_1.provide(router_1.ROUTER_PRIMARY_COMPONENT, { useValue: grid_1.GridPage }),
        core_1.provide(router_1.Router, { useClass: router_2.RootRouter })
    ]; });
    testing_1.describe('grid component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var gridDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(gridDOMEl, 'h1')[0].textContent).toEqual('Grid');
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
            directives: [grid_1.GridPage],
            template: '<grid></grid>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2dyaWQvZ3JpZC5zcGVjLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSx3QkFPTyxrQkFBa0IsQ0FBQyxDQUFBO0FBQzFCLHVCQUF3RSxpQkFBaUIsQ0FBQyxDQUFBO0FBQzFGLDhCQUEwQixpQ0FBaUMsQ0FBQyxDQUFBO0FBQzVELHVCQUF5Qiw0QkFBNEIsQ0FBQyxDQUFBO0FBRXRELHFCQUFpQyxlQUFlLENBQUMsQ0FBQTtBQUNqRCw0QkFBa0IsdUNBQXVDLENBQUMsQ0FBQTtBQUMxRCxxQkFBdUIsUUFBUSxDQUFDLENBQUE7QUFFaEM7SUFDRSw2QkFBbUIsQ0FBQyxjQUFNLE9BQUE7UUFDeEIsc0JBQWE7UUFDYixjQUFPLENBQUMsaUJBQVEsRUFBRSxFQUFDLFFBQVEsRUFBRSwyQkFBVyxFQUFDLENBQUM7UUFDMUMsY0FBTyxDQUFDLGlDQUF3QixFQUFFLEVBQUMsUUFBUSxFQUFFLGVBQVEsRUFBQyxDQUFDO1FBQ3ZELGNBQU8sQ0FBQyxlQUFNLEVBQUUsRUFBQyxRQUFRLEVBQUUsbUJBQVUsRUFBQyxDQUFDO0tBQ3hDLEVBTHlCLENBS3pCLENBQUMsQ0FBQztJQUVILGtCQUFRLENBQUMsZ0JBQWdCLEVBQUU7UUFDekIsWUFBRSxDQUFDLGFBQWEsRUFDZCxxQkFBVyxDQUFDLENBQUMsOEJBQW9CLENBQUMsRUFBRSxVQUFDLEdBQXlCO1lBQzVELE1BQU0sQ0FBQyxHQUFHLENBQUMsV0FBVyxDQUFDLGFBQWEsQ0FBQztpQkFDbEMsSUFBSSxDQUFDLFVBQUMsTUFBTTtnQkFDWCxJQUFJLFNBQVMsR0FBRyxNQUFNLENBQUMsWUFBWSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxhQUFhLENBQUM7Z0JBRTlELGdCQUFNLENBQUMsaUJBQUcsQ0FBQyxnQkFBZ0IsQ0FBQyxTQUFTLEVBQUUsSUFBSSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUMsV0FBVyxDQUFDLENBQUMsT0FBTyxDQUFDLE1BQU0sQ0FBQyxDQUFDO1lBQy9FLENBQUMsQ0FBQyxDQUFDO1FBQ1AsQ0FBQyxDQUFDLENBQUMsQ0FBQztJQUNSLENBQUMsQ0FBQyxDQUFDO0FBQ0wsQ0FBQztBQW5CZSxZQUFJLE9BbUJuQixDQUFBO0FBT0Q7SUFBQTtJQUFxQixDQUFDO0lBTHRCO1FBQUMsZ0JBQVMsQ0FBQztZQUNULFFBQVEsRUFBRSxVQUFVO1lBQ3BCLFVBQVUsRUFBRSxDQUFDLGVBQVEsQ0FBQztZQUN0QixRQUFRLEVBQUUsZUFBZTtTQUMxQixDQUFDOztxQkFBQTtJQUNtQixvQkFBQztBQUFELENBQXJCLEFBQXNCLElBQUEiLCJmaWxlIjoiYXBwL2NvbXBvbmVudHMvZ3JpZC9ncmlkLnNwZWMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQge1xyXG4gIFRlc3RDb21wb25lbnRCdWlsZGVyLFxyXG4gIGRlc2NyaWJlLFxyXG4gIGV4cGVjdCxcclxuICBpbmplY3RBc3luYyxcclxuICBpdCxcclxuICBiZWZvcmVFYWNoUHJvdmlkZXJzXHJcbn0gZnJvbSAnYW5ndWxhcjIvdGVzdGluZyc7XHJcbmltcG9ydCB7TG9jYXRpb24sIFJvdXRlciwgUm91dGVSZWdpc3RyeSwgUk9VVEVSX1BSSU1BUllfQ09NUE9ORU5UfSBmcm9tICdhbmd1bGFyMi9yb3V0ZXInO1xyXG5pbXBvcnQge1NweUxvY2F0aW9ufSBmcm9tICdhbmd1bGFyMi9zcmMvbW9jay9sb2NhdGlvbl9tb2NrJztcclxuaW1wb3J0IHtSb290Um91dGVyfSBmcm9tICdhbmd1bGFyMi9zcmMvcm91dGVyL3JvdXRlcic7XHJcblxyXG5pbXBvcnQge0NvbXBvbmVudCwgcHJvdmlkZX0gZnJvbSAnYW5ndWxhcjIvY29yZSc7XHJcbmltcG9ydCB7RE9NfSBmcm9tICdhbmd1bGFyMi9zcmMvcGxhdGZvcm0vZG9tL2RvbV9hZGFwdGVyJztcclxuaW1wb3J0IHtHcmlkUGFnZX0gZnJvbSAnLi9ncmlkJztcclxuXHJcbmV4cG9ydCBmdW5jdGlvbiBtYWluKCkge1xyXG4gIGJlZm9yZUVhY2hQcm92aWRlcnMoKCkgPT4gW1xyXG4gICAgUm91dGVSZWdpc3RyeSxcclxuICAgIHByb3ZpZGUoTG9jYXRpb24sIHt1c2VDbGFzczogU3B5TG9jYXRpb259KSxcclxuICAgIHByb3ZpZGUoUk9VVEVSX1BSSU1BUllfQ09NUE9ORU5ULCB7dXNlVmFsdWU6IEdyaWRQYWdlfSksXHJcbiAgICBwcm92aWRlKFJvdXRlciwge3VzZUNsYXNzOiBSb290Um91dGVyfSlcclxuICBdKTtcclxuXHJcbiAgZGVzY3JpYmUoJ2dyaWQgY29tcG9uZW50JywgKCkgPT4ge1xyXG4gICAgaXQoJ3Nob3VsZCB3b3JrJyxcclxuICAgICAgaW5qZWN0QXN5bmMoW1Rlc3RDb21wb25lbnRCdWlsZGVyXSwgKHRjYjogVGVzdENvbXBvbmVudEJ1aWxkZXIpID0+IHtcclxuICAgICAgICByZXR1cm4gdGNiLmNyZWF0ZUFzeW5jKFRlc3RDb21wb25lbnQpXHJcbiAgICAgICAgICAudGhlbigocm9vdFRDKSA9PiB7XHJcbiAgICAgICAgICAgIGxldCBncmlkRE9NRWwgPSByb290VEMuZGVidWdFbGVtZW50LmNoaWxkcmVuWzBdLm5hdGl2ZUVsZW1lbnQ7XHJcblxyXG4gICAgICAgICAgICBleHBlY3QoRE9NLnF1ZXJ5U2VsZWN0b3JBbGwoZ3JpZERPTUVsLCAnaDEnKVswXS50ZXh0Q29udGVudCkudG9FcXVhbCgnR3JpZCcpO1xyXG4gICAgICAgICAgfSk7XHJcbiAgICAgIH0pKTtcclxuICB9KTtcclxufVxyXG5cclxuQENvbXBvbmVudCh7XHJcbiAgc2VsZWN0b3I6ICd0ZXN0LWNtcCcsXHJcbiAgZGlyZWN0aXZlczogW0dyaWRQYWdlXSxcclxuICB0ZW1wbGF0ZTogJzxncmlkPjwvZ3JpZD4nXHJcbn0pXHJcbmNsYXNzIFRlc3RDb21wb25lbnQge31cclxuIl19
