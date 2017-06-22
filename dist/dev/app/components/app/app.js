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
var router_1 = require('angular2/router');
var home_1 = require('../home/home');
var form_1 = require('../form/form');
var auth_1 = require('../auth/auth');
var chart_1 = require('../chart/chart');
var table_1 = require('../table/table');
var buttons_1 = require('../buttons/buttons');
var notifications_1 = require('../notifications/notifications');
var typography_1 = require('../typography/typography');
var icons_1 = require('../icons/icons');
var grid_1 = require('../grid/grid');
var index_1 = require('../../shared/index');
var panels_wells_1 = require('../panels-wells/panels-wells');
var App = (function () {
    function App() {
    }
    App = __decorate([
        core_1.Component({
            selector: 'app',
            viewProviders: [index_1.NameList],
            template: '<router-outlet></router-outlet>',
            styles: ["\n    .sample-app-content {\n      font-family: Verdana;\n    }\n    .sample-app-content h1 {\n      color: #999;\n      font-size: 3em;\n    }\n    .sample-app-content h2 {\n      color: #900;\n      font-size: 2em;\n    }\n    .sample-app-content p,\n    .sample-app-content nav {\n      padding: 30px;\n    }\n    .sample-app-content li,\n    .sample-app-content p {\n      font-size: 1.2em;\n    }\n    .sample-app-content li {\n      font-family: Consolas;\n    }\n    .sample-app-content nav a {\n      display: inline-block;\n      margin-right: 15px;\n    }\n    .sample-app-content input,\n    .sample-app-content button {\n      padding: 5px;\n      font-size: 1em;\n      outline: none;\n    }\n  "],
            encapsulation: core_1.ViewEncapsulation.None,
            directives: [router_1.ROUTER_DIRECTIVES]
        }),
        router_1.RouteConfig([
            { path: '/', component: home_1.HomePage, name: 'Dashboard.home' },
            { path: '/home', component: home_1.HomePage, name: 'Dashboard.home' },
            { path: '/form', component: form_1.FormPage, name: 'Dashboard.form' },
            { path: '/blank', component: home_1.HomePage, name: 'Dashboard.blank' },
            { path: '/login', component: auth_1.AuthPage, name: 'Auth' },
            { path: '/chart', component: chart_1.ChartPage, name: 'Dashboard.chart' },
            { path: '/table', component: table_1.TablePage, name: 'Dashboard.table' },
            { path: '/panels-wells', component: panels_wells_1.PanelsWellsPage, name: 'Dashboard.panels-wells' },
            { path: '/buttons', component: buttons_1.ButtonsPage, name: 'Dashboard.buttons' },
            { path: '/notifications', component: notifications_1.NotificationsPage, name: 'Dashboard.notifications' },
            { path: '/typography', component: typography_1.TypographyPage, name: 'Dashboard.typography' },
            { path: '/icons', component: icons_1.IconsPage, name: 'Dashboard.icons' },
            { path: '/grid', component: grid_1.GridPage, name: 'Dashboard.grid' }
        ]), 
        __metadata('design:paramtypes', [])
    ], App);
    return App;
}());
exports.App = App;

