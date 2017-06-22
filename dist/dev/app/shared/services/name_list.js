"use strict";
var NameList = (function () {
    function NameList() {
        this.names = ['Dijkstra', 'Knuth', 'Turing', 'Hopper'];
    }
    NameList.prototype.get = function () {
        return this.names;
    };
    NameList.prototype.add = function (value) {
        this.names.push(value);
    };
    return NameList;
}());
exports.NameList = NameList;

//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbImFwcC9zaGFyZWQvc2VydmljZXMvbmFtZV9saXN0LnRzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiI7QUFBQTtJQUFBO1FBQ0UsVUFBSyxHQUFHLENBQUMsVUFBVSxFQUFFLE9BQU8sRUFBRSxRQUFRLEVBQUUsUUFBUSxDQUFDLENBQUM7SUFRcEQsQ0FBQztJQU5DLHNCQUFHLEdBQUg7UUFDRSxNQUFNLENBQUMsSUFBSSxDQUFDLEtBQUssQ0FBQztJQUNwQixDQUFDO0lBQ0Qsc0JBQUcsR0FBSCxVQUFJLEtBQWE7UUFDZixJQUFJLENBQUMsS0FBSyxDQUFDLElBQUksQ0FBQyxLQUFLLENBQUMsQ0FBQztJQUN6QixDQUFDO0lBQ0gsZUFBQztBQUFELENBVEEsQUFTQyxJQUFBO0FBVFksZ0JBQVEsV0FTcEIsQ0FBQSIsImZpbGUiOiJhcHAvc2hhcmVkL3NlcnZpY2VzL25hbWVfbGlzdC5qcyIsInNvdXJjZXNDb250ZW50IjpbImV4cG9ydCBjbGFzcyBOYW1lTGlzdCB7XHJcbiAgbmFtZXMgPSBbJ0RpamtzdHJhJywgJ0tudXRoJywgJ1R1cmluZycsICdIb3BwZXInXTtcclxuXHJcbiAgZ2V0KCk6IHN0cmluZ1tdIHtcclxuICAgIHJldHVybiB0aGlzLm5hbWVzO1xyXG4gIH1cclxuICBhZGQodmFsdWU6IHN0cmluZyk6IHZvaWQge1xyXG4gICAgdGhpcy5uYW1lcy5wdXNoKHZhbHVlKTtcclxuICB9XHJcbn1cclxuIl19
