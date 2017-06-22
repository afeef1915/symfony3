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
var notifications_1 = require('./notifications');
function main() {
    testing_1.beforeEachProviders(function () { return [
        router_1.RouteRegistry,
        core_1.provide(router_1.Location, { useClass: location_mock_1.SpyLocation }),
        core_1.provide(router_1.ROUTER_PRIMARY_COMPONENT, { useValue: notifications_1.NotificationsPage }),
        core_1.provide(router_1.Router, { useClass: router_2.RootRouter })
    ]; });
    testing_1.describe('notifications component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var notificationsDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(notificationsDOMEl, 'h1')[0].textContent).toEqual('Notifications');
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
            directives: [notifications_1.NotificationsPage],
            template: '<notifications></notifications>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL25vdGlmaWNhdGlvbnMvbm90aWZpY2F0aW9ucy5zcGVjLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSx3QkFPTyxrQkFBa0IsQ0FBQyxDQUFBO0FBQzFCLHVCQUF3RSxpQkFBaUIsQ0FBQyxDQUFBO0FBQzFGLDhCQUEwQixpQ0FBaUMsQ0FBQyxDQUFBO0FBQzVELHVCQUF5Qiw0QkFBNEIsQ0FBQyxDQUFBO0FBRXRELHFCQUFpQyxlQUFlLENBQUMsQ0FBQTtBQUNqRCw0QkFBa0IsdUNBQXVDLENBQUMsQ0FBQTtBQUMxRCw4QkFBZ0MsaUJBQWlCLENBQUMsQ0FBQTtBQUVsRDtJQUNFLDZCQUFtQixDQUFDLGNBQU0sT0FBQTtRQUN4QixzQkFBYTtRQUNiLGNBQU8sQ0FBQyxpQkFBUSxFQUFFLEVBQUMsUUFBUSxFQUFFLDJCQUFXLEVBQUMsQ0FBQztRQUMxQyxjQUFPLENBQUMsaUNBQXdCLEVBQUUsRUFBQyxRQUFRLEVBQUUsaUNBQWlCLEVBQUMsQ0FBQztRQUNoRSxjQUFPLENBQUMsZUFBTSxFQUFFLEVBQUMsUUFBUSxFQUFFLG1CQUFVLEVBQUMsQ0FBQztLQUN4QyxFQUx5QixDQUt6QixDQUFDLENBQUM7SUFFSCxrQkFBUSxDQUFDLHlCQUF5QixFQUFFO1FBQ2xDLFlBQUUsQ0FBQyxhQUFhLEVBQ2QscUJBQVcsQ0FBQyxDQUFDLDhCQUFvQixDQUFDLEVBQUUsVUFBQyxHQUF5QjtZQUM1RCxNQUFNLENBQUMsR0FBRyxDQUFDLFdBQVcsQ0FBQyxhQUFhLENBQUM7aUJBQ2xDLElBQUksQ0FBQyxVQUFDLE1BQU07Z0JBQ1gsSUFBSSxrQkFBa0IsR0FBRyxNQUFNLENBQUMsWUFBWSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxhQUFhLENBQUM7Z0JBRXZFLGdCQUFNLENBQUMsaUJBQUcsQ0FBQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQyxPQUFPLENBQUMsZUFBZSxDQUFDLENBQUM7WUFDakcsQ0FBQyxDQUFDLENBQUM7UUFDUCxDQUFDLENBQUMsQ0FBQyxDQUFDO0lBQ1IsQ0FBQyxDQUFDLENBQUM7QUFDTCxDQUFDO0FBbkJlLFlBQUksT0FtQm5CLENBQUE7QUFPRDtJQUFBO0lBQXFCLENBQUM7SUFMdEI7UUFBQyxnQkFBUyxDQUFDO1lBQ1QsUUFBUSxFQUFFLFVBQVU7WUFDcEIsVUFBVSxFQUFFLENBQUMsaUNBQWlCLENBQUM7WUFDL0IsUUFBUSxFQUFFLGlDQUFpQztTQUM1QyxDQUFDOztxQkFBQTtJQUNtQixvQkFBQztBQUFELENBQXJCLEFBQXNCLElBQUEiLCJmaWxlIjoiYXBwL2NvbXBvbmVudHMvbm90aWZpY2F0aW9ucy9ub3RpZmljYXRpb25zLnNwZWMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQge1xyXG4gIFRlc3RDb21wb25lbnRCdWlsZGVyLFxyXG4gIGRlc2NyaWJlLFxyXG4gIGV4cGVjdCxcclxuICBpbmplY3RBc3luYyxcclxuICBpdCxcclxuICBiZWZvcmVFYWNoUHJvdmlkZXJzXHJcbn0gZnJvbSAnYW5ndWxhcjIvdGVzdGluZyc7XHJcbmltcG9ydCB7TG9jYXRpb24sIFJvdXRlciwgUm91dGVSZWdpc3RyeSwgUk9VVEVSX1BSSU1BUllfQ09NUE9ORU5UfSBmcm9tICdhbmd1bGFyMi9yb3V0ZXInO1xyXG5pbXBvcnQge1NweUxvY2F0aW9ufSBmcm9tICdhbmd1bGFyMi9zcmMvbW9jay9sb2NhdGlvbl9tb2NrJztcclxuaW1wb3J0IHtSb290Um91dGVyfSBmcm9tICdhbmd1bGFyMi9zcmMvcm91dGVyL3JvdXRlcic7XHJcblxyXG5pbXBvcnQge0NvbXBvbmVudCwgcHJvdmlkZX0gZnJvbSAnYW5ndWxhcjIvY29yZSc7XHJcbmltcG9ydCB7RE9NfSBmcm9tICdhbmd1bGFyMi9zcmMvcGxhdGZvcm0vZG9tL2RvbV9hZGFwdGVyJztcclxuaW1wb3J0IHtOb3RpZmljYXRpb25zUGFnZX0gZnJvbSAnLi9ub3RpZmljYXRpb25zJztcclxuXHJcbmV4cG9ydCBmdW5jdGlvbiBtYWluKCkge1xyXG4gIGJlZm9yZUVhY2hQcm92aWRlcnMoKCkgPT4gW1xyXG4gICAgUm91dGVSZWdpc3RyeSxcclxuICAgIHByb3ZpZGUoTG9jYXRpb24sIHt1c2VDbGFzczogU3B5TG9jYXRpb259KSxcclxuICAgIHByb3ZpZGUoUk9VVEVSX1BSSU1BUllfQ09NUE9ORU5ULCB7dXNlVmFsdWU6IE5vdGlmaWNhdGlvbnNQYWdlfSksXHJcbiAgICBwcm92aWRlKFJvdXRlciwge3VzZUNsYXNzOiBSb290Um91dGVyfSlcclxuICBdKTtcclxuXHJcbiAgZGVzY3JpYmUoJ25vdGlmaWNhdGlvbnMgY29tcG9uZW50JywgKCkgPT4ge1xyXG4gICAgaXQoJ3Nob3VsZCB3b3JrJyxcclxuICAgICAgaW5qZWN0QXN5bmMoW1Rlc3RDb21wb25lbnRCdWlsZGVyXSwgKHRjYjogVGVzdENvbXBvbmVudEJ1aWxkZXIpID0+IHtcclxuICAgICAgICByZXR1cm4gdGNiLmNyZWF0ZUFzeW5jKFRlc3RDb21wb25lbnQpXHJcbiAgICAgICAgICAudGhlbigocm9vdFRDKSA9PiB7XHJcbiAgICAgICAgICAgIGxldCBub3RpZmljYXRpb25zRE9NRWwgPSByb290VEMuZGVidWdFbGVtZW50LmNoaWxkcmVuWzBdLm5hdGl2ZUVsZW1lbnQ7XHJcblxyXG4gICAgICAgICAgICBleHBlY3QoRE9NLnF1ZXJ5U2VsZWN0b3JBbGwobm90aWZpY2F0aW9uc0RPTUVsLCAnaDEnKVswXS50ZXh0Q29udGVudCkudG9FcXVhbCgnTm90aWZpY2F0aW9ucycpO1xyXG4gICAgICAgICAgfSk7XHJcbiAgICAgIH0pKTtcclxuICB9KTtcclxufVxyXG5cclxuQENvbXBvbmVudCh7XHJcbiAgc2VsZWN0b3I6ICd0ZXN0LWNtcCcsXHJcbiAgZGlyZWN0aXZlczogW05vdGlmaWNhdGlvbnNQYWdlXSxcclxuICB0ZW1wbGF0ZTogJzxub3RpZmljYXRpb25zPjwvbm90aWZpY2F0aW9ucz4nXHJcbn0pXHJcbmNsYXNzIFRlc3RDb21wb25lbnQge31cclxuIl19