//# sourceMappingURL=data:application/json;charset=utf8;base64,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dXJjZXNDb250ZW50IjpbImltcG9ydCB7Q29tcG9uZW50LCBWaWV3RW5jYXBzdWxhdGlvbn0gZnJvbSAnYW5ndWxhcjIvY29yZSc7XHJcbmltcG9ydCB7XHJcbiAgUm91dGVDb25maWcsXHJcbiAgUk9VVEVSX0RJUkVDVElWRVNcclxufSBmcm9tICdhbmd1bGFyMi9yb3V0ZXInO1xyXG4vLyBpbXBvcnQge0hUVFBfUFJPVklERVJTfSBmcm9tICdodHRwL2h0dHAnO1xyXG5cclxuaW1wb3J0IHtIb21lUGFnZX0gZnJvbSAnLi4vaG9tZS9ob21lJztcclxuaW1wb3J0IHtGb3JtUGFnZX0gZnJvbSAnLi4vZm9ybS9mb3JtJztcclxuaW1wb3J0IHtBdXRoUGFnZX0gZnJvbSAnLi4vYXV0aC9hdXRoJztcclxuaW1wb3J0IHtDaGFydFBhZ2V9IGZyb20gJy4uL2NoYXJ0L2NoYXJ0JztcclxuaW1wb3J0IHtUYWJsZVBhZ2V9IGZyb20gJy4uL3RhYmxlL3RhYmxlJztcclxuaW1wb3J0IHtCdXR0b25zUGFnZX0gZnJvbSAnLi4vYnV0dG9ucy9idXR0b25zJztcclxuaW1wb3J0IHtOb3RpZmljYXRpb25zUGFnZX0gZnJvbSAnLi4vbm90aWZpY2F0aW9ucy9ub3RpZmljYXRpb25zJztcclxuaW1wb3J0IHtUeXBvZ3JhcGh5UGFnZX0gZnJvbSAnLi4vdHlwb2dyYXBoeS90eXBvZ3JhcGh5JztcclxuaW1wb3J0IHtJY29uc1BhZ2V9IGZyb20gJy4uL2ljb25zL2ljb25zJztcclxuaW1wb3J0IHtHcmlkUGFnZX0gZnJvbSAnLi4vZ3JpZC9ncmlkJztcclxuaW1wb3J0IHtOYW1lTGlzdH0gZnJvbSAnLi4vLi4vc2hhcmVkL2luZGV4JztcclxuaW1wb3J0IHtQYW5lbHNXZWxsc1BhZ2V9IGZyb20gJy4uL3BhbmVscy13ZWxscy9wYW5lbHMtd2VsbHMnO1xyXG5cclxuQENvbXBvbmVudCh7XHJcbiAgc2VsZWN0b3I6ICdhcHAnLFxyXG4gIHZpZXdQcm92aWRlcnM6IFtOYW1lTGlzdF0sXHJcbiAgdGVtcGxhdGU6ICc8cm91dGVyLW91dGxldD48L3JvdXRlci1vdXRsZXQ+JyxcclxuICBzdHlsZVVybHM6IFsnYXBwL2NvbXBvbmVudHMvYXBwL2FwcC5jc3MnXSxcclxuICBlbmNhcHN1bGF0aW9uOiBWaWV3RW5jYXBzdWxhdGlvbi5Ob25lLFxyXG4gIGRpcmVjdGl2ZXM6IFtST1VURVJfRElSRUNUSVZFU11cclxufSlcclxuQFJvdXRlQ29uZmlnKFtcclxuICB7IHBhdGg6ICcvJywgY29tcG9uZW50OiBIb21lUGFnZSwgbmFtZTogJ0Rhc2hib2FyZC5ob21lJyB9LFxyXG4gIHsgcGF0aDogJy9ob21lJywgY29tcG9uZW50OiBIb21lUGFnZSwgbmFtZTogJ0Rhc2hib2FyZC5ob21lJyB9LFxyXG4gIHsgcGF0aDogJy9mb3JtJywgY29tcG9uZW50OiBGb3JtUGFnZSwgbmFtZTogJ0Rhc2hib2FyZC5mb3JtJyB9LFxyXG4gIHsgcGF0aDogJy9ibGFuaycsIGNvbXBvbmVudDogSG9tZVBhZ2UsIG5hbWU6ICdEYXNoYm9hcmQuYmxhbmsnIH0sXHJcbiAgeyBwYXRoOiAnL2xvZ2luJywgY29tcG9uZW50OiBBdXRoUGFnZSwgbmFtZTogJ0F1dGgnIH0sXHJcbiAgeyBwYXRoOiAnL2NoYXJ0JywgY29tcG9uZW50OiBDaGFydFBhZ2UsIG5hbWU6ICdEYXNoYm9hcmQuY2hhcnQnIH0sXHJcbiAgeyBwYXRoOiAnL3RhYmxlJywgY29tcG9uZW50OiBUYWJsZVBhZ2UsIG5hbWU6ICdEYXNoYm9hcmQudGFibGUnIH0sXHJcbiAgeyBwYXRoOiAnL3BhbmVscy13ZWxscycsIGNvbXBvbmVudDogUGFuZWxzV2VsbHNQYWdlLCBuYW1lOiAnRGFzaGJvYXJkLnBhbmVscy13ZWxscycgfSxcclxuICB7IHBhdGg6ICcvYnV0dG9ucycsIGNvbXBvbmVudDogQnV0dG9uc1BhZ2UsIG5hbWU6ICdEYXNoYm9hcmQuYnV0dG9ucycgfSxcclxuICB7IHBhdGg6ICcvbm90aWZpY2F0aW9ucycsIGNvbXBvbmVudDogTm90aWZpY2F0aW9uc1BhZ2UsIG5hbWU6ICdEYXNoYm9hcmQubm90aWZpY2F0aW9ucycgfSxcclxuICB7IHBhdGg6ICcvdHlwb2dyYXBoeScsIGNvbXBvbmVudDogVHlwb2dyYXBoeVBhZ2UsIG5hbWU6ICdEYXNoYm9hcmQudHlwb2dyYXBoeScgfSxcclxuICB7IHBhdGg6ICcvaWNvbnMnLCBjb21wb25lbnQ6IEljb25zUGFnZSwgbmFtZTogJ0Rhc2hib2FyZC5pY29ucycgfSxcclxuICB7IHBhdGg6ICcvZ3JpZCcsIGNvbXBvbmVudDogR3JpZFBhZ2UsIG5hbWU6ICdEYXNoYm9hcmQuZ3JpZCcgfVxyXG5dKVxyXG5leHBvcnQgY2xhc3MgQXBwIHtcclxufVxyXG4iXX0=
