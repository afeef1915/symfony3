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
var core_1 = require('angular2/core');
var dom_adapter_1 = require('angular2/src/platform/dom/dom_adapter');
var auth_1 = require('./auth');
function main() {
    testing_1.describe('auth component', function () {
        testing_1.it('should work', testing_1.injectAsync([testing_1.TestComponentBuilder], function (tcb) {
            return tcb.createAsync(TestComponent)
                .then(function (rootTC) {
                var authDOMEl = rootTC.debugElement.children[0].nativeElement;
                testing_1.expect(dom_adapter_1.DOM.querySelectorAll(authDOMEl, 'h3')[0].textContent).toEqual('Please Sign In');
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
            directives: [auth_1.AuthPage],
            template: '<auth></auth>'
        }), 
        __metadata('design:paramtypes', [])
    ], TestComponent);
    return TestComponent;
}());

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2F1dGgvYXV0aC5zcGVjLnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSx3QkFNTyxrQkFBa0IsQ0FBQyxDQUFBO0FBRTFCLHFCQUF3QixlQUFlLENBQUMsQ0FBQTtBQUN4Qyw0QkFBa0IsdUNBQXVDLENBQUMsQ0FBQTtBQUMxRCxxQkFBdUIsUUFBUSxDQUFDLENBQUE7QUFFaEM7SUFDRSxrQkFBUSxDQUFDLGdCQUFnQixFQUFFO1FBQ3pCLFlBQUUsQ0FBQyxhQUFhLEVBQ2QscUJBQVcsQ0FBQyxDQUFDLDhCQUFvQixDQUFDLEVBQUUsVUFBQyxHQUF5QjtZQUM1RCxNQUFNLENBQUMsR0FBRyxDQUFDLFdBQVcsQ0FBQyxhQUFhLENBQUM7aUJBQ2xDLElBQUksQ0FBQyxVQUFDLE1BQU07Z0JBQ1gsSUFBSSxTQUFTLEdBQUcsTUFBTSxDQUFDLFlBQVksQ0FBQyxRQUFRLENBQUMsQ0FBQyxDQUFDLENBQUMsYUFBYSxDQUFDO2dCQUU5RCxnQkFBTSxDQUFDLGlCQUFHLENBQUMsZ0JBQWdCLENBQUMsU0FBUyxFQUFFLElBQUksQ0FBQyxDQUFDLENBQUMsQ0FBQyxDQUFDLFdBQVcsQ0FBQyxDQUFDLE9BQU8sQ0FBQyxnQkFBZ0IsQ0FBQyxDQUFDO1lBQ3pGLENBQUMsQ0FBQyxDQUFDO1FBQ1AsQ0FBQyxDQUFDLENBQUMsQ0FBQztJQUNSLENBQUMsQ0FBQyxDQUFDO0FBQ0wsQ0FBQztBQVplLFlBQUksT0FZbkIsQ0FBQTtBQU9EO0lBQUE7SUFBcUIsQ0FBQztJQUx0QjtRQUFDLGdCQUFTLENBQUM7WUFDVCxRQUFRLEVBQUUsVUFBVTtZQUNwQixVQUFVLEVBQUUsQ0FBQyxlQUFRLENBQUM7WUFDdEIsUUFBUSxFQUFFLGVBQWU7U0FDMUIsQ0FBQzs7cUJBQUE7SUFDbUIsb0JBQUM7QUFBRCxDQUFyQixBQUFzQixJQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL2F1dGgvYXV0aC5zcGVjLmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHtcclxuICBUZXN0Q29tcG9uZW50QnVpbGRlcixcclxuICBkZXNjcmliZSxcclxuICBleHBlY3QsXHJcbiAgaW5qZWN0QXN5bmMsXHJcbiAgaXQsXHJcbn0gZnJvbSAnYW5ndWxhcjIvdGVzdGluZyc7XHJcblxyXG5pbXBvcnQge0NvbXBvbmVudH0gZnJvbSAnYW5ndWxhcjIvY29yZSc7XHJcbmltcG9ydCB7RE9NfSBmcm9tICdhbmd1bGFyMi9zcmMvcGxhdGZvcm0vZG9tL2RvbV9hZGFwdGVyJztcclxuaW1wb3J0IHtBdXRoUGFnZX0gZnJvbSAnLi9hdXRoJztcclxuXHJcbmV4cG9ydCBmdW5jdGlvbiBtYWluKCkge1xyXG4gIGRlc2NyaWJlKCdhdXRoIGNvbXBvbmVudCcsICgpID0+IHtcclxuICAgIGl0KCdzaG91bGQgd29yaycsXHJcbiAgICAgIGluamVjdEFzeW5jKFtUZXN0Q29tcG9uZW50QnVpbGRlcl0sICh0Y2I6IFRlc3RDb21wb25lbnRCdWlsZGVyKSA9PiB7XHJcbiAgICAgICAgcmV0dXJuIHRjYi5jcmVhdGVBc3luYyhUZXN0Q29tcG9uZW50KVxyXG4gICAgICAgICAgLnRoZW4oKHJvb3RUQykgPT4ge1xyXG4gICAgICAgICAgICBsZXQgYXV0aERPTUVsID0gcm9vdFRDLmRlYnVnRWxlbWVudC5jaGlsZHJlblswXS5uYXRpdmVFbGVtZW50O1xyXG5cclxuICAgICAgICAgICAgZXhwZWN0KERPTS5xdWVyeVNlbGVjdG9yQWxsKGF1dGhET01FbCwgJ2gzJylbMF0udGV4dENvbnRlbnQpLnRvRXF1YWwoJ1BsZWFzZSBTaWduIEluJyk7XHJcbiAgICAgICAgICB9KTtcclxuICAgICAgfSkpO1xyXG4gIH0pO1xyXG59XHJcblxyXG5AQ29tcG9uZW50KHtcclxuICBzZWxlY3RvcjogJ3Rlc3QtY21wJyxcclxuICBkaXJlY3RpdmVzOiBbQXV0aFBhZ2VdLFxyXG4gIHRlbXBsYXRlOiAnPGF1dGg+PC9hdXRoPidcclxufSlcclxuY2xhc3MgVGVzdENvbXBvbmVudCB7fVxyXG4iXX0=
