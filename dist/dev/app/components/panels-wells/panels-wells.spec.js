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
var panels_wells_1 = require('./panels-wells');
function main() {
    testing_1.beforeEachProviders(function () { return [
        router_1.RouteRegistry,
        core_1.provide(router_1.Location, { useClass: location_mock_1.SpyLocation }),
        core_1.provide(router_1.ROUTER_PRIMARY_COMPONENT, { useValue: panels_wells_1.PanelsWellsPage }),
        core_1.provide(router_1.Router, { useClass: router_2.RootRouter })
    ]; });
    testing_1.describe('panels-wells component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var panelsWellsDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(panelsWellsDOMEl, 'h1')[0].textContent).toEqual('Panels and Wells');
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
            directives: [panels_wells_1.PanelsWellsPage],
            template: '<panels-wells></panels-wells>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL3BhbmVscy13ZWxscy9wYW5lbHMtd2VsbHMuc3BlYy50cyJdLCJuYW1lcyI6W10sIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7O0FBQUEsd0JBT08sa0JBQWtCLENBQUMsQ0FBQTtBQUMxQix1QkFBd0UsaUJBQWlCLENBQUMsQ0FBQTtBQUMxRiw4QkFBMEIsaUNBQWlDLENBQUMsQ0FBQTtBQUM1RCx1QkFBeUIsNEJBQTRCLENBQUMsQ0FBQTtBQUV0RCxxQkFBaUMsZUFBZSxDQUFDLENBQUE7QUFDakQsNEJBQWtCLHVDQUF1QyxDQUFDLENBQUE7QUFDMUQsNkJBQThCLGdCQUFnQixDQUFDLENBQUE7QUFFL0M7SUFDRSw2QkFBbUIsQ0FBQyxjQUFNLE9BQUE7UUFDeEIsc0JBQWE7UUFDYixjQUFPLENBQUMsaUJBQVEsRUFBRSxFQUFDLFFBQVEsRUFBRSwyQkFBVyxFQUFDLENBQUM7UUFDMUMsY0FBTyxDQUFDLGlDQUF3QixFQUFFLEVBQUMsUUFBUSxFQUFFLDhCQUFlLEVBQUMsQ0FBQztRQUM5RCxjQUFPLENBQUMsZUFBTSxFQUFFLEVBQUMsUUFBUSxFQUFFLG1CQUFVLEVBQUMsQ0FBQztLQUN4QyxFQUx5QixDQUt6QixDQUFDLENBQUM7SUFFSCxrQkFBUSxDQUFDLHdCQUF3QixFQUFFO1FBQ2pDLFlBQUUsQ0FBQyxhQUFhLEVBQ2QscUJBQVcsQ0FBQyxDQUFDLDhCQUFvQixDQUFDLEVBQUUsVUFBQyxHQUF5QjtZQUM1RCxNQUFNLENBQUMsR0FBRyxDQUFDLFdBQVcsQ0FBQyxhQUFhLENBQUM7aUJBQ2xDLElBQUksQ0FBQyxVQUFDLE1BQU07Z0JBQ1gsSUFBSSxnQkFBZ0IsR0FBRyxNQUFNLENBQUMsWUFBWSxDQUFDLFFBQVEsQ0FBQyxDQUFDLENBQUMsQ0FBQyxhQUFhLENBQUM7Z0JBRXJFLGdCQUFNLENBQUMsaUJBQUcsQ0FBQyxnQkFBZ0IsQ0FBQyxnQkFBZ0IsRUFBRSxJQUFJLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQyxXQUFXLENBQUMsQ0FBQyxPQUFPLENBQUMsa0JBQWtCLENBQUMsQ0FBQztZQUNsRyxDQUFDLENBQUMsQ0FBQztRQUNQLENBQUMsQ0FBQyxDQUFDLENBQUM7SUFDUixDQUFDLENBQUMsQ0FBQztBQUNMLENBQUM7QUFuQmUsWUFBSSxPQW1CbkIsQ0FBQTtBQU9EO0lBQUE7SUFBcUIsQ0FBQztJQUx0QjtRQUFDLGdCQUFTLENBQUM7WUFDVCxRQUFRLEVBQUUsVUFBVTtZQUNwQixVQUFVLEVBQUUsQ0FBQyw4QkFBZSxDQUFDO1lBQzdCLFFBQVEsRUFBRSwrQkFBK0I7U0FDMUMsQ0FBQzs7cUJBQUE7SUFDbUIsb0JBQUM7QUFBRCxDQUFyQixBQUFzQixJQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL3BhbmVscy13ZWxscy9wYW5lbHMtd2VsbHMuc3BlYy5qcyIsInNvdXJjZXNDb250ZW50IjpbImltcG9ydCB7XHJcbiAgVGVzdENvbXBvbmVudEJ1aWxkZXIsXHJcbiAgZGVzY3JpYmUsXHJcbiAgZXhwZWN0LFxyXG4gIGluamVjdEFzeW5jLFxyXG4gIGl0LFxyXG4gIGJlZm9yZUVhY2hQcm92aWRlcnNcclxufSBmcm9tICdhbmd1bGFyMi90ZXN0aW5nJztcclxuaW1wb3J0IHtMb2NhdGlvbiwgUm91dGVyLCBSb3V0ZVJlZ2lzdHJ5LCBST1VURVJfUFJJTUFSWV9DT01QT05FTlR9IGZyb20gJ2FuZ3VsYXIyL3JvdXRlcic7XHJcbmltcG9ydCB7U3B5TG9jYXRpb259IGZyb20gJ2FuZ3VsYXIyL3NyYy9tb2NrL2xvY2F0aW9uX21vY2snO1xyXG5pbXBvcnQge1Jvb3RSb3V0ZXJ9IGZyb20gJ2FuZ3VsYXIyL3NyYy9yb3V0ZXIvcm91dGVyJztcclxuXHJcbmltcG9ydCB7Q29tcG9uZW50LCBwcm92aWRlfSBmcm9tICdhbmd1bGFyMi9jb3JlJztcclxuaW1wb3J0IHtET019IGZyb20gJ2FuZ3VsYXIyL3NyYy9wbGF0Zm9ybS9kb20vZG9tX2FkYXB0ZXInO1xyXG5pbXBvcnQge1BhbmVsc1dlbGxzUGFnZX0gZnJvbSAnLi9wYW5lbHMtd2VsbHMnO1xyXG5cclxuZXhwb3J0IGZ1bmN0aW9uIG1haW4oKSB7XHJcbiAgYmVmb3JlRWFjaFByb3ZpZGVycygoKSA9PiBbXHJcbiAgICBSb3V0ZVJlZ2lzdHJ5LFxyXG4gICAgcHJvdmlkZShMb2NhdGlvbiwge3VzZUNsYXNzOiBTcHlMb2NhdGlvbn0pLFxyXG4gICAgcHJvdmlkZShST1VURVJfUFJJTUFSWV9DT01QT05FTlQsIHt1c2VWYWx1ZTogUGFuZWxzV2VsbHNQYWdlfSksXHJcbiAgICBwcm92aWRlKFJvdXRlciwge3VzZUNsYXNzOiBSb290Um91dGVyfSlcclxuICBdKTtcclxuXHJcbiAgZGVzY3JpYmUoJ3BhbmVscy13ZWxscyBjb21wb25lbnQnLCAoKSA9PiB7XHJcbiAgICBpdCgnc2hvdWxkIHdvcmsnLFxyXG4gICAgICBpbmplY3RBc3luYyhbVGVzdENvbXBvbmVudEJ1aWxkZXJdLCAodGNiOiBUZXN0Q29tcG9uZW50QnVpbGRlcikgPT4ge1xyXG4gICAgICAgIHJldHVybiB0Y2IuY3JlYXRlQXN5bmMoVGVzdENvbXBvbmVudClcclxuICAgICAgICAgIC50aGVuKChyb290VEMpID0+IHtcclxuICAgICAgICAgICAgbGV0IHBhbmVsc1dlbGxzRE9NRWwgPSByb290VEMuZGVidWdFbGVtZW50LmNoaWxkcmVuWzBdLm5hdGl2ZUVsZW1lbnQ7XHJcblxyXG4gICAgICAgICAgICBleHBlY3QoRE9NLnF1ZXJ5U2VsZWN0b3JBbGwocGFuZWxzV2VsbHNET01FbCwgJ2gxJylbMF0udGV4dENvbnRlbnQpLnRvRXF1YWwoJ1BhbmVscyBhbmQgV2VsbHMnKTtcclxuICAgICAgICAgIH0pO1xyXG4gICAgICB9KSk7XHJcbiAgfSk7XHJcbn1cclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAndGVzdC1jbXAnLFxyXG4gIGRpcmVjdGl2ZXM6IFtQYW5lbHNXZWxsc1BhZ2VdLFxyXG4gIHRlbXBsYXRlOiAnPHBhbmVscy13ZWxscz48L3BhbmVscy13ZWxscz4nXHJcbn0pXHJcbmNsYXNzIFRlc3RDb21wb25lbnQge31cclxuIl19
