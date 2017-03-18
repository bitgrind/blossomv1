$(function() {
    var itemCounter = 2;

    $("#addItem").click(function() {
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
            .appendTo("#cat");
        itemCounter++;
    }); //End of add items to category

    $("#addCat").click(function() {
        $("<div />", {
                class: "form-group",
                id: "cat" + itemCounter
            })
            .append($("<label>" + "Category" + "</label>"))
            .append($("<input />", {
                type: "text",
                name: "category" + itemCounter
            }))
            .append($("<button>" + "Add item" + "</button>", {
                type: "button",
                id: "addItem" + itemCounter
            }))
            .appendTo("#cat");
        itemCounter++;

    }); //add category button

    $("#form").submit(function() {
        event.preventDefault();

    });


}); //jQuery
