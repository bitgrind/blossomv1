$(function() {
    var itemCounter = 1;

    $("#addCat").click(function() {
        $("<div />", {
                id: "item" + itemCounter
            })
            .append($("<label>" + "Item" + "</label>"))
            .append($("<input />", {
                type: "text",
                name: "item" + itemCounter
            }))
            .append($("<label>" + "Price" + "</label>"))
            .append($("<input />", {
                type: "text",
                name: "item" + itemCounter
            }))
            .appendTo("#cat1");
        itemCounter++;
    });
}); //jQuery
