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
var Chart = (function () {
    function Chart() {
    }
    Chart = __decorate([
        core_1.Component({
            selector: 'chart',
            template: "\n    <div class=\"col-lg-6 col-sm-12\" id=\"line-chart\">\n      <div class=\"panel panel-default\">\n        <div class=\"panel-heading\">{{title}}</div>\n        <div class=\"panel-body\">\n          <canvas></canvas>\n        </div>\n      </div>\n    </div>\n  ",
            properties: ['title']
        }), 
        __metadata('design:paramtypes', [])
    ], Chart);
    return Chart;
}());
var ChartPage = (function () {
    function ChartPage() {
    }
    ChartPage = __decorate([
        core_1.Component({
            selector: 'chart-page',
            template: "\n    <wrapper>\n      <div class=\"row\">\n        <div class=\"col-lg-12\">\n          <h1 class=\"page-header\">Charts</h1>\n        </div>\n        <!-- /.col-lg-12 -->\n      </div>\n      <div class=\"row\">\n        <chart title=\"Line Chart\" ></chart>\n        <chart title=\"Bar Chart\"></chart>\n      </div>\n      <div class=\"row\">\n        <chart title=\"Doughnut Chart\"></chart>\n        <chart title=\"Radar Chart\"></chart>\n        <chart title=\"Pie Chart\"></chart>\n        <chart title=\"Polar Area Chart\"></chart>\n        <chart title=\"Dynamic Chart\">\n          <button type=\"button\" class=\"btn btn-primary pull-right\" ng-click=\"dynamic.toggle()\">Toggle</button>\n        </chart>\n      </div>\n    </wrapper>\n  ",
            styles: ["\n\n  "],
            directives: [header_1.WrapperCmp, Chart, common_1.CORE_DIRECTIVES]
        }), 
        __metadata('design:paramtypes', [])
    ], ChartPage);
    return ChartPage;
}());
exports.ChartPage = ChartPage;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9jb21wb25lbnRzL2NoYXJ0L2NoYXJ0LnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7QUFBQSxxQkFBd0IsZUFBZSxDQUFDLENBQUE7QUFDeEMsdUJBQThCLGlCQUFpQixDQUFDLENBQUE7QUFDaEQsdUJBQXlCLGtCQUFrQixDQUFDLENBQUE7QUFnQjVDO0lBQUE7SUFFQSxDQUFDO0lBaEJEO1FBQUMsZ0JBQVMsQ0FBQztZQUNULFFBQVEsRUFBRSxPQUFPO1lBQ2pCLFFBQVEsRUFBRSw0UUFTVDtZQUNELFVBQVUsRUFBRSxDQUFDLE9BQU8sQ0FBQztTQUN0QixDQUFDOzthQUFBO0lBR0YsWUFBQztBQUFELENBRkEsQUFFQyxJQUFBO0FBZ0NEO0lBQUE7SUFDQSxDQUFDO0lBL0JEO1FBQUMsZ0JBQVMsQ0FBQztZQUNULFFBQVEsRUFBRSxZQUFZO1lBQ3RCLFFBQVEsRUFBRSxpdkJBc0JUO1lBQ0QsTUFBTSxFQUFFLENBQUMsUUFFUixDQUFDO1lBQ0YsVUFBVSxFQUFFLENBQUMsbUJBQVUsRUFBRSxLQUFLLEVBQUUsd0JBQWUsQ0FBQztTQUNqRCxDQUFDOztpQkFBQTtJQUVGLGdCQUFDO0FBQUQsQ0FEQSxBQUNDLElBQUE7QUFEWSxpQkFBUyxZQUNyQixDQUFBIiwiZmlsZSI6ImFwcC9jb21wb25lbnRzL2NoYXJ0L2NoYXJ0LmpzIiwic291cmNlc0NvbnRlbnQiOlsiaW1wb3J0IHtDb21wb25lbnR9IGZyb20gJ2FuZ3VsYXIyL2NvcmUnO1xyXG5pbXBvcnQge0NPUkVfRElSRUNUSVZFU30gZnJvbSAnYW5ndWxhcjIvY29tbW9uJztcclxuaW1wb3J0IHtXcmFwcGVyQ21wfSBmcm9tICcuLi9oZWFkZXIvaGVhZGVyJztcclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAnY2hhcnQnLFxyXG4gIHRlbXBsYXRlVXJsOiAnYXBwL2NvbXBvbmVudHMvY2hhcnQvY2hhcnQtZWxlbWVudC5odG1sJyxcclxuICBwcm9wZXJ0aWVzOiBbJ3RpdGxlJ11cclxufSlcclxuY2xhc3MgQ2hhcnQge1xyXG4gIHRpdGxlOiBzdHJpbmc7XHJcbn1cclxuXHJcbkBDb21wb25lbnQoe1xyXG4gIHNlbGVjdG9yOiAnY2hhcnQtcGFnZScsXHJcbiAgdGVtcGxhdGVVcmw6ICdhcHAvY29tcG9uZW50cy9jaGFydC9jaGFydC5odG1sJyxcclxuICBzdHlsZVVybHM6IFsnYXBwL2NvbXBvbmVudHMvY2hhcnQvY2hhcnQuY3NzJ10sXHJcbiAgZGlyZWN0aXZlczogW1dyYXBwZXJDbXAsIENoYXJ0LCBDT1JFX0RJUkVDVElWRVNdXHJcbn0pXHJcbmV4cG9ydCBjbGFzcyBDaGFydFBhZ2Uge1xyXG59XHJcbiJdfQ==
