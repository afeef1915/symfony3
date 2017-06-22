"use strict";
var name_list_1 = require('./name_list');
function main() {
    describe('NameList Service', function () {
        var nameList;
        beforeEach(function () {
            nameList = new name_list_1.NameList;
        });
        it('should return the list of names', function () {
            var names = nameList.get();
            expect(names).toEqual(jasmine.any(Array));
        });
    });
}
exports.main = main;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9zaGFyZWQvc2VydmljZXMvbmFtZV9saXN0LnNwZWMudHMiXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IjtBQUFBLDBCQUF1QixhQUFhLENBQUMsQ0FBQTtBQUVyQztJQUNFLFFBQVEsQ0FBQyxrQkFBa0IsRUFBRTtRQUMzQixJQUFJLFFBQVEsQ0FBQztRQUViLFVBQVUsQ0FBQztZQUNULFFBQVEsR0FBRyxJQUFJLG9CQUFRLENBQUM7UUFDMUIsQ0FBQyxDQUFDLENBQUM7UUFFSCxFQUFFLENBQUMsaUNBQWlDLEVBQUU7WUFDcEMsSUFBSSxLQUFLLEdBQUcsUUFBUSxDQUFDLEdBQUcsRUFBRSxDQUFDO1lBQzNCLE1BQU0sQ0FBQyxLQUFLLENBQUMsQ0FBQyxPQUFPLENBQUMsT0FBTyxDQUFDLEdBQUcsQ0FBQyxLQUFLLENBQUMsQ0FBQyxDQUFDO1FBQzVDLENBQUMsQ0FBQyxDQUFDO0lBQ0wsQ0FBQyxDQUFDLENBQUM7QUFDTCxDQUFDO0FBYmUsWUFBSSxPQWFuQixDQUFBIiwiZmlsZSI6ImFwcC9zaGFyZWQvc2VydmljZXMvbmFtZV9saXN0LnNwZWMuanMiLCJzb3VyY2VzQ29udGVudCI6WyJpbXBvcnQge05hbWVMaXN0fSBmcm9tICcuL25hbWVfbGlzdCc7XHJcblxyXG5leHBvcnQgZnVuY3Rpb24gbWFpbigpIHtcclxuICBkZXNjcmliZSgnTmFtZUxpc3QgU2VydmljZScsICgpID0+IHtcclxuICAgIGxldCBuYW1lTGlzdDtcclxuXHJcbiAgICBiZWZvcmVFYWNoKCgpID0+IHtcclxuICAgICAgbmFtZUxpc3QgPSBuZXcgTmFtZUxpc3Q7XHJcbiAgICB9KTtcclxuXHJcbiAgICBpdCgnc2hvdWxkIHJldHVybiB0aGUgbGlzdCBvZiBuYW1lcycsICgpID0+IHtcclxuICAgICAgbGV0IG5hbWVzID0gbmFtZUxpc3QuZ2V0KCk7XHJcbiAgICAgIGV4cGVjdChuYW1lcykudG9FcXVhbChqYXNtaW5lLmFueShBcnJheSkpO1xyXG4gICAgfSk7XHJcbiAgfSk7XHJcbn1cclxuIl19
